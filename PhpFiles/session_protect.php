<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require 'db.php';

$timeout_duration = 300; // 5 minutes

if (!isset($_SESSION['user_id'])) {
    header("Location: /Suman_TulsianiCHS/login.php");
    exit();
}

// If user is inactive for too long
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeout_duration) {
    // Mark user as logged out in login_logs
    $update = $pdo->prepare("UPDATE login_logs SET logout_time = NOW() WHERE user_id = ? ORDER BY id DESC LIMIT 1");
    $update->execute([$_SESSION['user_id']]);

    // Delete from active_sessions (if you use it)
    $stmt = $pdo->prepare("DELETE FROM active_sessions WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);

    session_unset();
    session_destroy();

    header("Location: /SUMAN_TULSIANICHS/login.php?timeout=1");
    exit();
}

// Refresh last activity time
$_SESSION['last_activity'] = time();
?>
