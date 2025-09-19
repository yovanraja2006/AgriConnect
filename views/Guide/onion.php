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
    <title>Onion | AGRCT</title>
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
        <h2>Onion Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Onion/img0.jpg" alt="Soil Preparation for Onion" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Onions prefer well-drained, loose soil with a pH of 6.0 to 7.0. Proper soil preparation is crucial for healthy growth:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Test soil pH and nutrient levels. Amend soil as needed to create optimal growing conditions.</li>
                    <li><strong>Soil Loosening:</strong> Loosen the soil to a depth of 8-10 inches to ensure proper root development.</li>
                    <li><strong>Organic Matter:</strong> Incorporate compost or well-rotted manure to improve soil structure and fertility.</li>
                    <li><strong>Avoid Excess Nitrogen:</strong> Too much nitrogen can lead to excessive leaf growth at the expense of bulb development.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Onion/img1.jpg" alt="Planting Onion" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Onions can be grown from seeds, sets, or transplants. Follow these planting guidelines for success:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Plant onions in early spring or late summer, depending on your climate.</li>
                    <li><strong>Planting Depth:</strong> Plant onion sets or transplants 1-2 inches deep and 4 inches apart.</li>
                    <li><strong>Spacing:</strong> Space rows 12-18 inches apart to allow for bulb expansion.</li>
                    <li><strong>Thinning:</strong> Thin seedlings to avoid overcrowding and ensure adequate bulb size.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Onion/img2.jpg" alt="Watering Onion" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Consistent watering is essential for healthy onion growth and bulb development:
                </p>
                <ul class="parag">
                    <li><strong>Watering Schedule:</strong> Water onions regularly to keep the soil consistently moist, but not waterlogged.</li>
                    <li><strong>Watering Amount:</strong> Onions need about 1 inch of water per week. Adjust based on weather conditions.</li>
                    <li><strong>Mulching:</strong> Apply mulch to retain soil moisture and suppress weeds.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Onion/img3.jpg" alt="Fertilizing Onion" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Proper fertilization supports healthy growth and bulb formation in onions:
                </p>
                <ul class="parag">
                    <li><strong>Pre-Planting Fertilizer:</strong> Apply a balanced fertilizer before planting, based on soil test recommendations.</li>
                    <li><strong>Side Dressing:</strong> Apply additional nitrogen as a side dressing when bulbs begin to swell.</li>
                    <li><strong>Micronutrients:</strong> Ensure adequate levels of potassium and phosphorus to support bulb development.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Onion/img4.jpg" alt="Onion Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Effective management of pests and diseases is crucial for healthy onion crops:
                </p>
                <ul class="parag">
                    <li><strong>Onion Maggot:</strong> These pests can damage onion roots. Use row covers or insecticides as needed.</li>
                    <li><strong>Onion Thrips:</strong> These small pests can cause leaf damage. Control with insecticidal soap or natural predators.</li>
                    <li><strong>Disease Prevention:</strong> Practice crop rotation and avoid overhead watering to reduce disease risk.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Onion/img5.jpg" alt="Harvesting Onion" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvest onions at the right time to ensure optimal storage and quality:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Harvest onions when the tops start to fall over and turn brown.</li>
                    <li><strong>Bulb Size:</strong> Ensure bulbs are fully formed and have reached their mature size before harvesting.</li>
                    <li><strong>Post-Harvest Curing:</strong> Cure harvested onions in a dry, well-ventilated area to improve storage life.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Onion/img6.jpg" alt="Storing Onion" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper post-harvest handling ensures the longevity and quality of stored onions:
                </p>
                <ul class="parag">
                    <li><strong>Cleaning:</strong> Remove excess soil and any damaged onions before storage.</li>
                    <li><strong>Storage Conditions:</strong> Store onions in a cool, dry, and well-ventilated area to prevent rot and sprouting.</li>
                    <li><strong>Monitoring:</strong> Regularly check stored onions for signs of spoilage or sprouting and remove affected bulbs.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>