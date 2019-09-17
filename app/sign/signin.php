<?php

    // Включение отображение ошибок
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    // Подключение БД
    require_once '../PDO/connect.php';

    // Подготовка переменных
    $name = trim($_POST['nameLog']);
    $pass = trim($_POST['passLog']);

    $name = htmlentities($name);
    $pass = htmlentities($pass);

    // Валидация логина
    if(!empty($name) {

        $sql = 'SELECT name FROM users WHERE name = "'.$name.'"';
            
        $result = $pdo->query($sql);
        $result = $result->fetch(PDO::FETCH_ASSOC);
        
        if(!empty($result)) {
            echo $result['name'];
        }
    }else{
        echo 'Zapolnite vse polya!';
    }