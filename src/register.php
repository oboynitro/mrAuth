<?php
session_start();
?>

<html lang="en-us">
<head>
    <title>Sign UP</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="login_wrapper">
    <?php if (isset($_SESSION['error'])): ?>
        <h3 class="error"><?php echo($_SESSION['error']); ?></h3>
    <?php endif; ?>
    <h1>Create a new Account</h1>
    <form action="core/auth/processRegistration.php" method="POST">
        <label>
            <b>Fullname</b>
        </label>
        <br><br>
        <input id="username" name="fullname" placeholder="Enter fullname" type="text" required min="5">
        <br>
        <label>
            <b>Username</b>
        </label>
        <br><br>
        <input id="username" name="username" placeholder="Enter username" type="text" required min="2">
        <br>
        <label>
            <b>Email</b>
        </label>
        <br><br>
        <input id="username" name="email" placeholder="Enter email" type="email" required>
        <br>
        <label>
            <b>Password</b>
        </label>
        <br><br>
        <input type="password" id="password" name="password" placeholder="Enter password" required min="8">
        <br>
        <button class="btn" name="submit" type="submit">Register</button>
        <hr>
        <h5>Already have an account?, Login <a href="login.php">Here</a></h5>
    </form>
</div>
</body>
</html>
