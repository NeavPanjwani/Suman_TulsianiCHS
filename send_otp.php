<?php
// send_otp.php
require __DIR__ . './PhpFiles/session_protect.php';
require __DIR__ . './PhpFiles/db.php';
require __DIR__ . './PhpFiles/handle_send_otp.php';
require __DIR__ . './PhpFiles/helpers.php';
require_once __DIR__ . '../vendor/autoload.php';


if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect('forgot_password.php');
}

$flat = safePost('flat_number');
if ($flat === '') {
    die('Flat number required.');
}

// look up user and email
$stmt = $mysqli->prepare("SELECT id, email, name FROM users WHERE flat_number = ?");
$stmt->bind_param('s', $flat);
$stmt->execute();
$res = $stmt->get_result();
$user = $res->fetch_assoc();
$stmt->close();

if (!$user || empty($user['email'])) {
    // Generic response to avoid user enumeration
    // But you might want to tell user to contact society admin if email not found.
    echo "If an account exists for this flat with an associated email, an OTP will be sent.";
    exit;
}

// Basic rate-limiting using session: 1 request per 60 seconds
$now = time();
if (isset($_SESSION['otp_request_time']) && ($now - $_SESSION['otp_request_time']) < 60) {
    $wait = 60 - ($now - $_SESSION['otp_request_time']);
    die("Please wait {$wait} seconds before requesting another OTP.");
}

// Generate OTP and store in session hashed
$otp = random_int(100000, 999999); // 6-digit
$otp_hash = password_hash((string)$otp, PASSWORD_DEFAULT);
$expiry = $now + 600; // 10 minutes

// Store minimal necessary info in session
$_SESSION['password_reset'] = [
    'user_id'    => $user['id'],
    'flat'       => $flat,
    'otp_hash'   => $otp_hash,
    'expires'    => $expiry,
    'attempts'   => 0,
    'request_ip' => $_SERVER['REMOTE_ADDR'] ?? '',
    'ua'         => substr($_SERVER['HTTP_USER_AGENT'] ?? '', 0, 200),
];
$_SESSION['otp_request_time'] = $now;

// Send OTP email
$sent = sendOTPEmail($user['email'], $user['name'] ?? $flat, $otp);
// After you fetched $user from DB
if (!$user) {
    // Keep generic to avoid enumerating flats that don't exist
    echo "If an account exists for this flat with an associated email, an OTP will be sent.";
    exit;
}

// If user exists but email is NULL/empty, show a friendly actionable message
if (empty(trim($user['email'] ?? ''))) {
    // You can also include admin contact if you have one, e.g. admin@yourdomain.com
    $flat_display = htmlspecialchars($flat, ENT_QUOTES, 'UTF-8');
    echo "<p>No email address is registered for Flat <strong>{$flat_display}</strong>.</p>";
    echo "<p>Please contact your society administrator or office to register an email so you can receive OTPs and reset your password.</p>";
    echo "<p>If you are the society admin, you can update the email in the system via the admin panel or use the 'Update Email' form provided.</p>";
    // Optionally show a link to an update form for authenticated admins:
    // echo "<p><a href='update_email.php'>Update Email (Admins)</a></p>";
    exit;
}
else {
    // cleanup on failure
    clear_otp_session();
    die('Failed to send OTP. Please contact support.');
}
