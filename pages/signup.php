<?php

    // Errors on
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    // All variables
    $title = 'Регистрация';
    $path = '../';
    $content = '
    
        <form action="../app/sign/signup.php" method="POST">
            <input type="text" name="name">
            <input type="password" name="pass">
            <input type="passowrd" name="pass2">
            <input type="email" name="email">
            <input type="submit" name="sub">
        </form>

    ';

    require_once '../tamplate.php';
    ?>

