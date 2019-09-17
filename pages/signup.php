<?php

    // Errors on
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    // All variables
    $title = 'Регистрация';
    $path = '../';
    $content = '
    
        <form action="../app/sign/signup.php" method="POST" class="signForm">
            <input type="text" name="name" class="input" placeholder="Имя">
            <input type="password" name="pass" class="input" placeholder="Пароль">
            <input type="passowrd" name="pass2" class="input" placeholder="Повторите пароль">
            <input type="email" name="email" class="input" placeholder="Email">
            <input type="submit" name="sub" class="button">
        </form>

    ';

    require_once '../tamplate.php';
    ?>

