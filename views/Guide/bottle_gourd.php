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
    <title>Bottle Gourd | AGRCT</title>
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
        <h2>Bottle Gourd Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Bottle Gourd/img0.jpg" alt="Soil Preparation for Bottle Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Bottle gourd thrives in well-drained, loamy soil with a pH of 6.0 to 7.5. Proper soil preparation is key for healthy growth:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Test your soil to adjust pH and nutrients if necessary.</li>
                    <li><strong>Loosening the Soil:</strong> Till the soil to a depth of 12-15 inches to allow root penetration.</li>
                    <li><strong>Incorporating Organic Matter:</strong> Add compost or well-rotted manure to improve fertility and moisture retention.</li>
                    <li><strong>Ensuring Drainage:</strong> Ensure the soil drains well to prevent waterlogging, which can cause root rot.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Bottle Gourd/img1.jpg" alt="Planting Bottle Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Bottle gourd is typically grown from seeds. Follow these steps for successful planting:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Plant bottle gourd seeds in spring after the last frost or in early summer.</li>
                    <li><strong>Direct Sowing:</strong> Sow seeds 1 inch deep and 3-4 feet apart in rows that are 6-8 feet apart.</li>
                    <li><strong>Transplanting:</strong> If starting indoors, transplant seedlings when they have 2-3 true leaves, ensuring the soil is warm.</li>
                    <li><strong>Support:</strong> Provide trellises or stakes for vines to climb, which improves air circulation and fruit quality.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Bottle Gourd/img2.jpg" alt="Watering Bottle Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Bottle gourd requires consistent moisture for optimal growth and fruiting:
                </p>
                <ul class="parag">
                    <li><strong>Consistent Moisture:</strong> Keep the soil consistently moist, especially during flowering and fruiting stages.</li>
                    <li><strong>Watering Frequency:</strong> Water deeply once a week, and more frequently during hot, dry periods.</li>
                    <li><strong>Mulching:</strong> Apply mulch to retain moisture and reduce soil temperature.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Bottle Gourd/img3.jpg" alt="Fertilizing Bottle Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Balanced fertilization supports healthy vine growth and fruit production:
                </p>
                <ul class="parag">
                    <li><strong>Initial Fertilization:</strong> Apply a balanced fertilizer (e.g., 10-10-10) at planting time to promote early growth.</li>
                    <li><strong>Side-Dressing:</strong> Side-dress with compost or balanced fertilizer when the plants begin to flower.</li>
                    <li><strong>Avoiding Nitrogen Excess:</strong> Too much nitrogen can lead to excessive foliage with fewer fruits.</li>
                    <li><strong>Regular Feeding:</strong> Feed every 3-4 weeks during the growing season to sustain healthy growth.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Bottle Gourd/img4.jpg" alt="Bottle Gourd Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Bottle gourd can be affected by various pests and diseases, so vigilance is necessary:
                </p>
                <ul class="parag">
                    <li><strong>Powdery Mildew:</strong> This fungal disease causes white powdery spots on leaves. Use fungicides or plant resistant varieties.</li>
                    <li><strong>Fruit Flies:</strong> These pests can damage developing fruits. Use pheromone traps or bag fruits to protect them.</li>
                    <li><strong>Aphids:</strong> These insects can spread disease. Control with insecticidal soap or neem oil.</li>
                    <li><strong>Crop Rotation:</strong> Rotate crops yearly to prevent soil-borne diseases.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Bottle Gourd/img5.jpg" alt="Harvesting Bottle Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvesting at the right time ensures tender, flavorful gourds:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Bottle gourd is ready to harvest 2-3 months after planting when fruits reach the desired size (usually 12-15 inches in length).</li>
                    <li><strong>Regular Harvesting:</strong> Harvest regularly to encourage continuous fruit production.</li>
                    <li><strong>Proper Handling:</strong> Use a sharp knife or shears to cut the fruit, leaving a small stem attached to prevent damage.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Bottle Gourd/img6.jpg" alt="Storing Bottle Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper post-harvest handling keeps bottle gourd fresh and flavorful:
                </p>
                <ul class="parag">
                    <li><strong>Cleaning:</strong> Wipe or wash the gourd to remove dirt before storage.</li>
                    <li><strong>Storage Conditions:</strong> Store in a cool, dry place. Bottle gourd can last for several weeks under proper conditions.</li>
                    <li><strong>Refrigeration:</strong> For extended freshness, refrigerate the gourds. Avoid freezing as it can alter the texture.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>