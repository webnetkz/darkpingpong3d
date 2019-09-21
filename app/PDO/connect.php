<?php

    $driver = 'mysql';
    $host = 'localhost';
    $db_name = 'boston';
    $db_user = 'boston';
    $db_pass = '123';
    $charset = 'utf8';
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try{
        $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset",
        $db_user, $db_pass, $options);
    }catch(PDOException $e) {
        die("echo $e");
    }

    
    $res = $pdo->query('SELECT * FROM users;');
    $res = $res->fetch(PDO::FETCH_ASSOC);
    
    var_dump($res);