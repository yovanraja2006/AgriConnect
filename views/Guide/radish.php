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
    <title>Radish | AGRCT</title>
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
        <h2>Radish Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Radish/img0.jpg" alt="Soil Preparation for Radish" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Radishes prefer well-drained, loose soil with a pH of 6.0 to 7.0. Preparing the soil properly is crucial for healthy root development:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Consider testing your soil to determine its pH and nutrient content. This will help you amend the soil as needed.</li>
                    <li><strong>Loosening the Soil:</strong> Use a garden fork or tiller to loosen the soil to a depth of at least 12 inches. This prevents root deformation.</li>
                    <li><strong>Incorporating Organic Matter:</strong> Mix in compost or well-rotted manure to improve soil structure and fertility. This also aids moisture retention.</li>
                    <li><strong>Avoiding Over-Fertilization:</strong> Avoid high-nitrogen fertilizers, as they can promote excessive leaf growth over root development.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Radish/img1.jpg" alt="Planting Radishes" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Radish seeds can be sown directly into the garden. Attention to detail in planting improves success rates:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Radishes are cool-season crops best planted in early spring or late summer for a fall harvest.</li>
                    <li><strong>Direct Sowing:</strong> Plant seeds 1/2 inch deep and 1 inch apart. Space rows about 12 inches apart.</li>
                    <li><strong>Thinning:</strong> Thin seedlings to 2 inches apart after they have a few leaves. This prevents overcrowding and promotes proper root growth.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Radish/img2.jpg" alt="Watering Radishes" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Keep the soil consistently moist to ensure rapid growth and prevent radishes from becoming tough and woody:
                </p>
                <ul class="parag">
                    <li><strong>Consistent Moisture:</strong> Ensure the soil remains evenly moist, especially during germination and early growth stages.</li>
                    <li><strong>Watering Frequency:</strong> Radishes need about 1 inch of water per week. Increase during dry periods.</li>
                    <li><strong>Mulching:</strong> Apply a layer of organic mulch to retain moisture and keep the soil cool, aiding in root development.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Radish/img3.jpg" alt="Fertilizing Radishes" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Radishes don’t need a lot of fertilizer. Here’s how to manage fertilization effectively:
                </p>
                <ul class="parag">
                    <li><strong>Light Fertilization:</strong> Apply a balanced fertilizer (e.g., 10-10-10) at planting time. This provides essential nutrients without excessive leaf growth.</li>
                    <li><strong>Avoiding Nitrogen Excess:</strong> Too much nitrogen can lead to lush foliage but poor root development.</li>
                    <li><strong>Side-Dressing:</strong> If needed, side-dress with a small amount of balanced fertilizer when the plants are half-grown.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Radish/img4.jpg" alt="Radish Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Radishes are relatively pest-free, but they can be affected by certain pests and diseases:
                </p>
                <ul class="parag">
                    <li><strong>Root Maggots:</strong> These larvae feed on the roots, causing damage. Use row covers to protect plants during early stages.</li>
                    <li><strong>Flea Beetles:</strong> These small beetles chew holes in the leaves. Protect with row covers or apply insecticidal soap.</li>
                    <li><strong>Crop Rotation:</strong> Practice crop rotation to reduce soil-borne diseases. Avoid planting radishes in the same spot more than once every three years.</li>
                    <li><strong>Good Hygiene:</strong> Remove plant debris at the end of the season to prevent pests and diseases from overwintering in the soil.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Radish/img5.jpg" alt="Harvesting Radishes" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvesting radishes at the right time ensures the best flavor and texture:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Radishes are typically ready for harvest within 3 to 4 weeks after planting. Harvest when they reach about 1 inch in diameter.</li>
                    <li><strong>Avoid Over-Maturity:</strong> Don’t leave radishes in the ground too long, as they can become pithy or tough.</li>
                    <li><strong>Checking Maturity:</strong> Gently pull one radish to check size and texture before harvesting the rest.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Radish/img6.jpg" alt="Storing Radishes" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper post-harvest handling is essential for prolonging the freshness of radishes:
                </p>
                <ul class="parag">
                    <li><strong>Washing:</strong> Wash radishes thoroughly to remove soil. This helps maintain quality and freshness.</li>
                    <li><strong>Removing Tops:</strong> Cut off the tops to prevent moisture loss and extend storage life.</li>
                    <li><strong>Storage Conditions:</strong> Store radishes in a plastic bag in the refrigerator. They can last for up to two weeks.</li>
                    <li><strong>Freezing:</strong> For long-term storage, blanch and freeze radishes, although this may affect texture.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>