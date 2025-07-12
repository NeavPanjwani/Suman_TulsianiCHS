<?php
session_start();
require 'db.php';

$flat_no = $_POST['flat_no'] ?? '';
$password = $_POST['password'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM users WHERE flat_no = ?");
$stmt->execute([$flat_no]);
$user = $stmt->fetch();

if ($user && $password === $user['password']) {
    // Check if user is already logged in{
    // Enforce single login per user
    $checkSession = $pdo->prepare("SELECT * FROM active_sessions WHERE user_id = ?");
    $checkSession->execute([$user['id']]);
    $existingSession = $checkSession->fetch();

    if ($existingSession && $existingSession['session_id'] !== session_id()) {
        echo "Already logged in on another device.";
        exit;
    }

    // Set session and store it
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['last_activity'] = time();

    $ip = $_SERVER['REMOTE_ADDR'];
    //$user_agent = $_SERVER['HTTP_USER_AGENT'];
    function simplifyAgent($ua) {
    $os = 'Other OS';
    $browser = 'Other Browser';

    if (strpos($ua, 'Windows') !== false) $os = 'Windows';
    elseif (strpos($ua, 'Mac') !== false) $os = 'Mac';
    elseif (strpos($ua, 'Android') !== false) $os = 'Android';
    elseif (strpos($ua, 'iPhone') !== false) $os = 'iPhone';

    if (strpos($ua, 'Chrome') !== false) $browser = 'Chrome';
    elseif (strpos($ua, 'Firefox') !== false) $browser = 'Firefox';
    elseif (strpos($ua, 'Safari') !== false && strpos($ua, 'Chrome') === false) $browser = 'Safari';

    return "$browser on $os";
}
    $user_agent = simplifyAgent($_SERVER['HTTP_USER_AGENT']);

    $latitude = $_POST['latitude'] ?? null;
    $longitude = $_POST['longitude'] ?? null;

    // Log login
    $log_stmt = $pdo->prepare("INSERT INTO login_logs (user_id, ip_address, user_agent, latitude, longitude) VALUES (?, ?, ?, ?, ?)");
    $log_stmt->execute([$user['id'], $ip, $user_agent, $latitude, $longitude]);

    // Update active session
    $session_stmt = $pdo->prepare("REPLACE INTO active_sessions (user_id, session_id) VALUES (?, ?)");
    $session_stmt->execute([$user['id'], session_id()]);

    header("Location: ../index.php");
    exit;
} else {
    echo "Invalid login credentials.";
}
?>