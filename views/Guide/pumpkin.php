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
    <title>Pumpkin | AGRCT</title>
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
        <h2>Pumpkin Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Pumpkin/img0.jpg" alt="Soil Preparation for Pumpkin" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Pumpkins need well-drained, nutrient-rich soil for optimal growth. Prepare the soil to support large pumpkin development:
                </p>
                <ul class="parag">
                    <li><strong>Soil Testing:</strong> Test soil for pH and nutrient levels. Amend soil to achieve a pH of 6.0 to 6.8.</li>
                    <li><strong>Soil Loosening:</strong> Loosen soil to a depth of 12-18 inches to accommodate the large root system.</li>
                    <li><strong>Organic Matter:</strong> Incorporate compost or well-rotted manure to improve soil fertility and drainage.</li>
                    <li><strong>Avoid Compaction:</strong> Ensure soil is loose and well-drained to prevent root rot and disease.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Pumpkin/img1.jpg" alt="Planting Pumpkin" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Proper planting techniques are essential for a successful pumpkin harvest:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Plant pumpkins after the last frost, when the soil has warmed to at least 60°F (16°C).</li>
                    <li><strong>Planting Depth:</strong> Plant seeds 1 inch deep in well-prepared soil.</li>
                    <li><strong>Spacing:</strong> Space seeds 36-48 inches apart to allow ample room for sprawling vines.</li>
                    <li><strong>Direct Seeding:</strong> Directly sow seeds into the garden or start indoors and transplant seedlings after frost danger has passed.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Pumpkin/img2.jpg" alt="Watering Pumpkin" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Adequate watering is crucial for pumpkin growth and fruit development:
                </p>
                <ul class="parag">
                    <li><strong>Watering Schedule:</strong> Water pumpkins regularly to keep the soil consistently moist, especially during fruit development.</li>
                    <li><strong>Watering Amount:</strong> Provide about 1-2 inches of water per week, adjusting based on rainfall and weather conditions.</li>
                    <li><strong>Drip Irrigation:</strong> Consider using drip irrigation to deliver water directly to the soil and reduce water loss.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Pumpkin/img3.jpg" alt="Fertilizing Pumpkin" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Proper fertilization supports vigorous growth and large fruit production:
                </p>
                <ul class="parag">
                    <li><strong>Pre-Planting Fertilizer:</strong> Apply a balanced fertilizer or compost before planting to enhance soil fertility.</li>
                    <li><strong>Side Dressing:</strong> Apply additional fertilizer when vines begin to spread and during fruit set.</li>
                    <li><strong>Micronutrients:</strong> Ensure adequate levels of potassium and phosphorus to support fruit development.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Pumpkin/img4.jpg" alt="Pumpkin Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Managing pests and diseases is crucial for a successful pumpkin harvest:
                </p>
                <ul class="parag">
                    <li><strong>Cucumber Beetles:</strong> These pests can damage leaves and fruits. Use row covers or insecticides as needed.</li>
                    <li><strong>Powdery Mildew:</strong> A fungal disease that affects leaves. Use fungicides and provide adequate spacing for air circulation.</li>
                    <li><strong>Crop Rotation:</strong> Practice crop rotation to minimize disease and pest buildup in the soil.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/Pumpkin/img5.jpg" alt="Harvesting Pumpkin" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvesting pumpkins at the right time ensures optimal quality and shelf life:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Harvest pumpkins when the skin is hard and the color is fully developed.</li>
                    <li><strong>Harvesting Method:</strong> Cut pumpkins from the vine with a sharp knife, leaving a few inches of stem attached.</li>
                    <li><strong>Curing:</strong> Cure harvested pumpkins in a warm, dry place for 1-2 weeks to harden the skin and improve storage life.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/Pumpkin/img6.jpg" alt="Storing Pumpkin" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper storage techniques help extend the shelf life of pumpkins:
                </p>
                <ul class="parag">
                    <li><strong>Cleaning:</strong> Remove any dirt and debris from the pumpkins before storage.</li>
                    <li><strong>Storage Conditions:</strong> Store pumpkins in a cool, dry place with good ventilation. Avoid areas with high humidity.</li>
                    <li><strong>Monitoring:</strong> Regularly check stored pumpkins for signs of rot or damage and remove affected ones promptly.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>