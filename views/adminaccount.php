<?php
session_start();

// Check if the user is logged in, if not redirect to login page
if (!isset($_SESSION['user_id'])) {
    header("Location: adminlogin.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agriconnect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user details using session user_id
$user_id = $_SESSION['user_id'];
$sql = "SELECT username, email, last_login FROM adminid WHERE id='$user_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $email = $row['email'];
    $last_login = $row['last_login']; // Fetch the last_login value
} else {
    // If user not found, redirect to login
    header("Location: adminlogin.php");
    exit();
}

// Handle email update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
    $new_email = $conn->real_escape_string($_POST['email']);
    
    // Update email in the database
    $update_sql = "UPDATE adminid SET email='$new_email' WHERE id='$user_id'";
    
    if ($conn->query($update_sql) === TRUE) {
        $email = $new_email; // Update the email variable to display the new email
        echo "<script>alert('Email updated successfully!');</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Account | AGRCT</title>
    <link rel="stylesheet" href="/AgriConnect/public/styles/mainstyle.css">
    <link rel="stylesheet" href="/AgriConnect/public/styles/account.css">
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
        </div>
        
        <ul class="list">
            <li class="list-item">
                <a href="/AgriConnect/views/admin_add_milktrd.php">
                    <i class='bx bx-coffee-togo'></i>
                    <span class="link-name">Add Milk Product</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/admin_add_land.php">
                    <i class='bx bx-buildings'></i>
                    <span class="link-name">Add Land Lease</span>
                </a>
            </li>
            <li class="list-item">
                <a href="/AgriConnect/views/admin_add_guide.php">
                    <i class='bx bx-spa'></i>
                    <span class="link-name">Add Crops Guide</span>
                </a>
            </li>
            <li class="list-item inactive">
                <a href="/AgriConnect/views/adminaccount.php">
                    <i class='bx bx-cog'></i>
                    <span class="link-name">Admin Profile</span>
                </a>
            </li>
        </ul>
    </nav>

    <main class="content">
        <section class="mainbgcolor">
            <div class="container">
                <h1>Your Account</h1>
                <navig>
                    <a href="adminaccount.php" id="edit-account-link" class="active"><i class="bx bx-user"></i> Edit Account</a>
                    <a href="admineditpass.php" id="edit-password-link"><i class="bx bx-lock-alt"></i> Edit Password</a>
                </navig>
                <naviga>
                    <a href="admindelete.php" id="delete-account-link" class="delete-account"><i class="bx bx-trash"></i> Delete Account</a>
                    <a href="adminlogout.php" id="logout-link" class="logout"><i class="bx bx-log-out"></i> Logout</a>
                </naviga>
                
                <div class="account-settings">

                    <!-- Edit Account Details Form -->
                    <form method="POST">
                        <h2>Edit Account Details</h2>
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <!-- Display the logged-in user's username -->
                            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username); ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <!-- Allow the user to edit their email -->
                            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
                        </div>
                        <button type="submit" id="btn-save" class="btn-save" disabled>Save Changes</button>
                    </form>
                </div>
                <p style="text-align:left; margin-left: 20px;"><b>Last Login: </b><?php echo $last_login ? date("d-m-Y - H:i:s", strtotime($last_login)) : "Never logged in"; ?></p>
            </div>
        </section>
    </main>
    
    <script src="/AgriConnect/public/script/start.js"></script>
    <script>
        document.getElementById('email').addEventListener('input', function () {
            var originalEmail = "<?php echo addslashes($email); ?>";
            var currentEmail = document.getElementById('email').value;
            var saveButton = document.getElementById('btn-save');
            saveButton.disabled = currentEmail === originalEmail;
        });
    </script>
</body>
</html>
