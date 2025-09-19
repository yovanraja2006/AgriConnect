<?php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $confirm_pass = isset($_POST['confirm-password']) ? $_POST['confirm-password'] : '';

    // Check if email contains exactly one '@' symbol
    if (substr_count($email, '@') != 1) {
        $error = "Email must contain exactly one '@' symbol.";
    }
    // Check if password is at least 8 characters and alphanumeric
    elseif (strlen($pass) < 8 || !preg_match('/[A-Za-z]/', $pass) || !preg_match('/[0-9]/', $pass)) {
        $error = "Password must be at least 8 characters long and contain both letters and numbers.";
    } elseif ($pass !== $confirm_pass) {
        $error = "Passwords do not match.";
    } else {
        // Check if username or email already exists
        $sql = "SELECT * FROM adminid WHERE username='$user' OR email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $error = "Username or Email already exists.";
        } else {
            // Hash the password before storing it
            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);

            // Insert the new user into the database
            $sql = "INSERT INTO adminid (username, email, password) VALUES ('$user', '$email', '$hashed_pass')";

            if ($conn->query($sql) === TRUE) {
                header("Location: adminlogin.php"); // Redirect to login page
                exit();
            } else {
                $error = "Error: " . $conn->error;
            }
        }
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
    <title>Admin SignUp | AGRCT</title>
    <link rel="stylesheet" href="/AgriConnect/public/styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="icon" href="/AgriConnect/public/img/img1.png">
</head>
<body>
    <div class="wrapper">
        <form id="signup-form" action="adminsignup.php" method="POST">
            <h1>Admin SignUp | AGRCT</h1>
            <div class="input-box">
                <i class='bx bx-user'></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-box">
                <i class='bx bx-envelope'></i>
                <input type="text" name="email" placeholder="E-mail" required>
            </div>
            <div class="input-box">
                <i class='bx bx-lock'></i>
                <input type="password" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-box">
                <i class='bx bx-lock'></i>
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
            </div>
            <button type="button" class="show-password-btn" id="togglePassword">Show Password</button>
            <button type="submit" class="btn">Sign Up</button>
            <div class="register-link">
                <p>Already have an account? <a href="adminlogin.php">Login</a></p>
            </div>
        </form>
    </div>

    <?php if (!empty($error)) { ?>
    <script>
        // Display a simple JavaScript alert with the error message
        alert("<?php echo $error; ?>");
    </script>
    <?php } ?>

    <script src="/AgriConnect/public/script/start.js"></script>
</body>
</html>