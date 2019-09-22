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

    require_once '../app/PDO/connect.php';

    // Если кнопка отправить нажата
    if(!empty($_POST['sub'])) {
        
        $err = [];

        // Проверка имени
        if(!empty($_POST['name'])) {
            $name = trim($_POST['name']);
            $name = htmlentities($name);

            // Проверка на существование логина
            $sql = 'SELECT * FROM users WHERE name = "'. $name .'"';
            $res = $pdo->query($sql);
            $res = $res->fetch(PDO::FETCH_ASSOC);
            
            if($res['name'] !== $name) {
                $err = 'Пользователь с таким именем не зарегистрирован';
            }else{

                // Проверка пароля
                if(!empty($_POST['pass'])) {
                    $pass = trim($_POST['pass']);
                    $pass = htmlentities($pass);

                    $sqlLog = 'SELECT `pass` FROM users WHERE name = "'. $name .'"';
                    $resLog = $pdo->query($sqlLog);

                    $resLog = $resLog->fetch(PDO::FETCH_ASSOC);
                    
                    if(password_verify($pass, $resLog['pass'])) {

                        $_SESSION['name'] = $name;
                        header('Location: ../profile.php');
                    }else{
                        $err = 'Не верный парль';
                    }
                }else{
                    $err = 'Введите пароль!';
                }
            }

        }else{
            $err = 'Введите имя!';
        }
    }

        // Переменные
        if(empty($name)) {
            $name = '';
        }

    // Проверка существование ошибок
    if(!empty($err)) {
        echo $err;
    }

    // Переменные
    $title = 'Авторизация';
    $path = '../';
    $content = '
    
        

    ';

    require_once '../tamplate.php';
    ?>
    <form action="signin.php" method="POST" class="signForm">
        <input type="text" name="name" class="input" placeholder="Имя" value="<?=$name?>">
        <input type="password" name="pass" class="input" placeholder="Пароль">
        <input type="submit" class="button" value="Войти" value="Войти" name="sub">
    </form>