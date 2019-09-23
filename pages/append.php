<?php

    // Режим отображения ошибок
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    session_start();

    if(empty($_SESSION['name'])) {
        header('Location: pages/sign.php');
    }

    // Переменные
    $title = 'Добавить';
    $path = '../';
    $content = '



    ';

    require_once '../tamplate.php';