<?php

namespace Oboynitro\MrAuth\Core\Auth;

session_start();

if (isset($_POST['submit']))
{
    $fullname = htmlentities(htmlspecialchars(trim($_POST['fullname'])));
    $username = htmlentities(htmlspecialchars(trim($_POST['username'])));
    $email = htmlentities(htmlspecialchars(trim($_POST['email'])));
    $password = htmlentities(htmlspecialchars(trim($_POST['password'])));
}