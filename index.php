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
    <!-- <link rel="stylesheet" href="styles.css"> -->
</head>
<body>
    <div class="top_navbar">
        <h1><a href="index.php">Home</a></h1>
        <h2><a href="signup.php">Signup</a></h2>
        <h2><a href="login.php">Login</a></h2>
        <h2><a href="logout.php">Logout</a></h2>

        <br>
        <?php
        output_username();
        ?>
        <hr>
    </div>

    <div class="class">
        <h1>SEND BULK MESSAGES</h1>
        <div class="messages_form">
        <h1>Send Message</h1>
        <form action="" method="POST">
            <div class="">
                <label for="phone">Phone Number</label>
                <div class="phone-input">
                    <input type="text" name="phone" id="phone" placeholder="eg.. +254712345678" required>
                </div>
                <br>
            </div>
            <div class="">
                <label for="message">Message</label>
                <textarea name="message" id="message" rows="5" placeholder="Type your message here..." required></textarea>
                <br>
            </div>
            <div class="">
                <br>
                <button type="submit">Send Message</button>
            </div>
        </form>
    </div>
        
    </div>
</body>
</html>