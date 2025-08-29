<?php
session_start();
require 'db.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// ⏰ Remove stale sessions older than 5 minutes
$pdo->prepare("DELETE FROM active_sessions WHERE last_seen < NOW() - INTERVAL 5 MINUTE")->execute();

$flat_no = $_POST['flat_no'] ?? '';
$password = $_POST['password'] ?? '';
$override = $_POST['override'] ?? ''; // override button clicked?

$stmt = $pdo->prepare("SELECT * FROM users WHERE flat_no = ?");
$stmt->execute([$flat_no]);
$user = $stmt->fetch();

if ($user && $password === $user['password']) {
    $currentSessionId = session_id();

    // 🔍 Check existing session
    $checkSession = $pdo->prepare("SELECT * FROM active_sessions WHERE user_id = ?");
    $checkSession->execute([$user['id']]);
    $existingSession = $checkSession->fetch();

    if ($existingSession) {
        $lastSeen = strtotime($existingSession['last_seen']);
        $diff = time() - $lastSeen;

        if ($existingSession['session_id'] !== $currentSessionId) {
            if ($diff <= 300 && !$override) {
                // 🔐 Block and ask for override
                $_SESSION['pending_user'] = [
                    'flat_no' => $flat_no,
                    'password' => $password,
                    //'latitude' => $_POST['latitude'] ?? null,
                    //'longitude' => $_POST['longitude'] ?? null
                ];
                header("Location: ../login.php?multiple=1");
                exit;
            } else {
                // ✅ Either override or session expired — clear it
                $pdo->prepare("DELETE FROM active_sessions WHERE user_id = ?")->execute([$user['id']]);
            }
        }
    }

    // ✅ Login: Save session + log
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['last_activity'] = time();

    // 📍 IP and Location
    $ip = $_SERVER['REMOTE_ADDR'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    //$latitude = $_POST['latitude'] ?? null;
    //$longitude = $_POST['longitude'] ?? null;

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

    $device = simplifyAgent($user_agent);

    // 📝 Log login
    $log_stmt = $pdo->prepare("INSERT INTO login_logs (user_id, ip_address, user_agent) VALUES (?, ?, ?)");
    $log_stmt->execute([$user['id'], $ip, $device]);

    

    // 💾 Save session
    $session_stmt = $pdo->prepare("REPLACE INTO active_sessions (user_id, session_id, last_seen) VALUES (?, ?, NOW())");
    $session_stmt->execute([$user['id'], $currentSessionId]);

    // ✅ Clean up override session data if it exists
    unset($_SESSION['pending_user']);

    header("Location: ./index.php");
    exit;
} else {
    header("Location: ../login.php?error=1");
    exit;
}
?>