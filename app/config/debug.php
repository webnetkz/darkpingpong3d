<?php

    // Старт сессии
    session_start();

    if(!empty($_SESSION['name'])) {
        header('Location: ../profile.php');
    }  

    // Включение режима ошибок
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    function de($var) {
        echo '<pre>';
        var_dump($var);
    }