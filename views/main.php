<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | AGRCT</title>
    <link rel="stylesheet" href="/AgriConnect/public/styles/mainstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="icon" href="/AgriConnect/public/img/img1.png">
</head>
<body class="backgroundimg1">
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
            <!--<i class='bx bx-menu toggle-btn'></i>-->
        </div>
        
        <ul class="list">
            <li class="list-item inactive">
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
            <li class="list-item">
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
            <h1>Seasonal Milk Trading</h1>
            <p class="parag">The Seasonal Milk Trading App is your essential tool for simplifying the buying and selling of milk, tailored to the unique patterns of seasonal production. Understanding that milk production varies by season, this app provides farmers with a dedicated platform to list their milk production details, making it easier for buyers to find the best milk products for their needs.</p>
            
            <h2 class="list-head">Key Features:</h2>
            <ul>
                <li class="list-subhead"><b>Farmer Profiles:</b> Farmers can create detailed profiles to showcase their milk production capabilities and build trust with potential buyers.</li>
                <li class="list-subhead"><b>Milk Quality Certifications:</b> Attach certifications to verify the quality of your milk, assuring buyers of its high standards.</li>
                <li class="list-subhead"><b>Seasonal Forecasts:</b> Plan your production and sales with the help of accurate seasonal forecasts tailored to the dairy industry.</li>
                <li class="list-subhead"><b>Search Functionality:</b> Buyers can easily search for milk based on specific criteria such as quantity, quality, and seasonality.</li>
                <li class="list-subhead"><b>Secure Payment Systems:</b> Conduct transactions with confidence using our secure and reliable payment systems, ensuring smooth exchanges between farmers and buyers.</li>
            </ul>
            <br>
            <p class="parag">Join the Seasonal Milk Trading App today and experience a more efficient, transparent, and tailored approach to trading milk, perfectly aligned with the rhythms of nature.</p>
        </section>
        

        <section class="mainbgcolor">
            <h1>Land Leasing</h1>
            <p class="parag">Unlock the potential of your agricultural ambitions with LandFinder, the innovative app designed to connect aspiring cultivators with landowners who have prime agricultural land available for rent or lease. Whether you're an individual with the expertise to cultivate crops but lack the necessary land, or a landowner with fertile soil ready to be utilized, LandFinder is your ideal platform.</p>
            
            <h2 class="list-head">Key Features:</h2>
            <ul>
                <li class="list-subhead"><b>Advanced Search Functionality:</b> Easily find the perfect land based on location, soil quality, climate, and crop suitability, ensuring your cultivation efforts are set up for success.</li>
                <li class="list-subhead"><b>Detailed Property Listings:</b> Landowners can list their agricultural properties with comprehensive descriptions, including terms and conditions, so potential cultivators have all the information they need.</li>
                <li class="list-subhead"><b>Direct Communication:</b> Facilitates seamless connections between landowners and cultivators, allowing them to discuss terms and establish mutually beneficial agreements directly through the app.</li>
                <li class="list-subhead"><b>Promote Agricultural Efficiency:</b> By matching the right land with the right cultivator, LandFinder promotes the efficient use of agricultural land, contributing to increased crop production and sustainable farming practices.</li>
            </ul>
            <br>
            <p class="parag">Join LandFinder today and take the first step toward turning your agricultural dreams into reality, whether you're offering land or looking for it.</p>
        </section>
        

        <section class="mainbgcolor">
            <h1>Crop Cultivation Guide</h1>
            <p class="parag">Discover the ultimate resource for successful crop cultivation with our Crop Cultivation Guide App. Whether you're a novice gardener or an experienced farmer, this app provides you with all the tools and knowledge you need to grow healthy and productive crops.</p>
            
            <h2 class="list-head">Key Features:</h2>
            <ul>
                <li class="list-subhead"><b>Step-by-Step Instructions:</b> Follow detailed, easy-to-understand guidelines on cultivating various crops, from soil preparation to harvesting.</li>
                <li class="list-subhead"><b>Comprehensive Guides:</b> Access information on essential practices such as soil preparation, planting techniques, irrigation methods, pest control, and effective harvesting.</li>
                <li class="list-subhead"><b>Advanced Tips:</b> Enhance your farming practices with advice on crop rotation, organic farming, and troubleshooting common agricultural issues.</li>
                <li class="list-subhead"><b>User-Friendly Interface:</b> Navigate the app effortlessly, gaining the knowledge and confidence needed to cultivate your crops successfully.</li>
            </ul>
            <br>
            <p class="parag">Whether you're starting your first garden or expanding your farm, the Crop Cultivation Guide App is your go-to companion for achieving bountiful harvests and sustainable farming practices.</p>
        </section>
    </main>
    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>