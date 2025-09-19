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
    $product_name = $_POST['product_name'];
    $product_code = $_POST['product_code'];
    $processing_method = $_POST['processing_method'];
    $fat_content = $_POST['fat_content'];
    $protein = $_POST['protein'];
    $lactose = $_POST['lactose'];
    $expiry_date = $_POST['expiry_date'];
    $phone_number = $_POST['phone_number'];
    $image = $_POST['image']; // This should be handled with file upload in a real application

    // Insert query
    $sql = "INSERT INTO milk_products (product_name, product_code, processing_method, fat_content, protein, lactose, expiry_date, phone_number, image) 
            VALUES ('$product_name', '$product_code', '$processing_method', '$fat_content', '$protein', '$lactose', '$expiry_date', '$phone_number', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New milk product added successfully!'); window.location.href='admin_add_milktrd.php';</script>";
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
    <title>Add Milk Product | AGRCT</title>
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
            <li class="list-item inactive">
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
        <form method="POST" action="admin_add_milktrd.php">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" id="product_name" name="product_name" required>
            </div>
            <div class="form-group">
                <label for="product_code">Product Code</label>
                <input type="text" id="product_code" name="product_code" required>
            </div>
            <div class="form-group">
                <label for="processing_method">Processing Method</label>
                <input type="text" id="processing_method" name="processing_method" required>
            </div>
            <div class="form-group">
                <label for="fat_content">Fat Content</label>
                <input type="text" id="fat_content" name="fat_content" required>
            </div>
            <div class="form-group">
                <label for="protein">Protein Content</label>
                <input type="text" id="protein" name="protein" required>
            </div>
            <div class="form-group">
                <label for="lactose">Lactose Content</label>
                <input type="text" id="lactose" name="lactose" required>
            </div>
            <div class="form-group">
                <label for="expiry_date">Expiry Date</label>
                <input type="text" id="expiry_date" name="expiry_date" required placeholder="e.g., 04-10-2024 ">
            </div>
            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" required>
            </div>
            <div class="form-group">
                <label for="image">Image Filename</label>
                <input type="text" id="image" name="image" required placeholder="e.g., certi1.jpg">
            </div>
            <button type="submit" class="btn">Add Milk Product</button>
        </form>
    </main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>
