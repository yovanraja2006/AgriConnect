<?php
// Database configuration
$host = 'localhost'; // Default host for XAMPP
$db = 'agriconnect'; // Your database name
$user = 'root'; // Default MySQL user for XAMPP
$pass = ''; // Default MySQL password for XAMPP (blank)

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection error
    die('Database connection failed: ' . $e->getMessage());
}
?>