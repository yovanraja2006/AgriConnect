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
    <title>Cauliflower | AGRCT</title>
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
        <h2>Cauliflower Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Cauliflower/img0.jpg" alt="Soil Preparation for Cauliflower" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Cauliflower grows best in rich, well-drained soil with a pH of 6.5 to 7.5. Proper soil preparation is essential for healthy head formation:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Conduct a soil test to determine pH and nutrient levels, adjusting as needed.</li>
                    <li><strong>Loosening the Soil:</strong> Till the soil to a depth of 12-15 inches to allow roots to penetrate easily.</li>
                    <li><strong>Incorporating Organic Matter:</strong> Add compost or well-rotted manure to improve soil fertility and structure.</li>
                    <li><strong>Fertilizer Application:</strong> Apply a balanced fertilizer before planting to ensure adequate nutrients.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Cauliflower/img1.jpg" alt="Planting Cauliflower" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Cauliflower is a cool-season crop that requires careful planting to ensure good growth and development:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Plant cauliflower in early spring or fall, avoiding hot weather.</li>
                    <li><strong>Seed Starting:</strong> Start seeds indoors 4-6 weeks before the last frost date. Transplant seedlings when they have 4-5 leaves.</li>
                    <li><strong>Spacing:</strong> Space plants 18-24 inches apart in rows 24-30 inches apart to allow room for growth.</li>
                    <li><strong>Planting Depth:</strong> Set transplants at the same depth they were growing in the seedling tray.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Cauliflower/img2.jpg" alt="Watering Cauliflower" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Cauliflower needs consistent moisture to develop well. Proper watering is crucial:
                </p>
                <ul class="parag">
                    <li><strong>Consistent Moisture:</strong> Keep the soil evenly moist throughout the growing season to prevent stress.</li>
                    <li><strong>Watering Frequency:</strong> Provide 1-1.5 inches of water per week, more during dry spells.</li>
                    <li><strong>Mulching:</strong> Use mulch to retain moisture, keep the soil cool, and reduce the frequency of watering.</li>
                    <li><strong>Overhead Irrigation:</strong> Avoid overhead watering, which can lead to diseases; use drip irrigation instead.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Cauliflower/img3.jpg" alt="Fertilizing Cauliflower" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Cauliflower is a heavy feeder that requires regular fertilization for best results:
                </p>
                <ul class="parag">
                    <li><strong>Initial Fertilization:</strong> Apply a balanced fertilizer (e.g., 10-10-10) at planting time.</li>
                    <li><strong>Side-Dressing:</strong> Side-dress with a high-nitrogen fertilizer when plants are about 4-6 weeks old.</li>
                    <li><strong>Continuous Feeding:</strong> Fertilize every 3-4 weeks with a balanced fertilizer to support continuous growth.</li>
                    <li><strong>Avoiding Over-Fertilization:</strong> Too much nitrogen can cause excessive leaf growth and poor head formation.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Cauliflower/img4.jpg" alt="Cauliflower Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Cauliflower can be affected by several pests and diseases. Here’s how to manage them:
                </p>
                <ul class="parag">
                    <li><strong>Cabbage Worms:</strong> These pests chew holes in leaves and heads. Control with Bt (Bacillus thuringiensis) or row covers.</li>
                    <li><strong>Aphids:</strong> These small insects can weaken plants by sucking sap. Use insecticidal soap or neem oil for control.</li>
                    <li><strong>Black Rot:</strong> This bacterial disease causes yellowing and wilting. Prevent by using disease-resistant varieties and crop rotation.</li>
                    <li><strong>Clubroot:</strong> This soil-borne disease causes swollen roots. Practice crop rotation and use lime to raise soil pH.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Cauliflower/img5.jpg" alt="Harvesting Cauliflower" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvesting cauliflower at the right time is essential for flavor and texture:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Cauliflower heads are usually ready for harvest 60-85 days after planting, depending on the variety.</li>
                    <li><strong>Blanching:</strong> When heads are 2-3 inches in diameter, tie the outer leaves over the head to keep it white (blanching).</li>
                    <li><strong>Head Size:</strong> Harvest when heads are firm and compact, about 6-8 inches in diameter.</li>
                    <li><strong>Avoid Over-Maturity:</strong> Harvest before the heads start to separate and become "ricey."</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Cauliflower/img6.jpg" alt="Storing Cauliflower" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper post-harvest handling ensures cauliflower stays fresh and retains its quality:
                </p>
                <ul class="parag">
                    <li><strong>Cooling:</strong> Cool cauliflower immediately after harvest to preserve freshness.</li>
                    <li><strong>Cleaning:</strong> Gently wash heads to remove dirt. Avoid soaking as cauliflower can absorb water.</li>
                    <li><strong>Storage Conditions:</strong> Store cauliflower in a plastic bag in the refrigerator for up to 2 weeks.</li>
                    <li><strong>Freezing:</strong> Blanch and freeze cauliflower for long-term storage, although this may affect texture.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>