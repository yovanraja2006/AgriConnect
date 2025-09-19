<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: adminlogin.php");
    exit();
}

// Include database connection
require 'db.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $land_name = $_POST['land_name'];
    $land_owner = $_POST['land_owner'];
    $land_address = $_POST['land_address'];
    $land_direction = $_POST['land_direction'];
    $phone_number = $_POST['phone_number'];
    $image = $_POST['image']; // This should be handled with file upload in a real application

    // Insert query
    $sql = "INSERT INTO land_leases (land_name, land_owner, land_address, land_direction, phone_number, image) 
            VALUES ('$land_name', '$land_owner', '$land_address', '$land_direction', '$phone_number', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New land listing added successfully!'); window.location.href='land.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
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
    <style>
        .content {
            padding: 15px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-left: 20%;
            margin-right: 2%;
            margin-top: 5%;
            margin-bottom: 2%;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #4CAF50;
            outline: none;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #45a049;
        }

    </style>
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
            <li class="list-item inactive">
                <a href="/AgriConnect/views/admin_add_land.php">
                    <i class='bx bx-buildings'></i>
                    <span class="link-name">Add Land Lease</span>
                </a>
            </li>
            <li class="list-item">
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
        
        <form method="POST" action="admin_add_land.php">
            <div class="form-group">
                <label for="land_name">Land Name</label>
                <input type="text" id="land_name" name="land_name" required>
            </div>
            <div class="form-group">
                <label for="land_owner">Land Owner</label>
                <input type="text" id="land_owner" name="land_owner" required>
            </div>
            <div class="form-group">
                <label for="land_address">Land Address</label>
                <textarea id="land_address" name="land_address" required></textarea>
            </div>
            <div class="form-group">
                <label for="land_direction">Land Direction</label>
                <input type="text" id="land_direction" name="land_direction">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" required>
            </div>
            <div class="form-group">
                <label for="image">Image Filename</label>
                <input type="text" id="image" name="image" required placeholder="e.g., land1.jpg">
            </div>
            <button type="submit" class="btn">Add Land</button>
        </form>
    </main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html> 