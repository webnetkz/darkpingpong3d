<?php

    // Режим отображения ошибок
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $name = 'Login';

    session_start();

    if(!empty($_SESSION['name'])) {
        $name = $_SESSION['name'];
    }else{
        header('Location: pages/signin.php');
    }

    // Переменные
    $title = $name;
    $path = '';
    // Основной шаблон
    require_once 'tamplate.php';

?>

    <div class="headerProfile">
        <img src="public/img/icons/bigUser.svg" alt="user icon" class="imgUser">
        <p class="login">
            <?=$name?>
        </p>
        <a href="pages/exit.php" class="btn">Выйти</a>
    </div>

    <a href="pages/append.php" class="noStyle">
        <div class="appendProfile">
            <img src="public/img/icons/plus.svg" alt="plus icons" class="imgAppend">Добавить объявления
        </div>
    </a>
    