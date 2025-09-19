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
    <title>Lettuce | AGRCT</title>
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
        <h2>Lettuce Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Lettuce/img0.jpg" alt="Soil Preparation for Lettuce" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Lettuce thrives in loose, fertile soil with a pH between 6.0 and 7.0. Proper soil preparation ensures healthy growth and high yields:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Test the soil to determine nutrient levels and pH. Amend the soil accordingly.</li>
                    <li><strong>Tillage:</strong> Till the soil to a depth of 8-10 inches to improve root penetration.</li>
                    <li><strong>Organic Matter:</strong> Incorporate compost or well-rotted manure to enhance soil fertility and moisture retention.</li>
                    <li><strong>Fertilization:</strong> Apply a balanced fertilizer before planting to provide essential nutrients.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Lettuce/img1.jpg" alt="Planting Lettuce" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Lettuce is a cool-season crop that requires careful timing and planting techniques for optimal growth:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Sow lettuce seeds in early spring or late summer. It prefers temperatures between 60°F and 70°F (15°C and 21°C).</li>
                    <li><strong>Sowing Depth:</strong> Plant seeds 1/4 inch deep and 1 inch apart. Thin seedlings to 6-12 inches apart, depending on the variety.</li>
                    <li><strong>Direct Seeding or Transplanting:</strong> Lettuce can be direct-seeded or started indoors and transplanted. Harden off seedlings before transplanting.</li>
                    <li><strong>Succession Planting:</strong> To ensure a continuous harvest, plant lettuce every 2-3 weeks.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Lettuce/img2.jpg" alt="Watering Lettuce" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Consistent watering is crucial for lettuce, as it has shallow roots and requires regular moisture:
                </p>
                <ul class="parag">
                    <li><strong>Regular Moisture:</strong> Keep the soil consistently moist but not waterlogged. Avoid water stress to prevent bitterness in the leaves.</li>
                    <li><strong>Watering Frequency:</strong> Water lettuce 2-3 times per week, depending on weather conditions. Increase frequency during hot, dry periods.</li>
                    <li><strong>Mulching:</strong> Apply mulch around the plants to retain moisture and keep the soil cool.</li>
                    <li><strong>Avoid Overhead Watering:</strong> Water at the base of the plants to prevent leaf diseases.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Lettuce/img3.jpg" alt="Fertilizing Lettuce" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Lettuce benefits from regular fertilization, especially in nutrient-poor soils:
                </p>
                <ul class="parag">
                    <li><strong>Initial Fertilization:</strong> Apply a balanced fertilizer at planting time to provide essential nutrients.</li>
                    <li><strong>Side-Dressing:</strong> Side-dress with a nitrogen-rich fertilizer when the plants are about 4-6 inches tall to promote leaf growth.</li>
                    <li><strong>Avoid Excessive Nitrogen:</strong> Too much nitrogen can lead to rapid growth and bitterness. Monitor plant growth and adjust fertilization as needed.</li>
                    <li><strong>Organic Fertilizers:</strong> Consider using organic fertilizers like compost tea or fish emulsion for a steady release of nutrients.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Lettuce/img4.jpg" alt="Lettuce Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Lettuce is susceptible to several pests and diseases, but proper management can minimize damage:
                </p>
                <ul class="parag">
                    <li><strong>Aphids:</strong> These small insects suck sap from lettuce leaves. Control with insecticidal soap or neem oil.</li>
                    <li><strong>Slugs and Snails:</strong> These pests feed on lettuce leaves, especially at night. Use slug traps or barriers to protect plants.</li>
                    <li><strong>Downy Mildew:</strong> A fungal disease that causes yellowing and wilting. Prevent with good air circulation and avoid overhead watering.</li>
                    <li><strong>Crop Rotation:</strong> Rotate lettuce with non-host crops to prevent the buildup of soil-borne diseases.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Lettuce/img5.jpg" alt="Harvesting Lettuce" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvesting lettuce at the right time ensures the best flavor and texture:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Lettuce is typically ready for harvest 45-55 days after planting. Harvest when the leaves are tender and crisp.</li>
                    <li><strong>Cutting Method:</strong> Use a sharp knife to cut lettuce heads or harvest individual leaves as needed.</li>
                    <li><strong>Avoid Over-Maturity:</strong> Don’t leave lettuce in the ground too long, as it can become bitter and bolt.</li>
                    <li><strong>Regular Harvest:</strong> For leaf lettuce, harvest outer leaves regularly to encourage new growth.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Lettuce/img6.jpg" alt="Storing Lettuce" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper post-harvest handling is essential for prolonging the freshness of lettuce:
                </p>
                <ul class="parag">
                    <li><strong>Washing:</strong> Wash lettuce thoroughly to remove soil and pests. Use cold water to maintain crispness.</li>
                    <li><strong>Drying:</strong> Gently pat lettuce dry with a clean towel or use a salad spinner to remove excess moisture.</li>
                    <li><strong>Storage Conditions:</strong> Store lettuce in a plastic bag or container in the refrigerator. It can last for up to 1 week.</li>
                    <li><strong>Freezing:</strong> Lettuce does not freeze well, as it becomes limp and loses texture.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>