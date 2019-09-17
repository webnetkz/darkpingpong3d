<?php

    session_start();

    /*if(!empty($_SESSION['name'])) {
        header('Location: ../../profile.php');
    }*/

    // Errors on
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    // All variables
    $title = 'Авторизация';
    $path = '../';
    $content = '
    
        

    ';

    require_once '../tamplate.php';
    ?>
    <form action="../app/sign/signin.php" method="POST" class="signForm">
        <input type="text" name="nameLog" class="input" placeholder="Имя">
        <input type="password" name="passLog" class="input" placeholder="Пароль">
        <input type="submit" class="button" value="Войти">
    </form>