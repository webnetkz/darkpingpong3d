<?php

    // Errors on
            ini_set('error_reporting', E_ALL);
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);

        require_once '../PDO/connect.php';

        $name = trim($_POST['nameLog']);
        $pass = trim($_POST['passLog']);

        if(!empty($name) && !empty($pass)) {
            echo $name;
        }else{
            echo 'Zapolnite vse polya!';
        }