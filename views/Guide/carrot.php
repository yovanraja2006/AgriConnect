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
    <title>Carrot | AGRCT</title>
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
        <h2>Carrot Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Carrot/img0.jpg" alt="Soil Preparation for Carrot" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Carrots require loose, well-drained soil with a pH of 6.0 to 6.8. Proper soil preparation is crucial for straight, healthy roots:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Conduct a soil test to check pH and nutrient levels, amending as needed.</li>
                    <li><strong>Loosening the Soil:</strong> Till or dig the soil to a depth of 12-15 inches, breaking up clods to prevent root deformation.</li>
                    <li><strong>Incorporating Organic Matter:</strong> Add compost or well-rotted manure to improve soil texture and fertility.</li>
                    <li><strong>Stone Removal:</strong> Remove stones and debris that could obstruct root growth.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Carrot/img1.jpg" alt="Planting Carrot" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Carrots are best grown from direct seeding. Proper planting techniques ensure healthy growth:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Sow seeds in early spring or late summer for a fall harvest. Carrots prefer cooler weather.</li>
                    <li><strong>Direct Sowing:</strong> Plant seeds 1/4 inch deep in rows spaced 12-18 inches apart.</li>
                    <li><strong>Thinning:</strong> Thin seedlings to 2-3 inches apart to prevent overcrowding and allow roots to develop fully.</li>
                    <li><strong>Watering:</strong> Keep the soil consistently moist during germination, which can take up to 21 days.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Carrot/img2.jpg" alt="Watering Carrots" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Carrots require consistent moisture to grow well. Here's how to manage watering:
                </p>
                <ul class="parag">
                    <li><strong>Consistent Moisture:</strong> Keep the soil evenly moist, especially during root development.</li>
                    <li><strong>Watering Frequency:</strong> Carrots need about 1 inch of water per week, more during dry periods.</li>
                    <li><strong>Mulching:</strong> Apply mulch to retain moisture and keep the soil cool, reducing the need for frequent watering.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Carrot/img3.jpg" alt="Fertilizing Carrots" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Carrots are light feeders but benefit from balanced fertilization. Here's how to fertilize them:
                </p>
                <ul class="parag">
                    <li><strong>Initial Fertilization:</strong> Apply a balanced fertilizer (e.g., 10-10-10) before planting.</li>
                    <li><strong>Side-Dressing:</strong> If growth is slow, side-dress with compost or a balanced fertilizer halfway through the growing season.</li>
                    <li><strong>Avoiding Excess Nitrogen:</strong> Too much nitrogen promotes foliage growth over root development, so use nitrogen sparingly.</li>
                    <li><strong>Regular Feeding:</strong> Fertilize every 4-6 weeks for continuous growth and healthy root development.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Carrot/img4.jpg" alt="Carrot Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Carrots are relatively pest-free, but some pests and diseases can affect them. Here’s how to manage them:
                </p>
                <ul class="parag">
                    <li><strong>Carrot Rust Fly:</strong> This pest lays eggs at the base of plants, and the larvae feed on roots. Use row covers to protect young plants.</li>
                    <li><strong>Aphids:</strong> These small insects can weaken plants by sucking sap. Control with insecticidal soap or neem oil.</li>
                    <li><strong>Root-Knot Nematodes:</strong> These microscopic pests cause knots on roots. Practice crop rotation to avoid infestation.</li>
                    <li><strong>Good Hygiene:</strong> Remove plant debris and practice crop rotation to reduce the risk of soil-borne diseases.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Carrot/img5.jpg" alt="Harvesting Carrots" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvesting carrots at the right time ensures the best flavor and texture:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Carrots are usually ready for harvest 70-80 days after planting, depending on the variety.</li>
                    <li><strong>Checking Maturity:</strong> Gently pull one carrot to check size and quality before harvesting the rest.</li>
                    <li><strong>Harvesting Technique:</strong> Loosen the soil around the roots with a garden fork before pulling them out to avoid breaking.</li>
                    <li><strong>Late Harvest:</strong> Carrots can be left in the ground for a sweeter flavor, but avoid over-maturity, as they can become woody.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Carrot/img6.jpg" alt="Storing Carrots" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper post-harvest handling ensures carrots stay fresh and nutritious:
                </p>
                <ul class="parag">
                    <li><strong>Cleaning:</strong> Gently wash carrots to remove soil. Avoid scrubbing too hard to prevent damage.</li>
                    <li><strong>Trimming Tops:</strong> Remove the green tops to prevent moisture loss and extend storage life.</li>
                    <li><strong>Storage Conditions:</strong> Store carrots in a cool, humid environment, such as a refrigerator, for up to a month.</li>
                    <li><strong>Freezing:</strong> Blanch and freeze carrots for long-term storage, although this may alter their texture.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>