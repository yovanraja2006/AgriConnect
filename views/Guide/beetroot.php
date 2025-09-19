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
    <title>Beetroot | AGRCT</title>
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
        <h2>Beetroot Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Beetroot/img0.jpg" alt="Soil Preparation for Beetroot" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Beetroot prefers well-drained, loamy soil with a pH of 6.0 to 7.5. Proper soil preparation ensures robust growth:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Test your soil to adjust pH and nutrient levels as needed.</li>
                    <li><strong>Loosening the Soil:</strong> Use a garden fork or tiller to loosen the soil to a depth of 12-15 inches.</li>
                    <li><strong>Adding Organic Matter:</strong> Incorporate compost or well-rotted manure to enhance soil fertility.</li>
                    <li><strong>Avoiding Compaction:</strong> Ensure the soil is loose to promote even root growth and prevent deformities.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Beetroot/img1.jpg" alt="Planting Beetroot" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Beetroot seeds should be sown directly into the soil. Follow these steps for successful planting:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Sow beetroot seeds in early spring or late summer for best results.</li>
                    <li><strong>Direct Sowing:</strong> Plant seeds 1/2 inch deep and 1-2 inches apart. Space rows 12-18 inches apart.</li>
                    <li><strong>Thinning:</strong> Thin seedlings to 3-4 inches apart to allow room for root development.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Beetroot/img2.jpg" alt="Watering Beetroot" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Consistent moisture is key to avoiding tough or woody beetroots:
                </p>
                <ul class="parag">
                    <li><strong>Consistent Moisture:</strong> Keep the soil evenly moist, particularly during germination and early growth.</li>
                    <li><strong>Watering Frequency:</strong> Beetroot requires about 1 inch of water per week. Increase during dry spells.</li>
                    <li><strong>Mulching:</strong> Apply organic mulch to retain moisture and control soil temperature.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Beetroot/img3.jpg" alt="Fertilizing Beetroot" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Beetroot benefits from balanced fertilization without excessive nitrogen:
                </p>
                <ul class="parag">
                    <li><strong>Balanced Fertilization:</strong> Use a balanced fertilizer (e.g., 10-10-10) at planting time.</li>
                    <li><strong>Avoiding Nitrogen Excess:</strong> Excess nitrogen leads to leafy growth over root development.</li>
                    <li><strong>Side-Dressing:</strong> If necessary, side-dress with a small amount of fertilizer during mid-growth.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Beetroot/img4.jpg" alt="Beetroot Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Beetroot is relatively resilient but can be affected by pests and diseases:
                </p>
                <ul class="parag">
                    <li><strong>Aphids:</strong> These small insects can weaken plants. Use insecticidal soap or neem oil to control them.</li>
                    <li><strong>Leaf Miners:</strong> These pests create tunnels in leaves. Remove affected leaves and apply appropriate pesticides.</li>
                    <li><strong>Crop Rotation:</strong> Rotate crops to prevent soil-borne diseases and maintain soil health.</li>
                    <li><strong>Proper Spacing:</strong> Ensure proper spacing to promote air circulation and reduce disease risk.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Beetroot/img5.jpg" alt="Harvesting Beetroot" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvest beetroot at the right time for optimal taste and texture:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Beetroot is ready for harvest 7-8 weeks after planting. Harvest when roots reach 1.5-3 inches in diameter.</li>
                    <li><strong>Avoid Over-Maturity:</strong> Over-mature beetroot can become tough and woody.</li>
                    <li><strong>Gently Pulling:</strong> Loosen the soil around the roots and pull gently to avoid damaging the beetroot.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Beetroot/img6.jpg" alt="Storing Beetroot" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper post-harvest handling extends the shelf life of beetroot:
                </p>
                <ul class="parag">
                    <li><strong>Washing:</strong> Wash beetroot thoroughly to remove soil and maintain quality.</li>
                    <li><strong>Removing Tops:</strong> Cut off the tops to prevent moisture loss during storage.</li>
                    <li><strong>Storage Conditions:</strong> Store beetroot in a cool, dark place. Refrigeration extends freshness for up to 2 weeks.</li>
                    <li><strong>Freezing:</strong> For long-term storage, blanch and freeze beetroot, although texture may change.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>