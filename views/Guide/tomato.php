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
    <title>Tomato | AGRCT</title>
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
        <h2>Tomato Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Tomato/img0.jpg" alt="Soil Preparation for Tomatoes" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Tomatoes need well-drained, fertile soil for optimal growth:
                </p>
                <ul class="parag">
                    <li><strong>Soil Type:</strong> Use loamy or sandy soil with good drainage. pH should be between 6.0 and 6.8.</li>
                    <li><strong>Soil Testing:</strong> Test soil for nutrients and adjust with compost or fertilizer as needed.</li>
                    <li><strong>Land Preparation:</strong> Plow and level the field. Add organic matter to enhance soil fertility.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Tomato/img1.jpg" alt="Planting Tomatoes" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Proper planting ensures healthy tomato plants:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Plant after the last frost when the soil temperature is at least 60°F (15°C).</li>
                    <li><strong>Seeding:</strong> Sow seeds indoors 6-8 weeks before the last frost or plant seedlings directly in the garden.</li>
                    <li><strong>Spacing:</strong> Space plants 18-24 inches apart in rows 3-4 feet apart.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Tomato/img2.jpg" alt="Watering Tomatoes" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Consistent watering is key to healthy tomato growth:
                </p>
                <ul class="parag">
                    <li><strong>Water Needs:</strong> Keep the soil evenly moist. Avoid getting water on the foliage to prevent disease.</li>
                    <li><strong>Watering Schedule:</strong> Water deeply once or twice a week, depending on weather conditions.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Tomato/img3.jpg" alt="Fertilizing Tomatoes" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Proper fertilization helps in achieving a bountiful harvest:
                </p>
                <ul class="parag">
                    <li><strong>Initial Fertilizer:</strong> Apply a balanced fertilizer at planting time.</li>
                    <li><strong>Additional Feeding:</strong> Feed with a high-phosphorus fertilizer during flowering and fruit set.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Tomato/img4.jpg" alt="Tomato Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Managing pests and diseases is crucial for a successful tomato crop:
                </p>
                <ul class="parag">
                    <li><strong>Common Pests:</strong> Look out for pests like aphids, whiteflies, and tomato hornworms. Use insecticidal soap or neem oil as needed.</li>
                    <li><strong>Diseases:</strong> Prevent common diseases like blight by providing good air circulation and avoiding overhead watering.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Tomato/img6.jpg" alt="Harvesting Tomatoes" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvest tomatoes at the peak of ripeness for the best flavor:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Pick tomatoes when they are fully colored and slightly soft to the touch.</li>
                    <li><strong>Harvest Method:</strong> Use pruning shears or a knife to cut tomatoes from the vine.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Tomato/img5.jpg" alt="Storing Tomatoes" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper storage extends the freshness of harvested tomatoes:
                </p>
                <ul class="parag">
                    <li><strong>Cleaning:</strong> Gently clean tomatoes and remove any debris.</li>
                    <li><strong>Storage Conditions:</strong> Store in a cool, dry place or in the refrigerator if not consumed immediately.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>