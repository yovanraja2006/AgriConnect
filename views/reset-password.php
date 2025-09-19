<?php
// Check if the token is provided in the URL
if (isset($_GET['token'])) {
    $token = htmlspecialchars($_GET['token']);
} else {
    die('Invalid request. Token not found.');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password AgriConnect</title>
    <link rel="stylesheet" href="/AgriConnect/public/styles/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="icon" href="/AgriConnect/public/img/img1.png">
</head>
<body>
    <div class="wrapper">
        <h1>Reset Password</h1>
        <form method="post" action="update-password.php" onsubmit="return validatePasswords();">
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            
            <div class="input-box">
                <i class='bx bx-lock'></i>
                <input type="password" id="new_password" name="new_password" placeholder="Password" required>
            </div>
            <div class="input-box">
                <i class='bx bx-lock'></i>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
            </div>
            <button type="button" class="show-password-btn" id="togglePassword">Show Password</button>

            <span id="error_message" style="color: red;"></span>

            <button type="submit" class="btn">Reset Password</button>
        </form>
    </div>

    <script>
        // Show Password Button functionality
        document.addEventListener('DOMContentLoaded', function() {
            var togglePasswordButton = document.querySelector('.show-password-btn');
            var passwordFields = document.querySelectorAll('input[type="password"]');

            togglePasswordButton.addEventListener('click', function() {
                var areAllPasswordsVisible = Array.from(passwordFields).every(field => field.type === 'text');

                passwordFields.forEach(function(passwordField) {
                    if (areAllPasswordsVisible) {
                        passwordField.type = 'password';
                        togglePasswordButton.textContent = 'Show Password';
                    } else {
                        passwordField.type = 'text';
                        togglePasswordButton.textContent = 'Hide Password';
                    }
                });
            });
        });

        // JavaScript function to validate passwords
        function validatePasswords() {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirm-password').value;
            var errorMessage = document.getElementById('error_message');

            if (password !== confirmPassword) {
                errorMessage.textContent = "Passwords do not match!";
                return false;
            }
            return true;
        }
    </script>
</body>
</html>