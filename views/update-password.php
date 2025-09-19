<?php
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriconnect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user details using session user_id
$user_id = $_SESSION['user_id'];

// Handle password update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['new_password'], $_POST['confirm_password'])) {
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Check if new password is at least 8 characters and contains both letters and numbers
    if (strlen($new_password) < 8 || !preg_match('/[A-Za-z]/', $new_password) || !preg_match('/[0-9]/', $new_password)) {
        echo "<script>alert('New password must be at least 8 characters long and contain both letters and numbers.');</script>";
    }
    // Check if new password matches confirm password
    elseif ($new_password !== $confirm_password) {
        echo "<script>alert('New password and confirm password do not match.');</script>";
    } else {
        // Hash the new password
        $new_password_hashed = password_hash($new_password, PASSWORD_BCRYPT);
        
        // Update password in the database
        $update_sql = "UPDATE users SET password='$new_password_hashed' WHERE id='$user_id'";
        
        if ($conn->query($update_sql) === TRUE) {
            echo "<script>alert('Password updated successfully!');</script>";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}

$conn->close();
?>