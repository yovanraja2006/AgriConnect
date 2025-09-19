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
    <title>Guide | AGRCT</title>
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

<!------------------------------------Header and Sidebar--------------------------------------------->
    <main class="content">
        <section class="mainbgcolor">

        <ul  class="allgrid">
            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/beetroot.php">
                        <li><img src="/AgriConnect/public/img/Beetroot.jpg" alt="Beetroot" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/beetroot.php"><h3>Beetroot</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/bottle_gourd.php">
                        <li><img src="/AgriConnect/public/img/BottleGourd.jpg" alt="Bottle Gourd" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/bottle_gourd.php"><h3>Bottle Gourd</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/brinjal.php">
                        <li><img src="/AgriConnect/public/img/Brinjial.jpg" alt="Brinjal" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/brinjal.php"><h3>Brinjal</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/carrot.php">
                        <li><img src="/AgriConnect/public/img/Carrots.jpg" alt="carrot" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/carrot.php"><h3>Carrots</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/cauliflower.php">
                        <li><img src="/AgriConnect/public/img/Cauliflower.jpg" alt="Cauliflower" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/cauliflower.php"><h3>Cauliflower</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/corn.php">
                        <li><img src="/AgriConnect/public/img/Corn.jpg" alt="corn" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/corn.php"><h3>Corn</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/lettuce.php">
                        <li><img src="/AgriConnect/public/img/Lettuce.jpg" alt="lettuce" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/lettuce.php"><h3>Lettuce</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/onion.php">
                        <li><img src="/AgriConnect/public/img/Onion.jpg" alt="Onion" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/onion.php"><h3>Onion</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/potato.php">
                        <li><img src="/AgriConnect/public/img/Potatoes.jpg" alt="Potato" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/potato.php"><h3>Potato</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/pumpkin.php">
                        <li><img src="/AgriConnect/public/img/Pumpkin.jpg" alt="Pumpkin" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/pumpkin.php"><h3>Pumpkin</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/radish.php">
                        <li><img src="/AgriConnect/public/img/Radish.jpg" alt="Radish" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/radish.php"><h3>Radish</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty">
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/rice.php">
                        <li><img src="/AgriConnect/public/img/Rice.jpg" alt="rice" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/rice.php"><h3>Rice</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/snake-gourd.php">
                        <li><img src="/AgriConnect/public/img/SnakeGourd.jpg" alt="Snake Gourd" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/snake-gourd.php"><h3>Snake Gourd</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/soybeans.php">
                        <li><img src="/AgriConnect/public/img/Soybeans.jpg" alt="soybeans" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/soybeans.php"><h3>Soybeans</h3></a></li>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/tomato.php">
                        <li><img src="/AgriConnect/public/img/Tomatoes.jpg" alt="Tomato" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/tomato.php"><h3>Tomato</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>

            <li  class="allgridsty"> 
                <div class="rounded-box">
                <ul>
                    <a  href="/AgriConnect/views/Guide/wheat.php">
                        <li><img src="/AgriConnect/public/img/Wheat.jpg" alt="wheat" class="crpgimg"></li>
                        <li><a  href="/AgriConnect/views/Guide/wheat.php"><h3>Wheat</h3></a></li>
                    </a>
                </ul>
                </div>
            </li>
        </ul>
        </section>

        <style>
        select {
            width: 80%;
            padding: 12px;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
            margin-bottom: 1em;
            background-color: #fff;
            transition: background-color 0.3s ease;
        }

        select:focus {
            background-color: #cccde5;
            outline: none;
            border-color: #89da18;
        }

        .crop-list {
            padding: 1em;
            background: #8aa78e;
            border-radius: 6px;
            transition: background-color 0.3s ease;
            text-align: left;
            margin-left: 50px;
            margin-right: 50px;
        }

        .crop-list h3 {
            margin-top: 0;
        }
        </style>

        <section class="mainbgcolor">
            <h2>What to Plant This Month</h2>
            <label for="month-select"><b>Select a Month:</b></label>
            <select id="month-select">
                <option value="">--Select a Month--</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
            </select>
            <div id="crop-list" class="crop-list" >
                <!-- Crop recommendations will be displayed here -->
            </div>
        </section>
    </main>
    <script src="/AgriConnect/public/script/start.js"></script>
    <script src="/AgriConnect/public/script/guide.js"></script>
</body>
</html>