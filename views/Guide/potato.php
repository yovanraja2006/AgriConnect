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
    <title>Potato | AGRCT</title>
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
        <h2>Potato Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Potato/img0.jpg" alt="Soil Preparation for Potato" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Potatoes grow best in well-drained, loose soil with a pH between 5.5 and 7.0. Prepare the soil for optimal tuber development:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Test soil for pH and nutrient levels and amend accordingly.</li>
                    <li><strong>Soil Loosening:</strong> Loosen soil to a depth of at least 12 inches to accommodate tuber growth.</li>
                    <li><strong>Organic Matter:</strong> Incorporate compost or well-rotted manure to improve soil structure and fertility.</li>
                    <li><strong>Avoid Excessive Nitrogen:</strong> High nitrogen levels can lead to excessive foliage and poor tuber formation.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Potato/img1.jpg" alt="Planting Potato" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Planting potatoes properly ensures good tuber development and yield:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Plant potatoes in early spring once the soil has warmed to at least 45°F (7°C).</li>
                    <li><strong>Planting Depth:</strong> Plant seed potatoes 4-6 inches deep and space them 12 inches apart.</li>
                    <li><strong>Row Spacing:</strong> Space rows about 2-3 feet apart to allow for tuber expansion.</li>
                    <li><strong>Hilling:</strong> Hill soil around the base of plants as they grow to encourage tuber formation.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Potato/img2.jpg" alt="Watering Potato" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Adequate watering is essential for healthy potato growth and tuber development:
                </p>
                <ul class="parag">
                    <li><strong>Watering Schedule:</strong> Water potatoes consistently to keep the soil evenly moist but not waterlogged.</li>
                    <li><strong>Watering Amount:</strong> Potatoes need about 1-2 inches of water per week, depending on weather conditions.</li>
                    <li><strong>Mulching:</strong> Apply mulch to retain soil moisture and reduce weed competition.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Potato/img3.jpg" alt="Fertilizing Potato" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Proper fertilization is key for robust plant growth and high yields:
                </p>
                <ul class="parag">
                    <li><strong>Pre-Planting Fertilizer:</strong> Apply a balanced fertilizer before planting based on soil test results.</li>
                    <li><strong>Side Dressing:</strong> Apply additional fertilizer during the growing season, especially when tubers begin to form.</li>
                    <li><strong>Micronutrients:</strong> Ensure adequate levels of potassium and phosphorus to support tuber development.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Potato/img4.jpg" alt="Potato Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Managing pests and diseases is crucial for a healthy potato crop:
                </p>
                <ul class="parag">
                    <li><strong>Colorado Potato Beetle:</strong> These pests can damage leaves. Control with insecticides or hand-picking.</li>
                    <li><strong>Late Blight:</strong> A fungal disease that affects leaves and tubers. Use resistant varieties and fungicides as needed.</li>
                    <li><strong>Crop Rotation:</strong> Practice crop rotation to reduce the risk of soil-borne diseases.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Potato/img5.jpg" alt="Harvesting Potato" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvest potatoes at the right time for optimal quality and yield:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Harvest when the plants have died back and the soil is dry.</li>
                    <li><strong>Harvesting Method:</strong> Use a spading fork or potato harvester to lift tubers without damaging them.</li>
                    <li><strong>Curing:</strong> Cure harvested potatoes in a cool, dark, and well-ventilated area to improve storage life.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Potato/img6.jpg" alt="Storing Potato" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper storage practices help maintain potato quality throughout the year:
                </p>
                <ul class="parag">
                    <li><strong>Cleaning:</strong> Remove excess soil and damaged potatoes before storage.</li>
                    <li><strong>Storage Conditions:</strong> Store potatoes in a cool, dark, and dry place with good ventilation.</li>
                    <li><strong>Monitoring:</strong> Regularly check stored potatoes for signs of sprouting or rot and remove affected tubers.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>