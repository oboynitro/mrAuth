<?php
session_start();
?>

<html lang="en-us">
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="login_wrapper">
    <?php if (isset($_SESSION['error'])): ?>
        <h3 class="error"><?php echo($_SESSION['error']); ?></h3>
    <?php endif; ?>
    <h1>Please Login here!</h1>
    <form action="core/auth/processLogin.php" method="POST">
        <label>
            <b>Username</b>
        </label>
        <br><br>
        <input id="username" name="username" placeholder="Enter username" type="text">
        <br>
        <label>
            <b>Password</b>
        </label>
        <br><br>
        <input type="password" id="password" name="password" placeholder="Enter password" />
        <br>
        <button class="btn" name="submit" type="submit">Login</button>
        <hr>
        <h5>Don't have an account?, Register <a href="register.php">Here</a></h5>
    </form>
</div>
</body>
</html>
