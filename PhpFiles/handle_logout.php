<?php
session_start();
require 'db.php';

if (isset($_SESSION['user_id'])) {
    // Update logout_time
    $update = $pdo->prepare("UPDATE login_logs SET logout_time = NOW() WHERE user_id = ? ORDER BY id DESC LIMIT 1");
    $update->execute([$_SESSION['user_id']]);

    // Remove active session
    $stmt = $pdo->prepare("DELETE FROM active_sessions WHERE user_id = ?");
    $stmt->execute([$_SESSION['user_id']]);
}

session_unset();
session_destroy();

header("Location: ../login.php?loggedout=1");
exit;
//This file handles user logout, updates the logout time in the database, and redirects to the login page with a logout confirmation message.
//Ensure to include this file in your logout button or link action. 
?>
