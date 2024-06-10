<?php
  require_once 'includes/config_session.inc.php';
require_once 'includes/login_view.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Server messaging system</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="top_navbar">
        <h1><a href="#">Home</a></h1>

        <h2><a href="signup.php">Signup</a></h2>
        <h2><a href="login.php">Login</a></h2>
        <h2><a href="logout.php">Logout</a></h2>

        <br>
        <?php
        output_username();
        ?>
    </div>
</body>
</html>