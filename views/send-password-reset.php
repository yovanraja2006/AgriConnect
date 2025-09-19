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

if (isset($_POST['email'])) {
    $email = $_POST['email'];

    // Check if the email exists in the database
    $query = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $query->bind_param('s', $email);
    $query->execute();
    $result = $query->get_result();

    if ($result->num_rows > 0) {
        // Email found, generate reset token and send the email
        $token = bin2hex(random_bytes(50)); // Generate a secure token
        $expiry = date("Y-m-d H:i:s", strtotime('+1 hour')); // Set expiry time (1 hour from now)

        // Store the token and expiry in the database
        $update = $conn->prepare("UPDATE users SET reset_token = ?, token_expiry = ? WHERE email = ?");
        $update->bind_param('sss', $token, $expiry, $email);
        $update->execute();

        // Prepare the password reset link
        $reset_link = "http://localhost/AgriConnect/views/reset_password.php?token=" . $token;

        // Email content
        $subject = "Password Reset Request";
        $message = "You requested a password reset. Click the link below to reset your password:\n\n" . $reset_link;
        $headers = "From: yovan2006raja@gmail.com";

        // Send the email
        if (mail($email, $subject, $message, $headers)) {
            echo "Password reset link has been sent to your email address.";
        } else {
            echo "Failed to send password reset email.";
        }
    } else {
        echo "No account found with that email address.";
    }
}
?>