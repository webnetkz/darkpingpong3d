<?php

    // Файл отладки
    require_once '../app/config/debug.php';

    // Подключение БД
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

                // Проверка почтового адреса
                if(!empty($_POST['email'])) {
                    $email = trim($_POST['email']);
                    $email = htmlentities($email);

                    // Проверка на существование почтового адреса
                    $sqlMail = 'SELECT * FROM users WHERE email = "'. $email .'"';
                    $resMail = $pdo->query($sqlMail);
                    $resMail = $resMail->fetch(PDO::FETCH_ASSOC);

                    if($resMail['email'] !== $email) {

                        // Проверка пароля
                        if(!empty($_POST['pass'])) {
                            $pass = trim($_POST['pass']);
                            $pass = htmlentities($pass);
                        }else{
                            $err = 'Введите пароль!';
                        }
                        
                        // Проверка повторного пароля
                        if($_POST['pass2'] && $_POST['pass2'] == $_POST['pass']) {
                            $pass2 = trim($_POST['pass2']);
                            $pass = password_hash($pass, PASSWORD_DEFAULT);

                            // Регистрация
                            $sqlReg = 'INSERT INTO users(`name`, `pass`, `email`) VALUES("'.$name.'", "'.$pass.'", "'.$email.'");';
                            $resReg = $pdo->query($sqlReg);
                    
                            // Редирект при успешной регистрации
                            if(!empty($resReg)) {
                    
                                $_SESSION['name'] = $name;
                                
                                header('Location: ../profile.php');
                            }
                        }else{
                            $err = 'Повторный пароль введен не верно!';
                        }
                    }else{
                        $err = 'Пользователь с таким почтовым адресом существует';
                    }
                }else{
                    $err = 'Введите почтовый адрес!';
                }
            }else{
                $err = 'Пользователь с таким именем существует';
            }

        }else{
            $err = 'Введите имя!';
        }
    }

        // Переменные
        if(empty($name)) {
            $name = '';
        }
        if(empty($email)) {
            $email = '';
        }

    // Проверка существование ошибок
    if(!empty($err)) {
        echo $err;
    }

    $title = 'Регистрация';
    $path = '../';
    $content = '
    

    ';

    require_once '../tamplate.php';
    
    ?>
    <form action="signup.php" method="POST" class="signForm">
        <input type="text" name="name" class="input" placeholder="Имя" value="<?=$name?>">
        <input type="password" name="pass" class="input" placeholder="Пароль">
        <input type="password" name="pass2" class="input" placeholder="Повторите пароль">
        <input type="email" name="email" class="input" placeholder="Email" value="<?=$email?>">
        <input type="submit" name="sub" class="button" value="Регистрация">
    </form>

