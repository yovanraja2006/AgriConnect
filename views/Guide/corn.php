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
    <title>Corn | AGRCT</title>
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
        <h2>Corn Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Corn/img0.jpg" alt="Soil Preparation for Corn" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Corn thrives in well-drained, fertile soil with a pH between 6.0 and 6.8. Proper soil preparation is essential for healthy crop production:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Conduct a soil test to determine nutrient levels and pH. Adjust soil pH if necessary.</li>
                    <li><strong>Tillage:</strong> Till the soil to a depth of 8-12 inches to break up compaction and improve root growth.</li>
                    <li><strong>Incorporating Organic Matter:</strong> Add compost or aged manure to enhance soil structure and fertility.</li>
                    <li><strong>Fertilization:</strong> Apply a balanced fertilizer before planting to ensure the soil has adequate nutrients.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Corn/img1.jpg" alt="Planting Corn" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Corn is a warm-season crop that requires careful timing and planting techniques for optimal growth:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Plant corn after the last frost date when soil temperatures reach at least 60°F (16°C).</li>
                    <li><strong>Spacing:</strong> Plant seeds 1 inch deep and 8-12 inches apart in rows 30-36 inches apart.</li>
                    <li><strong>Block Planting:</strong> For better pollination, plant corn in blocks of at least 4 rows, rather than in a single row.</li>
                    <li><strong>Thinning:</strong> Thin seedlings to 8-12 inches apart once they reach 4-6 inches in height.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Corn/img2.jpg" alt="Watering Corn" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Corn requires consistent watering, especially during critical growth stages:
                </p>
                <ul class="parag">
                    <li><strong>Consistent Moisture:</strong> Keep the soil evenly moist, especially during germination, silking, and tasseling stages.</li>
                    <li><strong>Watering Frequency:</strong> Provide about 1-1.5 inches of water per week. Increase during hot, dry periods.</li>
                    <li><strong>Mulching:</strong> Apply mulch to retain soil moisture and control weeds.</li>
                    <li><strong>Avoid Water Stress:</strong> Ensure adequate moisture during pollination to avoid poor kernel development.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Corn/img3.jpg" alt="Fertilizing Corn" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Corn is a heavy feeder that requires regular fertilization for optimal growth and yield:
                </p>
                <ul class="parag">
                    <li><strong>Starter Fertilization:</strong> Apply a balanced fertilizer (e.g., 10-10-10) at planting time.</li>
                    <li><strong>Side-Dressing:</strong> Side-dress with nitrogen-rich fertilizer when plants are 8-12 inches tall and again when they are knee-high.</li>
                    <li><strong>Avoiding Nitrogen Deficiency:</strong> Watch for yellowing leaves, which may indicate a need for additional nitrogen.</li>
                    <li><strong>Continuous Feeding:</strong> Apply additional nitrogen every 3-4 weeks during the growing season.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Corn/img4.jpg" alt="Corn Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Corn is susceptible to several pests and diseases. Effective management is key to a healthy crop:
                </p>
                <ul class="parag">
                    <li><strong>Corn Earworms:</strong> These pests feed on corn kernels. Use Bt corn varieties or apply insecticides if needed.</li>
                    <li><strong>European Corn Borers:</strong> These pests tunnel into stalks and ears. Rotate crops and use resistant varieties.</li>
                    <li><strong>Rust:</strong> A fungal disease that causes rust-colored spots on leaves. Apply fungicides and use resistant varieties.</li>
                    <li><strong>Rootworms:</strong> These larvae feed on corn roots, weakening plants. Rotate crops and use soil insecticides if necessary.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Corn/img5.jpg" alt="Harvesting Corn" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvesting corn at the right time ensures the best flavor and texture:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Sweet corn is ready to harvest about 18-24 days after silks appear. Harvest when kernels are plump and milky.</li>
                    <li><strong>Checking Maturity:</strong> Pull back the husk slightly and press a kernel with your thumbnail. If the liquid is milky, it's ready to harvest.</li>
                    <li><strong>Harvest Early in the Day:</strong> Harvest corn in the morning when it's cool to retain sweetness and moisture.</li>
                    <li><strong>Avoid Over-Maturity:</strong> Harvest promptly to prevent kernels from becoming tough and starchy.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Corn/img6.jpg" alt="Storing Corn" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper post-harvest handling ensures corn retains its sweetness and quality:
                </p>
                <ul class="parag">
                    <li><strong>Immediate Cooling:</strong> Cool corn immediately after harvest to slow down sugar-to-starch conversion.</li>
                    <li><strong>Storing Fresh Corn:</strong> Store corn in the husk in the refrigerator. It can last for up to 1 week.</li>
                    <li><strong>Freezing:</strong> Blanch and freeze corn kernels for long-term storage, preserving sweetness and texture.</li>
                    <li><strong>Drying:</strong> For popcorn or cornmeal, dry corn ears thoroughly before storing in a cool, dry place.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>