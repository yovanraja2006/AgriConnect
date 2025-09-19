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
    <title>Snake Gourd | AGRCT</title>
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
        <h2>Snake Gourd Cultivation Guide</h2>
        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/SnakeGourd/img0.jpg" alt="Soil Preparation for Snake Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">1. Soil Preparation</h3>
                <p class="parag">
                    Snake gourd thrives in well-drained, fertile soil. Prepare the soil for optimal growth:
                </p>
                <ul class="parag">
                    <li><strong>Soil Type:</strong> Choose loamy or sandy soil with good drainage. pH should be between 6.0 and 7.0.</li>
                    <li><strong>Soil Testing:</strong> Test soil for nutrients and amend accordingly. Incorporate organic matter for better fertility.</li>
                    <li><strong>Land Preparation:</strong> Plow and level the field. Add compost or well-rotted manure to improve soil structure.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/SnakeGourd/img1.jpg" alt="Planting Snake Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">2. Planting</h3>
                <p class="parag">
                    Follow these steps for successful planting of snake gourd:
                </p>
                <ul class="parag">
                    <li><strong>Timing:</strong> Plant during the warm season, after the danger of frost has passed.</li>
                    <li><strong>Seeding:</strong> Sow seeds directly into the soil or start seedlings in pots. Space seeds 1 inch apart and cover lightly.</li>
                    <li><strong>Transplanting:</strong> If using seedlings, transplant them after 4-6 weeks, ensuring adequate spacing.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/SnakeGourd/img2.jpg" alt="Watering Snake Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">3. Watering</h3>
                <p class="parag">
                    Regular watering is crucial for healthy growth:
                </p>
                <ul class="parag">
                    <li><strong>Water Needs:</strong> Keep the soil consistently moist, but avoid waterlogging.</li>
                    <li><strong>Watering Schedule:</strong> Water plants deeply once a week, adjusting based on weather conditions.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/SnakeGourd/img3.jpg" alt="Fertilizing Snake Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">4. Fertilization</h3>
                <p class="parag">
                    Proper fertilization promotes vigorous growth:
                </p>
                <ul class="parag">
                    <li><strong>Initial Fertilizer:</strong> Apply a balanced fertilizer before planting.</li>
                    <li><strong>Additional Feeding:</strong> Feed with a high-potassium fertilizer during the flowering stage to enhance fruit development.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/SnakeGourd/img4.jpg" alt="Snake Gourd Pest Management" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">5. Pest and Disease Management</h3>
                <p class="parag">
                    Managing pests and diseases is essential for a healthy crop:
                </p>
                <ul class="parag">
                    <li><strong>Common Pests:</strong> Watch for pests such as aphids and spider mites. Use insecticidal soap or neem oil if necessary.</li>
                    <li><strong>Diseases:</strong> Prevent diseases like powdery mildew by ensuring good air circulation and avoiding overhead watering.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section reverse">
            <img src="/AgriConnect/public/img/Guide/SnakeGourd/img5.jpg" alt="Harvesting Snake Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">6. Harvesting</h3>
                <p class="parag">
                    Harvest snake gourds at the right time for the best quality:
                </p>
                <ul class="parag">
                    <li><strong>Harvest Timing:</strong> Harvest when the gourds are young and tender. They should be firm and have a glossy skin.</li>
                    <li><strong>Harvest Method:</strong> Use a sharp knife to cut the gourds from the vine.</li>
                </ul>
            </div>
        </div>

        <div class="guide-section">
            <img src="/AgriConnect/public/img/Guide/SnakeGourd/img6.jpg" alt="Storing Snake Gourd" class="guide-img">
            <div class="guide-text">
                <h3 class="list-head">7. Post-Harvest</h3>
                <p class="parag">
                    Proper storage extends the shelf life of snake gourds:
                </p>
                <ul class="parag">
                    <li><strong>Cleaning:</strong> Clean the gourds to remove any dirt or debris.</li>
                    <li><strong>Storage Conditions:</strong> Store in a cool, dry place. They can last up to a week at room temperature or longer in the refrigerator.</li>
                </ul>
            </div>
        </div>
    </section>
</main>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>