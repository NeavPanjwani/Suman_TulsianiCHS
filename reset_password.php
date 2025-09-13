<?php
require './PhpFiles/session_protect.php';
require 'inc/db.php';

if (!isset($_SESSION['can_reset_user'])) {
    exit('Not authorized to reset password.');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uid = $_SESSION['can_reset_user'];
    $p1 = $_POST['password'] ?? '';
    $p2 = $_POST['password2'] ?? '';

    if ($p1 !== $p2) exit('Passwords do not match.');
    if (strlen($p1) < 8) exit('Password too short.');

    $pwHash = password_hash($p1, PASSWORD_DEFAULT);
    $stmt = $pdo->prepare("UPDATE users SET password = ? WHERE id = ?");
    $stmt->execute([$pwHash, $uid]);

    // cleanup session
    unset($_SESSION['can_reset_user']);
    session_regenerate_id(true);
    echo 'Password updated successfully.';
    exit;
}

// show form
?>
<form method="post">
 <input type="password" name="password" required>
 <input type="password" name="password2" required>
 <button>Set New Password</button>
</form>
