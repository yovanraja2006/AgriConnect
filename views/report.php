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
    <title>Report | AGRCT</title>
    <link rel="stylesheet" href="/AgriConnect/public/styles/mainstyle.css">
    <link rel="stylesheet" href="/AgriConnect/public/styles/report.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="icon" href="/AgriConnect/public/img/img1.png">
</head>
<body class="backgroundimg5">
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
            <li class="list-item">
                <a href="/AgriConnect/views/guide.php">
                    <i class='bx bx-spa'></i>
                    <span class="link-name" style="--i:2;">Crop Guidance</span>
                </a>
            </li>
            <li class="list-item inactive">
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
            <div class="container">
                <div class="chart-container">
                    <canvas id="AgriConnectReport"></canvas>
                </div>

                <div class="legend-container">
                    <h3>AgriConnect - Performance Report</h3>
                    <ul>
                        <li><span style="background-color: #8ccf74;"></span>Milk Trading: 90%</li>
                        <li><span style="background-color: #f5c5aa;"></span>Crop Cultivation Guide: 85%</li>
                        <li><span style="background-color: #fbe89a;"></span>Land Leasing: 70%</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="mainbgcolor">
            <h2>Credits and Development</h2>
            <div class="parag">
                <h3>Credits:</h3>
                <p><strong>Project Lead:</strong> Sree Mithra D | Srivarshini K | Yovan Raja S   
                    <br>Managed the overall project, from conceptualization to deployment, ensuring all features were aligned with the needs of the agricultural community.</p>
                
                <h4>Development Team:</h4>
                <ul>
                    <li><strong>Backend Developers:</strong> Responsible for developing and maintaining the server-side logic, database management, and API integration for the app.</li>
                    <li><strong>Frontend Developers:</strong> Designed and implemented the user interface, ensuring an intuitive and user-friendly experience for farmers and other stakeholders.</li>
                    <li><strong>Agricultural Experts:</strong> Provided critical insights into crop cultivation practices, milk production standards, and land leasing trends to ensure the app's guidance was accurate and practical.</li>
                    <li><strong>Quality Assurance Team:</strong> Conducted thorough testing to ensure the app's reliability, accuracy, and performance across various devices and operating conditions.</li>
                </ul>
        
                <h4>Design Team:</h4>
                <p>Crafted the visual design elements, ensuring that the app was both aesthetically pleasing and easy to navigate for users of varying tech proficiency.</p>
        
                <h4>Marketing and Outreach Team:</h4>
                <p>Developed a strategy to promote the app within the farming community, including outreach to potential users, training programs, and partnerships with agricultural organizations.</p>
            </div>
        
            <div class="parag">
                <h3>Development:</h3>
                <ol>
                    <li><strong>Ideation and Research:</strong> Conducted extensive research to identify key challenges faced by farmers, particularly in the areas of milk trading, crop cultivation, and land access. Collaborated with agricultural experts and farmers to gather insights and refine the app's concept.</li>
                    <li><strong>Feature Definition:</strong> Defined core features, including a milk trading marketplace, crop cultivation guides, and a land leasing platform, ensuring they addressed the identified needs. Prioritized user experience, aiming to create a platform that was both powerful and easy to use.</li>
                    <li><strong>Design and Prototyping:</strong> Developed wireframes and prototypes, focusing on a seamless user interface that would cater to both tech-savvy users and those less familiar with digital tools. Integrated feedback from initial user testing to refine the design and functionality.</li>
                    <li><strong>Development and Integration:</strong> Implemented the backend infrastructure to support real-time transactions, data storage, and user authentication. Developed a robust frontend, with an emphasis on responsive design to ensure compatibility across various devices. Integrated agricultural databases and real-time weather data to provide up-to-date guidance on crop cultivation.</li>
                    <li><strong>Testing and Deployment:</strong> Conducted comprehensive testing, including unit tests, integration tests, and user acceptance testing, to ensure the app was bug-free and met user expectations. Deployed the app to the market, followed by continuous monitoring and updates based on user feedback and emerging needs within the agricultural community.</li>
                    <li><strong>Post-Launch Support:</strong> Established a customer support system to assist users with technical issues and gather feedback for future updates. Continued collaboration with agricultural experts to update and expand the crop cultivation guides and other resources as needed.</li>
                </ol>
            </div>
        </section>
        
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/AgriConnect/public/script/start.js"></script>
    <script src="/AgriConnect/public/script/report.js"></script>
</body>
</html>