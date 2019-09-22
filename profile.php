<?php

    // Errors on
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    session_start();

    if(!empty($_SESSION['name'])) {
        $name = $_SESSION['name'];
    }else{
        $name = 'Login';
    }

    // All variables
    $title = 'Login';
    $path = '';
    $content = '



    '.$name;

    require_once 'tamplate.php';