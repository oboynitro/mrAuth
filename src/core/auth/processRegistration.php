<?php

namespace Oboynitro\MrAuth\Core\Auth;
use Oboynitro\MrAuth\Core\DB;

session_start();

if (isset($_POST['submit']))
{
    $db = DB::connect();
    $fullname = htmlentities(htmlspecialchars(trim($_POST['fullname'])));
    $username = htmlentities(htmlspecialchars(trim($_POST['username'])));
    $email = htmlentities(htmlspecialchars(trim($_POST['email'])));
    $password = htmlentities(htmlspecialchars(trim($_POST['password'])));

    if (empty($fullname) || empty($username) || empty($email) || empty($password))
    {
        $_SESSION['error'] = 'All fields are required, please make sure there are no empty fields.';
        header('Location: ../../register.php');
        exit();
    }

    $preQuery = /** @lang text */
        'SELECT * FROM users WHERE username=:uname OR email=:email';
    $preStmt = $db->prepare($preQuery);
    $preStmt->bindParam(':uname', $username);
    $preStmt->bindParam(':email', $email);
    $preStmt->execute();
    $res = $preStmt->fetchAll();
    if (!empty($res))
    {
        $_SESSION['register']['error'] = 'Sorry username or email already exist';
        header('Location: ../../register.php');
        $db = null;
        exit();
    }


    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $query = /** @lang text */
        'INSERT INTO users (username, password, email, fullname) VALUES (:uname,:pass,:email,:fullname)';
    $stmt = $db->prepare($query);
    $stmt->bindParam(':uname', $username);
    $stmt->bindParam(':pass', $hashed_password);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':fullname', $fullname);
    if (!$stmt->execute())
    {
        $_SESSION['register']['error'] = 'Failed creating the account, please check the form and try again.';
        header('Location: ../../register.php');
        exit();
    }

    $_SESSION['login']['success'] = 'Successfully created the account, please login.';
    header('Location: ../../login.php');
}