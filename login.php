<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Login to the User Page</h1>
    <form action="includes/login.inc.php" method="POST" id="login-form">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-input">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-input">
        </div>
        <button type="submit" class="form-button">Login</button>
    </form>
</body>
</html>
