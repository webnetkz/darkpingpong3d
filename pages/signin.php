<?php

    // Файл отладки
    require_once '../app/config/debug.php';

    // Подключение БД
    require_once '../app/PDO/connect.php';

    // Отправка формы
    if(!empty($_POST['go'])) {
        
        // Блок ошибок
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
                $err = '<p class="visibleEr error" onclick="closeError();">Пользователь с таким именем не зарегистрирован</p>';
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
                        $err = '<p class="visibleEr error" onclick="closeError();">Не верный парль</p>';
                    }
                }else{
                    $err = '<p class="visibleEr error" onclick="closeError();">Введите пароль!</p>';
                }
            }

        }else{
            $err = '<p class="visibleEr error" onclick="closeError();>Введите имя!</p>';
        }
    }

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
        <input type="submit" class="button" value="Войти" name="go">
    </form>
    <a href="signup.php" class="link">Регистрация</a>