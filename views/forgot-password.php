<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'C:\xampp\htdocs\AgriConnect\vendor\autoload.php';  // This is the autoloader that Composer provides

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriconnect";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);

    // Check if the email exists in the database
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Generate a secure token and set an expiry of 1 hour
        $token = bin2hex(random_bytes(32));
        $token_expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));

        // Store token and expiry in the database
        $update_sql = "UPDATE users SET reset_token='$token', token_expiry='$token_expiry' WHERE email='$email'";
        $conn->query($update_sql);

        // Password reset link
        $reset_link = "http://localhost/AgriConnect/views/reset-password.php?token=$token";

        // Send email using PHPMailer
        $mail = new PHPMailer(true);
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Set the SMTP server to send through
            $mail->SMTPAuth = true;
            $mail->Username = 'yovan2006raja@gmail.com'; // Your Gmail address
            $mail->Password = 'rjuk siov pfln vtds'; // Your Gmail app-specific password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('yovan2006raja@gmail.com', 'AgriConnect');
            $mail->addAddress($email); // Send reset link to the user's email

            // Content
            $mail->isHTML(true);
            $mail->Subject = 'Password Reset Link';
            $mail->Body    = "Click the link to reset your password: <a href='$reset_link'>$reset_link</a>";
            $mail->AltBody = "Click the link to reset your password: $reset_link";

            $mail->send();
            echo "<script>alert('A password reset link has been sent to your email address.');</script>";

            // Redirect to login page
            echo "<script>window.location.href = 'login.php';</script>";
        } catch (Exception $e) {
            echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
        }
    } else {
        echo "<script>alert('No user found with that email address.');</script>";
    }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password AgriConnect</title>
    <link rel="stylesheet" href="/AgriConnect/public/styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="icon" href="/AgriConnect/public/img/img1.png">
</head>
<body>
    <div class="wrapper">
        <form id="forgot-password-form" action="forgot-password.php" method="POST">
            <h1>Forgot Password</h1>
            <div class="input-box">
                <i class='bx bx-envelope'></i>
                <input type="email" name="email" placeholder="Enter your email" required>
            </div>
            <button type="submit" class="btn">Send Reset Link</button>
            <div class="register-link">
                <p>Remember your password? <a href="login.php">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>