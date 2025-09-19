<?php
$servername = "localhost";  // Or your specific database server
$username = "root";         // Your MySQL username (default for XAMPP is 'root')
$password = "";             // Your MySQL password (default for XAMPP is an empty string)
$dbname = "agriconnect";    // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>