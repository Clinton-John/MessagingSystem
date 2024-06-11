<?php

include 'includes/config_session.inc.php';
include 'includes/signup_view.inc.php';
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Signup to the user page</h1>
    <form action="includes/signup.inc.php" method="POST" id="signup-form">
        <div class="form-group">
            <label for="username">Username</label>
            <input required type="text" name="username" id="username" class="form-input">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="eg.. johndoe@gmail.com" id="email" class="form-input">
        </div>
        <label for="phone">Phone Number</label>
            <div class="phone-input">
                <input required type="text" name="phone" id="phone" class="form-input" placeholder="eg..+254712345678" required>
            </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input required type="password" name="password" id="password" class="form-input">
        </div>
        <button type="submit" class="form-button">Signup</button>

        <?php
                  check_signup_errors(); // the functions checks for the signup errors and displays them
                 ?>
    </form>
</body>
</html>
