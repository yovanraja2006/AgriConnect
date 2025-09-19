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

// Handle account deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteConfirmation'])) {
    $deleteConfirmation = $_POST['deleteConfirmation'];

    // Ensure confirmation matches "DELETE"
    if (strtoupper($deleteConfirmation) === 'DELETE') {
        $user_id = $_SESSION['user_id'];
        
        // Delete the user from the database
        $sql = "DELETE FROM users WHERE id='$user_id'";
        
        if ($conn->query($sql) === TRUE) {
            // Destroy the session and redirect to login page
            session_destroy();
            header("Location: login.php?message=Account deleted successfully");
            exit();
        } else {
            echo "Error deleting account: " . $conn->error;
        }
    } else {
        echo "Confirmation text does not match.";
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
    <title>Delete Account | AGRCT</title>
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
                    <!-- Delete Account Form -->
                    <form id="deleteAccountForm" method="POST">
                        <div class="form-group">
                            <label for="deleteConfirmation">Type "DELETE" to confirm:</label>
                            <input type="text" id="deleteConfirmation" name="deleteConfirmation" placeholder="DELETE" required>
                        </div>
                        <button type="submit" class="btn-delete">Delete Account</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <script src="/AgriConnect/public/script/start.js"></script>