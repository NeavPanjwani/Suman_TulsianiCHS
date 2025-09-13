<?php
// session_protect.php
// Protect pages: enforce login + inactivity timeout + update login_logs and active_sessions

// Session config/hardening - only set these if session not already started elsewhere
if (session_status() === PHP_SESSION_NONE) {
    // If you are on localhost without HTTPS, set 'secure' => false while testing
    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'domain'   => '',    // set if needed
        'secure'   => true,  // true in production with HTTPS
        'httponly' => true,
        'samesite' => 'Lax',
    ]);
    session_start();
}

require_once __DIR__ . './PhpFile/db.php'; // Ensure db.php sets $pdo (PDO instance)

// Timeout in seconds (5 minutes = 300)
$timeout_duration = 300;

// Ensure we have a logged-in user
if (empty($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit();
}

// Cast user id to int (avoid injection / type issues)
$userId = (int) $_SESSION['user_id'];

// Check last_activity and enforce inactivity logout
$now = time();

if (isset($_SESSION['last_activity']) && ($now - (int)$_SESSION['last_activity']) > $timeout_duration) {
    try {
        // First, attempt to find the latest login_logs entry id for this user
        $stmt = $pdo->prepare("SELECT id FROM login_logs WHERE user_id = ? ORDER BY id DESC LIMIT 1");
        $stmt->execute([$userId]);
        $lastLog = $stmt->fetchColumn();

        if ($lastLog !== false) {
            // Update that specific row
            $upd = $pdo->prepare("UPDATE login_logs SET logout_time = NOW() WHERE id = ?");
            $upd->execute([$lastLog]);
        }

        // Delete active_sessions (if your schema stores session rows)
        $stmt2 = $pdo->prepare("DELETE FROM active_sessions WHERE user_id = ?");
        $stmt2->execute([$userId]);
    } catch (PDOException $e) {
        // Log the error (do NOT display to user)
        error_log("session_protect DB error: " . $e->getMessage());
        // you can continue with session destroy even if DB fails
    }

    // Clear session data and destroy
    $_SESSION = [];
    if (ini_get("session.use_cookies")) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params['path'], $params['domain'],
            $params['secure'], $params['httponly']
        );
    }
    session_destroy();

    // Optionally regenerate a fresh id (not strictly necessary after destroy)
    header("Location: ../login.php?timeout=1");
    exit();
}

// Update last_activity on every request
$_SESSION['last_activity'] = $now;
