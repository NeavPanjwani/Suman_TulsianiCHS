<?php
session_start();
require 'db.php';

if (isset($_SESSION['user_id'])) {
    // ✅ Update last login log's logout time
    $update = $pdo->prepare("
        UPDATE login_logs 
        SET logout_time = NOW() 
        WHERE id = (
            SELECT id FROM login_logs WHERE user_id = ? ORDER BY id DESC LIMIT 1
        )
    ");
    $update->execute([$_SESSION['user_id']]);

    // 🧹 Remove from active_sessions
    $stmt = $pdo->prepare("DELETE FROM active_sessions WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
}

// ❌ Destroy session
session_unset();
session_destroy();

// 🔁 Redirect to login with message
header("Location: ../login.php?loggedout=1");
exit;
?>
