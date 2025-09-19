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
    <title>Rice | AGRCT</title>
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
        <h2>Rice Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Rice/img0.jpg" alt="Soil Preparation for Rice" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Rice requires specific soil conditions for successful growth. Prepare the soil to ensure proper growth:
                </p>
                <ul class="parag">
                    <li><strong>Soil Type:</strong> Choose clayey or silty soils that retain water well. Ensure the field can be flooded if necessary.</li>
                    <li><strong>Soil Testing:</strong> Test soil for pH and nutrient content. Ideal pH is 5.5 to 6.5.</li>
                    <li><strong>Land Preparation:</strong> Plow and level the field to ensure proper water distribution. Flood the field if growing rice in paddies.</li>
                    <li><strong>Organic Matter:</strong> Incorporate compost or green manure to enhance soil fertility.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Rice/img1.jpg" alt="Planting Rice" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Proper planting techniques are crucial for a healthy rice crop:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Plant rice when the water level is appropriate, usually after the last frost.</li>
                    <li><strong>Seeding:</strong> Directly sow seeds into the field or transplant seedlings from a nursery. Space plants 6-12 inches apart.</li>
                    <li><strong>Water Management:</strong> Maintain a consistent water level in the field, typically 1-4 inches deep.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Rice/img2.jpg" alt="Watering Rice" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Consistent watering is essential for rice growth:
                </p>
                <ul class="parag">
                    <li><strong>Water Level:</strong> Keep the field flooded to a depth of 1-4 inches throughout the growing season.</li>
                    <li><strong>Water Management:</strong> Adjust water levels based on growth stages and weather conditions.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Rice/img3.jpg" alt="Fertilizing Rice" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Proper fertilization supports healthy rice growth and yield:
                </p>
                <ul class="parag">
                    <li><strong>Pre-Planting Fertilizer:</strong> Apply a balanced fertilizer before planting, including nitrogen, phosphorus, and potassium.</li>
                    <li><strong>Top Dressing:</strong> Apply additional nitrogen during the growing season, especially at the tillering stage.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Rice/img4.jpg" alt="Rice Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Managing pests and diseases is crucial for a successful rice harvest:
                </p>
                <ul class="parag">
                    <li><strong>Common Pests:</strong> Watch for pests like rice weevils and brown planthoppers. Use appropriate insecticides if needed.</li>
                    <li><strong>Diseases:</strong> Prevent diseases like rice blast and sheath blight by practicing crop rotation and using disease-resistant varieties.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Rice/img5.jpg" alt="Harvesting Rice" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvesting rice at the right time is essential for quality:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Harvest when the rice grains are mature and the moisture content is around 20-25%.</li>
                    <li><strong>Harvest Method:</strong> Use a sickle or combine harvester to cut the rice. Allow the rice to dry before milling.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Rice/img6.jpg" alt="Storing Rice" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper storage ensures the longevity of harvested rice:
                </p>
                <ul class="parag">
                    <li><strong>Cleaning:</strong> Clean rice to remove any debris and husks.</li>
                    <li><strong>Storage Conditions:</strong> Store rice in a cool, dry place in airtight containers to prevent moisture and pest infestation.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>