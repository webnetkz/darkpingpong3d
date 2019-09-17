<?php

    // Errors on
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    // All variables
    $title = 'Регистрация/Авторизация';
    $path = '../';
    $content = '
    
        <a href="signin.php" class="OneBtn">Авторизация</a>
        <a href="signup.php" class="OneBtn">Регистрация</a>

    ';

    require_once '../tamplate.php';
