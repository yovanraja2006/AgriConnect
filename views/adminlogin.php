<?php
session_start(); // Start the session

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

$error = ""; // Initialize error message

// Check if cookies are set and validate the user automatically
if (isset($_COOKIE['username']) && isset($_COOKIE['user_token'])) {
    $user = $_COOKIE['username'];
    $token = $_COOKIE['user_token'];

    // Retrieve the user record based on the username from the cookie
    $sql = "SELECT * FROM adminid WHERE username='$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Check if token is set and valid
        if ($row['token'] !== null && hash_equals($row['token'], $token)) {
            // Store user data in session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            // Update last_login field
            $update_sql = "UPDATE adminid SET last_login=NOW() WHERE id='{$row['id']}'";
            $conn->query($update_sql);

            // Redirect to the protected page
            header("Location: admin_add_milktrd.php");
            exit();
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    // Retrieve the user record based on the username
    $sql = "SELECT * FROM adminid WHERE username='$user'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($pass, $row['password'])) {
            // Store user data in session variables
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            // Update last_login field
            $update_sql = "UPDATE adminid SET last_login=NOW() WHERE id='{$row['id']}'";
            $conn->query($update_sql);

            // Check if "Remember Me" is checked
            if (isset($_POST['remember_me'])) {
                // Generate a unique token for this user
                $token = bin2hex(random_bytes(16));

                // Save the token in the database for future validation
                $sql_token = "UPDATE adminid SET token='$token' WHERE username='$user'";
                $conn->query($sql_token);

                // Set cookies for 30 days with the username and token
                setcookie('username', $user, time() + (30 * 24 * 60 * 60), "/"); // Cookie for 30 days
                setcookie('user_token', $token, time() + (30 * 24 * 60 * 60), "/");
            } else {
                // Clear cookies if "Remember Me" is not checked
                setcookie('username', '', time() - 3600, "/");
                setcookie('user_token', '', time() - 3600, "/");
            }

            // Redirect to the protected page
            header("Location: admin_add_milktrd.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No user found with that username.";
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
    <title>Admin Login | AGRCT</title>
    <link rel="stylesheet" href="/AgriConnect/public/styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="icon" href="/AgriConnect/public/img/img1.png">
</head>
<body>
    <div class="wrapper">
        <form id="login-form" action="adminlogin.php" method="POST">
            <h1>Admin Login | AGRCT</h1>
            <div class="input-box">
                <i class='bx bx-user'></i>
                <input type="text" name="username" placeholder="Username" 
                       value="<?php echo isset($_COOKIE['username']) ? htmlspecialchars($_COOKIE['username']) : ''; ?>" required>
            </div>
            <div class="input-box">
                <i class='bx bx-lock'></i>
                <input type="password" id="login-password" name="password" placeholder="Password" required>
            </div>
            <button type="button" class="show-password-btn" id="togglePassword">Show Password</button>
            <div class="remember-forgot">
                <label><input type="checkbox" name="remember_me" 
                <?php if (isset($_COOKIE['username'])) echo 'checked'; ?>> Remember me</label>
                <a href="/AgriConnect/views/forgot-password.php">Forgot password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account? <a href="adminsignup.php">Register</a></p>
            </div>
        </form>
    </div>

    <?php if (!empty($error)) { ?>
    <script>
        alert("<?php echo htmlspecialchars($error); ?>");
    </script>
    <?php } ?>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>
