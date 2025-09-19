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
    <title>Wheat | AGRCT</title>
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
        <h2>Wheat Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Wheat/img0.jpg" alt="Soil Preparation for Wheat" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Wheat grows best in well-drained loamy soil with a pH between 6.0 and 7.5. Proper soil preparation is essential for good yield:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Conduct a soil test to check pH and nutrient levels. Amend the soil as needed.</li>
                    <li><strong>Tillage:</strong> Plow the field to a depth of 6-8 inches to break up the soil and improve aeration.</li>
                    <li><strong>Fertilization:</strong> Apply a balanced fertilizer based on soil test results to meet wheat's nutrient requirements.</li>
                    <li><strong>Organic Matter:</strong> Incorporate organic matter like compost or green manure to improve soil fertility and structure.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Wheat/img1.jpg" alt="Planting Wheat" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Proper planting practices are crucial for successful wheat cultivation:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Plant wheat in the fall or early spring, depending on the variety and local climate. Winter wheat is planted in the fall, while spring wheat is planted in early spring.</li>
                    <li><strong>Seed Rate:</strong> Use a seed rate of 60-75 pounds per acre for optimal plant density.</li>
                    <li><strong>Sowing Depth:</strong> Sow wheat seeds at a depth of 1-2 inches, ensuring good soil-to-seed contact.</li>
                    <li><strong>Row Spacing:</strong> Maintain a row spacing of 6-8 inches for adequate air circulation and sunlight penetration.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Wheat/img2.jpg" alt="Watering Wheat" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Wheat requires consistent moisture, especially during key growth stages:
                </p>
                <ul class="parag">
                    <li><strong>Watering Schedule:</strong> Water wheat at critical stages such as tillering, jointing, booting, and grain filling.</li>
                    <li><strong>Moisture Levels:</strong> Maintain soil moisture at 60-80% of field capacity to avoid water stress.</li>
                    <li><strong>Drainage:</strong> Ensure proper drainage to prevent waterlogging, which can damage wheat roots and reduce yield.</li>
                    <li><strong>Rainfed Wheat:</strong> In rainfed areas, conserve moisture through practices like mulching and timely planting.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Wheat/img3.jpg" alt="Fertilizing Wheat" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Proper fertilization is key to achieving high wheat yields:
                </p>
                <ul class="parag">
                    <li><strong>Basal Fertilization:</strong> Apply nitrogen, phosphorus, and potassium at planting based on soil test recommendations.</li>
                    <li><strong>Top Dressing:</strong> Apply additional nitrogen as a top dressing at the tillering and booting stages to promote vigorous growth and grain development.</li>
                    <li><strong>Micronutrients:</strong> Ensure adequate levels of micronutrients such as zinc, copper, and boron, which are essential for wheat growth.</li>
                    <li><strong>Organic Fertilizers:</strong> Consider using organic fertilizers like compost or manure for long-term soil health.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Wheat/img4.jpg" alt="Wheat Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Effective pest and disease management is essential for healthy wheat crops:
                </p>
                <ul class="parag">
                    <li><strong>Wheat Rust:</strong> A fungal disease that affects leaves, stems, and grains. Use resistant varieties and fungicides to control rust.</li>
                    <li><strong>Aphids:</strong> These pests suck sap from wheat plants, leading to stunted growth. Control aphids with insecticides or natural predators like ladybugs.</li>
                    <li><strong>Weed Management:</strong> Use pre-emergence and post-emergence herbicides to control weeds that compete with wheat for nutrients and water.</li>
                    <li><strong>Crop Rotation:</strong> Rotate wheat with non-cereal crops to break the cycle of pests and diseases.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Wheat/img5.jpg" alt="Harvesting Wheat" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvesting wheat at the right time is crucial for maximizing grain quality:
                </p>
                <ul class="parag">
                    <li><strong>Maturity:</strong> Harvest wheat when the grains are fully developed and the plants have turned golden brown.</li>
                    <li><strong>Moisture Content:</strong> Ensure the moisture content of the grains is between 13-15% at harvest to avoid spoilage during storage.</li>
                    <li><strong>Harvesting Method:</strong> Use a combine harvester for efficient harvesting and threshing.</li>
                    <li><strong>Post-Harvest Handling:</strong> Clean and dry the grains before storage to prevent mold and insect damage.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Wheat/img6.jpg" alt="Storing Wheat" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper post-harvest handling is essential for preserving wheat quality:
                </p>
                <ul class="parag">
                    <li><strong>Cleaning:</strong> Remove any foreign matter or damaged grains before storage.</li>
                    <li><strong>Drying:</strong> Dry the wheat to a moisture content of 10-12% for safe storage.</li>
                    <li><strong>Storage Conditions:</strong> Store wheat in a cool, dry place in airtight containers or bags to prevent moisture and insect damage.</li>
                    <li><strong>Pest Control:</strong> Monitor stored wheat regularly for signs of pests and take appropriate action if necessary.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>