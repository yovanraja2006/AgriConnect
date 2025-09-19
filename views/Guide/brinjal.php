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
    <title>Brinjal | AGRCT</title>
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
        <h2>Brinjal Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Brinjal/img0.jpg" alt="Soil Preparation for Brinjal" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Brinjal (Eggplant) thrives in well-drained, fertile soil with a pH of 5.5 to 6.5. Proper soil preparation ensures healthy plant growth:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Test your soil to determine its pH and nutrient content.</li>
                    <li><strong>Loosening the Soil:</strong> Till the soil to a depth of 12-15 inches to ensure proper root penetration.</li>
                    <li><strong>Incorporating Organic Matter:</strong> Add compost or well-rotted manure to enhance soil fertility and structure.</li>
                    <li><strong>Adjusting pH:</strong> If needed, use lime to raise soil pH or sulfur to lower it, based on soil test results.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Brinjal/img1.jpg" alt="Planting Brinjal" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Brinjal is usually grown from transplants. Here’s how to plant them successfully:
                </p>
                <ul class="parag">
                    <li><strong>Seed Starting:</strong> Start seeds indoors 6-8 weeks before the last frost date. Transplant outdoors when the seedlings have 4-6 leaves.</li>
                    <li><strong>Spacing:</strong> Space transplants 18-24 inches apart in rows that are 24-36 inches apart.</li>
                    <li><strong>Depth:</strong> Plant seedlings at the same depth they were growing in the pots.</li>
                    <li><strong>Support:</strong> Provide stakes or cages to support the plants as they grow and produce heavy fruit.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Brinjal/img2.jpg" alt="Watering Brinjal" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Regular watering is essential for Brinjal, especially during dry periods:
                </p>
                <ul class="parag">
                    <li><strong>Consistent Moisture:</strong> Keep the soil evenly moist, particularly during flowering and fruiting.</li>
                    <li><strong>Watering Frequency:</strong> Water deeply once or twice a week, depending on weather conditions.</li>
                    <li><strong>Mulching:</strong> Apply mulch to retain moisture, reduce weeds, and maintain soil temperature.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Brinjal/img3.jpg" alt="Fertilizing Brinjal" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Brinjal plants benefit from regular feeding to support their growth and fruit production:
                </p>
                <ul class="parag">
                    <li><strong>Initial Fertilization:</strong> Apply a balanced fertilizer (e.g., 10-10-10) at planting time.</li>
                    <li><strong>Side-Dressing:</strong> Side-dress with compost or balanced fertilizer when the plants start flowering.</li>
                    <li><strong>Avoiding Excess Nitrogen:</strong> Too much nitrogen can lead to lush foliage but fewer fruits.</li>
                    <li><strong>Regular Feeding:</strong> Fertilize every 4-6 weeks during the growing season to ensure continuous fruiting.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Brinjal/img4.jpg" alt="Brinjal Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Brinjal is susceptible to various pests and diseases. Here’s how to manage them:
                </p>
                <ul class="parag">
                    <li><strong>Flea Beetles:</strong> These tiny insects can create holes in leaves. Use row covers or insecticidal soap to protect plants.</li>
                    <li><strong>Whiteflies:</strong> These pests can weaken plants by sucking sap. Control with neem oil or sticky traps.</li>
                    <li><strong>Blight:</strong> A fungal disease that causes leaf spots and fruit rot. Use fungicides and practice crop rotation to prevent it.</li>
                    <li><strong>Good Hygiene:</strong> Remove and destroy infected plants and debris to prevent the spread of disease.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Brinjal/img5.jpg" alt="Harvesting Brinjal" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvesting at the right time ensures the best quality brinjals:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Brinjal is ready for harvest 70-85 days after transplanting, when the fruit is firm and shiny.</li>
                    <li><strong>Harvest Technique:</strong> Use a sharp knife or pruners to cut the fruit from the plant, leaving a short stem attached.</li>
                    <li><strong>Regular Harvesting:</strong> Pick fruits regularly to encourage the production of more fruits.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Brinjal/img6.jpg" alt="Storing Brinjal" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper post-harvest care ensures that Brinjal stays fresh and edible:
                </p>
                <ul class="parag">
                    <li><strong>Storage Conditions:</strong> Store brinjals in a cool, dry place. They can be refrigerated but avoid temperatures below 50°F as they are sensitive to cold.</li>
                    <li><strong>Cleaning:</strong> Gently clean the fruit before storage to remove any dirt or pests.</li>
                    <li><strong>Use Quickly:</strong> For best flavor and texture, use brinjals within a week of harvesting.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>