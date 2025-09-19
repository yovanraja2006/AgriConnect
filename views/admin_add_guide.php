<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: adminlogin.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Land | AGRCT</title>
    <link rel="stylesheet" href="/AgriConnect/public/styles/mainstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="icon" href="/AgriConnect/public/img/img1.png">
</head>
<body class="backgroundimg3">
    <header class="header">
        <div class="header-content">
            <h1 class="logo" style="color:white;">Admin</h1>
        </div>
    </header>

    <nav class="sidebar">
        <div class="logo-menu">
            <h2 class="logo">AgriConnect</h2>
            <img src="/AgriConnect/public/img/img1.png" alt="Logo" class="toggle-btn">
        </div>
        
        <ul class="list">
            <li class="list-item">
                <a href="/AgriConnect/views/admin_add_milktrd.php">
                    <i class='bx bx-coffee-togo'></i>
                    <span class="link-name">Add Milk Product</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/admin_add_land.php">
                    <i class='bx bx-buildings'></i>
                    <span class="link-name">Add Land Lease</span>
                </a>
            </li>
            <li class="list-item inactive">
                <a href="/AgriConnect/views/admin_add_guide.php">
                    <i class='bx bx-spa'></i>
                    <span class="link-name">Add Crops Guide</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/adminaccount.php">
                    <i class='bx bx-cog'></i>
                    <span class="link-name">Admin Profile</span>
                </a>
            </li>
        </ul>
    </nav>

    <main class="content">
        <section class='mainbgcolor'> <p style='font-size: 28px; text-align: center;'>Feature Comming Soon...</p>
    </main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html> 