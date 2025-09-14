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

// Generate CSRF token if not exists
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

header('Content-Type: application/json; charset=utf-8');

// includes - adjust paths if your structure differs
require_once __DIR__ . '/../PhpFiles/db.php';       // defines $pdo (PDO connection)
require_once __DIR__ . '/../PhpFiles/helpers.php';  // safePost() if present, else we'll fallback
require_once __DIR__ . '/../PhpFiles/mail.php';     // mail functions

// helper: safePost fallback
if (!function_exists('safePost')) {
    function safePost($k) {
        return isset($_POST[$k]) ? trim($_POST[$k]) : '';
    }
}

// Validate CSRF token
if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request. Security token mismatch.']);
    exit;
}

// read input
$flat = safePost('flat_no') ?: safePost('flat_number') ?: safePost('flat'); // flexible keys

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
    exit;
}
if ($flat === '') {
    echo json_encode(['status' => 'error', 'message' => 'Flat number is required.']);
    exit;
}

// Function to update user email in database
function updateUserEmail($pdo, $flatNo, $email) {
    try {
        $stmt = $pdo->prepare("UPDATE users SET email = ? WHERE flat_no = ?");
        return $stmt->execute([$email, $flatNo]);
    } catch (PDOException $e) {
        error_log("Database error: " . $e->getMessage());
        return false;
    }
}

// Lookup user by flat_number
try {
    $stmt = $pdo->prepare("SELECT id, flat_no, email FROM users WHERE flat_no = ?");
    $stmt->execute([$flat]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    error_log("DB error: " . $e->getMessage());
    echo json_encode(['status' => 'error', 'message' => 'Server error.']);
    exit;
}

// If user not found => do a generic response (avoid enumeration)
if (!$user) {
    echo json_encode(['status' => 'ok', 'message' => 'If an account exists for this flat with an associated email, an OTP will be sent.']);
    exit;
}

// If email missing or invalid, try to get it from CSV
if (!isset($user['email']) || empty(trim($user['email'])) || !filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
    $csvFile = $_SERVER['DOCUMENT_ROOT'] . '/Suman_TulsianiCHS/users - users.csv';
    $emailFound = false;
    
    if (file_exists($csvFile)) {
        if (($handle = fopen($csvFile, "r")) !== FALSE) {
            // Skip header row
            fgetcsv($handle);
            
            while (($data = fgetcsv($handle)) !== FALSE) {
                // Assuming CSV structure: id, flat_no, email, password
                if (isset($data[1]) && $data[1] === $flat && isset($data[2]) && filter_var($data[2], FILTER_VALIDATE_EMAIL)) {
                    $user['email'] = $data[2];
                    // Update email in database
                    updateUserEmail($pdo, $flat, $user['email']);
                    $emailFound = true;
                    break;
                }
            }
            fclose($handle);
        }
    }
    
    // If still no valid email
    if (!$emailFound) {
        $flat_display = htmlspecialchars($flat, ENT_QUOTES, 'UTF-8');
        $msg = "No valid email address is registered for Flat {$flat_display}. Please contact your society administrator to register an email address so you can receive OTPs and reset your password.";
        // Optional: log event for admin follow-up
        error_log("OTP requested for flat {$flat} but email missing. IP: " . ($_SERVER['REMOTE_ADDR'] ?? ''));
        echo json_encode(['status' => 'error', 'message' => $msg]);
        exit;
    }
}

// Rate limit: allow 1 request per 60 seconds (session-based)
$now = time();
if (isset($_SESSION['otp_request_time']) && ($now - $_SESSION['otp_request_time']) < 60) {
    $wait = 60 - ($now - $_SESSION['otp_request_time']);
    echo json_encode(['status' => 'error', 'message' => "Please wait {$wait} seconds before requesting another OTP."]);
    exit;
}

// Generate OTP and store hashed OTP in session
$otp = sprintf("%06d", random_int(100000, 999999)); // 6 digit
$otp_hash = password_hash((string)$otp, PASSWORD_DEFAULT);
$expiry = $now + 1800; // 30 minutes (as per requirements)

$_SESSION['password_reset'] = [
    'user_id'    => (int)$user['id'],
    'flat'       => $flat,
    'otp_hash'   => $otp_hash,
    'expires'    => $expiry,
    'attempts'   => 0,
    'max_attempts' => 5,
    'request_ip' => $_SERVER['REMOTE_ADDR'] ?? '',
    'ua'         => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 200),
];
$_SESSION['otp_request_time'] = $now;

// Send OTP via email using the mail.php functions

// Prepare email content
$subject = 'Your Password Reset OTP - Suman Tulsiani CHS';

$body  = "<p>Dear " . htmlspecialchars($user['name'] ?? 'Resident') . ",</p>";
$body .= "<p>Your OTP to reset your password is: <strong>" . htmlspecialchars((string)$otp) . "</strong></p>";
$body .= "<p>This OTP will expire in <strong>30 minutes</strong>. If you did not request this, please ignore this email.</p>";
$body .= "<p>Regards,<br/>Suman Tulsiani CHS</p>";

$plainText = "Your OTP is: {$otp} - valid for 30 minutes.";

try {
    // Use the mail function from mail.php
    $mailSent = sendOTPEmail($user['email'], $flat, $otp, $flat);

    // Security: regenerate session id after storing OTP
    session_regenerate_id(true);
    
    // Store the time of this OTP request for rate limiting
    $_SESSION['otp_request_time'] = $now;
    
    // Mask email for privacy in the response
    $maskedEmail = !empty($user['email']) ? preg_replace('/(?<=.{3}).(?=.*@)/', '*', $user['email']) : 'no-email@example.com';
    
    // Redirect to OTP verification page
    $_SESSION['awaiting_otp_verification'] = true;
    header('Location: ../verify_otp.php?email=' . urlencode($maskedEmail));
    exit;
} catch (Exception $e) {
    // cleanup on failure
    unset($_SESSION['password_reset'], $_SESSION['otp_request_time']);
    error_log("OTP mail error: " . $e->getMessage());
    echo json_encode(['status' => 'error', 'message' => 'Failed to send OTP. Please try again later.']);
    exit;
}
