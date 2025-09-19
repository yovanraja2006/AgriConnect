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
$sql = "SELECT password FROM users WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $current_password_hashed = $row['password'];
} else {
    // If user not found, redirect to login
    header("Location: login.php");
    exit();
}

// Handle password update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['current_password'], $_POST['new_password'], $_POST['confirm_password'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Verify current password
    if (!password_verify($current_password, $current_password_hashed)) {
        echo "<script>alert('Current password is incorrect.');</script>";
    } 
    // Check if new password is at least 8 characters and contains both letters and numbers
    elseif (strlen($new_password) < 8 || !preg_match('/[A-Za-z]/', $new_password) || !preg_match('/[0-9]/', $new_password)) {
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Password | AGRCT</title>
    <link rel="stylesheet" href="/AgriConnect/public/styles/mainstyle.css">
    <link rel="stylesheet" href="/AgriConnect/public/styles/account.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="icon" href="/AgriConnect/public/img/img1.png">
</head>

<body class="backgroundimg5">
    <header class="header">
        <div class="header-content">
            <div class="search-container">
                <input type="text" id="searchBox" placeholder="Search...">
                <i class='bx bx-x clear-search'></i>
            </div>
            <button class="btn-search" id="searchBtn">Search</button>
        </div>
    </header>

    <nav class="sidebar">
        <div class="logo-menu">
            <h2 class="logo">AgriConnect</h2>
            <img src="/AgriConnect/public/img/img1.png" alt="Logo" class="toggle-btn">
        </div>
        
        <ul class="list">
            <li class="list-item">
                <a href="/AgriConnect/views/main.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="link-name" style="--i:5;">Dashboard</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/milktrd.php">
                    <i class='bx bx-coffee-togo' ></i>
                    <span class="link-name" style="--i:4;">Milk Trading</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/land.php">
                    <i class='bx bx-buildings' ></i>
                    <span class="link-name" style="--i:3;">Land Leasing</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/guide.php">
                    <i class='bx bx-spa'></i>
                    <span class="link-name" style="--i:2;">Crop Guidance</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/report.php">
                    <i class='bx bxs-report'></i>
                    <span class="link-name" style="--i:5;">Report</span>
                </a>
            </li>
            <li class="list-item inactive">
                <a href="/AgriConnect/views/account.php">
                    <i class='bx bx-cog' ></i>
                    <span class="link-name" style="--i:1;">Account</span>
                </a>
            </li>
        </ul>        
    </nav>

    <main class="content">
        <section class="mainbgcolor">
            <div class="container">
                <h1>Your Account</h1>
                <navig>
                    <a href="account.php" id="edit-account-link" class="active"><i class="bx bx-user"></i> Edit Account</a>
                    <a href="editpass.php" id="edit-password-link"><i class="bx bx-lock-alt"></i> Edit Password</a>
                </navig>
                <naviga>
                    <a href="delete.php" id="delete-account-link" class="delete-account"><i class="bx bx-trash"></i> Delete Account</a>
                    <a href="logout.php" id="logout-link" class="logout"><i class="bx bx-log-out"></i> Logout</a>
                </naviga>
                
                <div class="account-settings">
                    <!-- Change Password Form -->
                    <form method="POST">
                        <h2>Edit Account Password</h2>
                        <div class="form-group">
                            <label for="current_password">Current Password:</label>
                            <input type="password" id="current_password" name="current_password" required>
                        </div>
                        <div class="form-group">
                            <label for="new_password">New Password:</label>
                            <input type="password" id="new_password" name="new_password" required>
                        </div>
                        <div class="form-group">
                            <label for="confirm_password">Confirm New Password:</label>
                            <input type="password" id="confirm_password" name="confirm_password" required>
                        </div>
                        <button type="submit" id="submitBtn" class="btn-save" disabled>Change Password</button>
                        <button type="button" class="btn-secondary" id="togglePassword">Show Password</button>
                    </form>
                </div>
            </div>  
        </section>
    </main>

    <script>
        /*Show Password Button*/
        document.addEventListener('DOMContentLoaded', function() {
            var togglePasswordButton = document.querySelector('.btn-secondary');
            var passwordFields = document.querySelectorAll('input[type="password"]');

            togglePasswordButton.addEventListener('click', function() {
                var areAllPasswordsVisible = Array.from(passwordFields).every(field => field.type === 'text');

                passwordFields.forEach(function(passwordField) {
                    if (areAllPasswordsVisible) {
                        passwordField.type = 'password';
                        togglePasswordButton.textContent = 'Show Password';
                    } else {
                        passwordField.type = 'text';
                        togglePasswordButton.textContent = 'Hide Password';
                    }
                });
            });
        });

        // Password conditions: at least 8 characters, must include letters and numbers
        const newPassword = document.getElementById('new_password');
        const confirmPassword = document.getElementById('confirm_password');
        const submitBtn = document.getElementById('submitBtn');
        
        function checkPasswordConditions() {
            const password = newPassword.value;
            const confirmPasswordValue = confirmPassword.value;
            const isValidLength = password.length >= 8;
            const hasLetters = /[A-Za-z]/.test(password);
            const hasNumbers = /[0-9]/.test(password);
            
            // Enable submit button if all conditions are met
            if (isValidLength && hasLetters && hasNumbers && password === confirmPasswordValue) {
                submitBtn.disabled = false;
            } else {
                submitBtn.disabled = true;
            }
        }

        newPassword.addEventListener('input', checkPasswordConditions);
        confirmPassword.addEventListener('input', checkPasswordConditions);
    </script>
</body>
</html>
