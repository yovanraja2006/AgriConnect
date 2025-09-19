<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Include database connection
require 'db.php';

// Check if $conn is set and connected
if (!$conn) {
    die("Database connection failed: " . $conn->connect_error);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Land Lease | AGRCT</title>
    <link rel="stylesheet" href="/AgriConnect/public/styles/mainstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="icon" href="/AgriConnect/public/img/img1.png">
</head>
<body class="backgroundimg3">
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
                    <span class="link-name">Dashboard</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/milktrd.php">
                    <i class='bx bx-coffee-togo'></i>
                    <span class="link-name">Milk Trading</span>
                </a>
            </li>
            <li class="list-item inactive">
                <a href="/AgriConnect/views/land.php">
                    <i class='bx bx-buildings'></i>
                    <span class="link-name">Land Leasing</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/guide.php">
                    <i class='bx bx-spa'></i>
                    <span class="link-name">Crop Guidance</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/report.php">
                    <i class='bx bxs-report'></i>
                    <span class="link-name">Report</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/account.php">
                    <i class='bx bx-cog'></i>
                    <span class="link-name">Account</span>
                </a>
            </li>
        </ul>
    </nav>

    <main class="content">
        <?php
        // Fetch land details from the database
        $sql = "SELECT * FROM land_leases"; // Modify this based on your table structure
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data for each land entry
            while($row = $result->fetch_assoc()) {
                echo "
                <section class='mainbgcolor'>
                    <div class='aligned'>
                        <img src='/AgriConnect/public/img/{$row['image']}' alt='{$row['land_name']}' class='landimg'>
                        <span class='landtxt'>
                            <h1>{$row['land_name']}</h1>
                            <p class='landcont'>
                                <b>Land Owner:</b> {$row['land_owner']}<br>
                                <b>Land Address:</b> {$row['land_address']}<br>
                                <b>Land Direction:</b> {$row['land_direction']}<br>
                                <b>Phone Number:</b> {$row['phone_number']}<br>
                                <a href='tel:{$row['phone_number']}' class='icon-btn'><i class='bx bx-phone'></i></a>
                                <a href='https://www.google.com/maps/dir/?api=1&destination=" . urlencode($row['land_address']) . "' class='icon-btn'><i class='bx bx-map'></i></a>
                            </p>
                        </span>
                    </div>
                </section>";
            }
        } else {
            echo "<section class='mainbgcolor'> <p style='font-size: 28px; text-align: center;'>No Land Found</p>";
        }

        // Close the database connection
        $conn->close();
        ?>
    </main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>
