<?php
// PhpFiles/handle_send_otp.php
// Sends OTP to the email registered for a flat number.
// Returns JSON: { status: "success"|"error", message: "..." }

ini_set('display_errors', 1);
error_reporting(E_ALL);

// session start (light hardening)
if (session_status() === PHP_SESSION_NONE) {
    // If testing on localhost without HTTPS, you may set 'secure' => false
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'domain'   => '',      // set if needed
        'secure'   => false,   // change to true in production with HTTPS
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

header('Content-Type: application/json; charset=utf-8');

// includes - adjust paths if your structure differs
require_once __DIR__ . './PhpFiles/db.php';       // defines $mysqli (MySQLi connection)
require_once __DIR__ . './PhpFiles/helpers.php';  // safePost() if present, else we'll fallback

// helper: safePost fallback
if (!function_exists('safePost')) {
    function safePost($k) {
        return isset($_POST[$k]) ? trim($_POST[$k]) : '';
    }
}

// read input
$flat = safePost('flat_number') ?: safePost('flat_no') ?: safePost('flat'); // flexible keys

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}
if ($flat === '') {
    echo json_encode(['status' => 'error', 'message' => 'Flat number is required.']);
    exit;
}

// Lookup user by flat_number
$stmt = $mysqli->prepare("SELECT id, email, name FROM users WHERE flat_number = ?");
if (!$stmt) {
    error_log("DB prepare failed: " . $mysqli->error);
    echo json_encode(['status' => 'error', 'message' => 'Server error.']);
    exit;
}
$stmt->bind_param('s', $flat);
$stmt->execute();
$res = $stmt->get_result();
$user = $res->fetch_assoc();
$stmt->close();

// If user not found => do a generic response (avoid enumeration)
if (!$user) {
    echo json_encode(['status' => 'ok', 'message' => 'If an account exists for this flat with an associated email, an OTP will be sent.']);
    exit;
}

// If email missing, prompt friendly message
if (empty(trim($user['email'] ?? ''))) {
    $flat_display = htmlspecialchars($flat, ENT_QUOTES, 'UTF-8');
    $msg = "No email address is registered for Flat {$flat_display}. Please contact your society administrator to register an email address so you can receive OTPs and reset your password.";
    // Optional: log event for admin follow-up
    error_log("OTP requested for flat {$flat} but email missing. IP: " . ($_SERVER['REMOTE_ADDR'] ?? ''));
    echo json_encode(['status' => 'error', 'message' => $msg]);
    exit;
}

// Rate limit: allow 1 request per 60 seconds (session-based)
$now = time();
if (isset($_SESSION['otp_request_time']) && ($now - $_SESSION['otp_request_time']) < 60) {
    $wait = 60 - ($now - $_SESSION['otp_request_time']);
    echo json_encode(['status' => 'error', 'message' => "Please wait {$wait} seconds before requesting another OTP."]);
    exit;
}

// Generate OTP and store hashed OTP in session
$otp = random_int(100000, 999999); // 6 digit
$otp_hash = password_hash((string)$otp, PASSWORD_DEFAULT);
$expiry = $now + 600; // 10 minutes

$_SESSION['password_reset'] = [
    'user_id'    => (int)$user['id'],
    'flat'       => $flat,
    'otp_hash'   => $otp_hash,
    'expires'    => $expiry,
    'attempts'   => 0,
    'request_ip' => $_SERVER['REMOTE_ADDR'] ?? '',
    'ua'         => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 200),
];
$_SESSION['otp_request_time'] = $now;

// --- Send OTP via PHPMailer using same Gmail SMTP as your contact file ---
// You can replace this block with a call to your shared mail wrapper later.

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php'; // adjust if vendor is elsewhere

$mail = new PHPMailer(true);

try {
    // SMTP config - reuse your contact form settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'veenatheveenagroup@gmail.com'; // your smtp username
    $mail->Password   = 'rdsaakmmgjupqjcl';             // app password or smtp password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;   // or ENCRYPTION_STARTTLS with port 587
    $mail->Port       = 465;

    $mail->setFrom('veenatheveenagroup@gmail.com', 'Veena Infotech');
    $mail->addAddress($user['email'], $user['name'] ?? '');

    $mail->isHTML(true);
    $mail->Subject = 'Your OTP to reset password - Veena Infotech';

    $body  = "<p>Dear " . htmlspecialchars($user['name'] ?? 'Member') . ",</p>";
    $body .= "<p>Your OTP to reset your password is: <strong>" . htmlspecialchars((string)$otp) . "</strong></p>";
    $body .= "<p>This OTP will expire in <strong>10 minutes</strong>. If you did not request this, please ignore this email.</p>";
    $body .= "<p>Regards,<br/>Veena Infotech</p>";

    $mail->Body    = $body;
    $mail->AltBody = "Your OTP is: {$otp} - valid for 10 minutes.";

    $mail->send();

    // Security: regenerate session id after storing OTP
    session_regenerate_id(true);

    echo json_encode(['status' => 'success', 'message' => 'OTP sent to the registered email address. Please check your inbox (and spam).']);
    exit;
} catch (Exception $e) {
    // cleanup on failure
    unset($_SESSION['password_reset'], $_SESSION['otp_request_time']);
    error_log("OTP mail error: " . $e->getMessage());
    echo json_encode(['status' => 'error', 'message' => 'Failed to send OTP. Please contact support.']);
    exit;
}
