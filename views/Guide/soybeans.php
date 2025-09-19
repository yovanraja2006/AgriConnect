<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: /AgriConnect/views/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soybeans | AGRCT</title>
    <link rel="stylesheet" href="/AgriConnect/public/styles/mainstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="icon" href="/AgriConnect/public/img/img1.png">
</head>
<body class="backgroundimg4">
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
            <li class="list-item inactive">
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
            <li class="list-item">
                <a href="/AgriConnect/views/account.php">
                    <i class='bx bx-cog' ></i>
                    <span class="link-name" style="--i:1;">Account</span>
                </a>
            </li>
        </ul>
    </nav>
<!-------------------------------------------------Header and Sidebar------------------------------------------------------------------->
<main class="content">
    <section class="mainbgcolor">
        <h2>Soybeans Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Soybeans/img0.jpg" alt="Soil Preparation for Soybeans" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Soybeans grow best in well-drained, fertile soil. Prepare the soil properly for optimal growth:
                </p>
                <ul class="parag">
                    <li><strong>Soil Type:</strong> Choose loamy or sandy soil with good drainage. pH should be between 6.0 and 7.0.</li>
                    <li><strong>Soil Testing:</strong> Test soil for nutrient levels and amend with lime or fertilizer as needed.</li>
                    <li><strong>Land Preparation:</strong> Plow and level the field. Incorporate organic matter to improve soil fertility.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Soybeans/img1.jpg" alt="Planting Soybeans" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Plant soybeans correctly to ensure a successful crop:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Plant after the last frost date when the soil temperature is at least 55°F (13°C).</li>
                    <li><strong>Seeding:</strong> Sow seeds 1-2 inches deep, spacing them 1-2 inches apart. Rows should be 15-30 inches apart.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Soybeans/img2.jpg" alt="Watering Soybeans" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Adequate watering is crucial for soybean health:
                </p>
                <ul class="parag">
                    <li><strong>Water Needs:</strong> Ensure consistent moisture, especially during flowering and pod development.</li>
                    <li><strong>Watering Schedule:</strong> Water as needed to keep the soil moist but not waterlogged.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Soybeans/img3.jpg" alt="Fertilizing Soybeans" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Proper fertilization helps in achieving good yields:
                </p>
                <ul class="parag">
                    <li><strong>Pre-Planting Fertilizer:</strong> Apply a balanced fertilizer before planting, rich in phosphorus and potassium.</li>
                    <li><strong>Nitrogen Needs:</strong> Soybeans can fix their own nitrogen, so additional nitrogen is usually not required.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Soybeans/img4.jpg" alt="Soybeans Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Managing pests and diseases is vital for a healthy crop:
                </p>
                <ul class="parag">
                    <li><strong>Common Pests:</strong> Look out for pests like aphids and spider mites. Use appropriate insecticides if needed.</li>
                    <li><strong>Diseases:</strong> Prevent diseases such as soybean rust by rotating crops and using disease-resistant varieties.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Soybeans/img5.jpg" alt="Harvesting Soybeans" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvest soybeans at the right time for the best quality:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Harvest when the beans are firm and the pods are brown and dry. Ideal moisture content is around 13-15%.</li>
                    <li><strong>Harvest Method:</strong> Use a combine harvester to thresh the beans from the pods.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Soybeans/img6.jpg" alt="Storing Soybeans" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper storage ensures the quality of harvested soybeans:
                </p>
                <ul class="parag">
                    <li><strong>Cleaning:</strong> Clean the soybeans to remove any debris and contaminants.</li>
                    <li><strong>Storage Conditions:</strong> Store in a cool, dry place in airtight containers to prevent moisture and pest infestation.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>