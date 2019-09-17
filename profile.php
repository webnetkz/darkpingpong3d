<?php

    // Errors on
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    session_start();

    // All variables
    $title = 'Login';
    $path = '';
    $content = '



    '.$_SESSION['name'];

    require_once 'tamplate.php';