<?php

    // Errors on
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    include_once '../app/PDO/connect.php';

    // Если кнопка отправить нажата
    if(!empty($_POST['sub'])) {
        
        $err = [];

        // Проверка имени
        if($_POST['name']) {
            $name = trim($_POST['name']);
            $name = htmlentities($name);

            $sql = 'SELECT * FROM users WHERE name = "'. $name .'"';

        }else{
            $err = 'Введите имя!';
        }
        
        // Проверка пароля
        if($_POST['pass']) {
            $pass = trim($_POST['pass']);
            $pass = htmlentities($pass);
        }else{
            $err = 'Введите пароль!';
        }
        
        // Проверка повторного пароля
        if($_POST['pass2'] && $_POST['pass2'] == $_POST['pass']) {
            $pass2 = trim($_POST['pass2']);
            $pass = password_hash($pass, PASSWORD_DEFAULT);
        }else{
            $err = 'Повторный пароль введен не верно!';
        }
        
        // Проверка почтового адреса
        if($_POST['email']) {
            $email = trim($_POST['email']);
            $email = htmlentities($email);
        }else{
            $err = 'Введите почтовый адрес!';
        }

        /*



        //$sql = 'INSERT INTO users(`name`, `password`, `email`) VALUES("'.$name.'", "'.$pass.'", "'.$email.'");';
        //$stmt = $pdo->query($sql);

        if(!empty($stmt)) {

            session_start();
            $_SESSION['name'] = $name;
            
            header('Location: ../../profile.php');
        }
        */
    }else{
        $err = 'Zapolnite vse polya!';
    }

    if($err) {
        echo $err;
    }

    //Session block
    session_start();

    /*if(!empty($_SESSION['name'])) {
        header('Location: ../../profile.php');
    }*/   


    // All variables
    $title = 'Регистрация';
    $path = '../';
    $content = '
    
        <form action="signup.php" method="POST" class="signForm">
            <input type="text" name="name" class="input" placeholder="Имя" value="'. $name .'">
            <input type="password" name="pass" class="input" placeholder="Пароль">
            <input type="password" name="pass2" class="input" placeholder="Повторите пароль">
            <input type="email" name="email" class="input" placeholder="Email" value="'. $email .'">
            <input type="submit" name="sub" class="button">
        </form>

    ';

    require_once '../tamplate.php';
    ?>

