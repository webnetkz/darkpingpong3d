<?php

    // Errors on
    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    session_start();

    // All variables
    $title = 'Start page';
    $path = '';
    $content = '

        <div id="indexContent">
            <div class="indexContent">
                <h1 class="indexH1">Заказать услугу. Снять в прокат, купить недвижимость или товар.</h1>

                <form action="#" class="indexForm">
                    <input type="text" class="indexInp indexInpOne" placeholder="место нахождения">
                    <input type="text" class="indexInp indexInpTwo" placeholder="поиск">

                    <input type="submit" type="submit" value="Найти" class="indexFormBtn">
                </form>
            </div>
        </div>

    ';

    require_once 'tamplate.php';


