<?php

session_start();

if (!isset($_SESSION['id']))
{
    session_unset();
    session_destroy();
    header('Location: login.php');
}
?>

<html>
<head>
    <title>Welcome</title>
</head>
<body>
<form action="core/auth/processLogout.php" method="POST">
    <button type="submit" name="logout" id="logout">logout</button>
</form>
<hr>
<h1>Welcome, <?php if (isset($_SESSION['fullname'])): echo(' '.$_SESSION['fullname']); endif; ?></h1>
<h2>Your Username is, <?php if (isset($_SESSION['username'])): echo( ' '.$_SESSION['username']); endif; ?></h2>
<h4>Your Session ID is, <?php if (isset($_SESSION['id'])): echo(' '.$_SESSION['id']); endif; ?></h4>

</body>
</html>



