<?php
require 'session-config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    // show OTP form if needed
    echo '<form method="post"><input name="otp"><button>Verify OTP</button></form>';
    exit;
}

$input_otp = trim($_POST['otp'] ?? '');
if (!$input_otp || !isset($_SESSION['password_reset'])) {
    exit('Invalid or expired OTP request.');
}

$pr = &$_SESSION['password_reset'];

// check expiry
if (time() > $pr['expires']) {
    unset($_SESSION['password_reset']);
    exit('OTP expired. Please request a new one.');
}

// optional: check UA/IP (basic check)
if (($pr['request_ip'] ?? '') !== $_SERVER['REMOTE_ADDR']) {
    // You can choose to be strict or lenient here. If strict, reject.
    // exit('IP mismatch. Please request a new OTP.');
}

// check attempts
if ($pr['attempts'] >= 5) {
    unset($_SESSION['password_reset']);
    exit('Maximum verification attempts exceeded. Request a new OTP.');
}

// verify OTP hash
if (password_verify($input_otp, $pr['otp_hash'])) {
    // success: mark session to allow password reset
    $_SESSION['can_reset_user'] = $pr['user_id'];

    // cleanup OTP data immediately
    unset($_SESSION['password_reset'], $_SESSION['otp_request_time']);

    // regenerate session id again (security best-practice)
    session_regenerate_id(true);

    echo 'OTP verified. Proceed to reset password.';
    // redirect to reset_password.php
    // header('Location: reset_password.php');
    exit;
} else {
    $pr['attempts'] += 1;
    $remaining = 5 - $pr['attempts'];
    if ($remaining <= 0) {
        unset($_SESSION['password_reset']);
        exit('No attempts left. Request a new OTP.');
    }
    echo "Invalid OTP. Attempts left: $remaining";
    exit;
}
