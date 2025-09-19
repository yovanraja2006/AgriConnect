<?php
session_start(); // Start the session

// Clear all session variables
$_SESSION = array();

// Destroy the session
if (session_id() != "" || isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}
session_destroy(); // Destroy the session

// Clear cookies
if (isset($_COOKIE['username'])) {
    setcookie('username', '', time() - 3600, "/", "", true, true);
}
if (isset($_COOKIE['user_token'])) {
    setcookie('user_token', '', time() - 3600, "/", "", true, true);
}

// Redirect to login page
header("Location: login.php");
exit();
?>