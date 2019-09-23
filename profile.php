<?php

    // Errors on
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $name = 'Login';

    session_start();

    if(!empty($_SESSION['name'])) {
        $name = $_SESSION['name'];
    }else{
        header('Location: pages/sign.php');
    }

    // Переменные
    $title = $name;
    $path = '';
    $content = '



    '.$name;

    require_once 'tamplate.php';