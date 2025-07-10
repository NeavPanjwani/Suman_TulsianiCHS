<?php
$host = 'localhost';       // or your hosting address
$db   = 'suman_tulsiani_chs';  // your database name
$user = 'root';            // your DB username
$pass = '';                // your DB password (often empty in XAMPP)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
} catch (PDOException $e) {
    echo "Database connection failed: " . $e->getMessage();
    exit;
}
