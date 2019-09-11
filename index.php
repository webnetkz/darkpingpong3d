<?php

?>
<!-- HTML Content -->
<html>
    <head>
        <!-- HTML Metas -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Start page</title>
        <!-- CSS styles -->
        <link rel="stylesheet" href="public/css/indexStyles.css">
        <link rel="stylesheet" href="public/css/mobileIndexStyles.css">
        <link rel="shortcut icon" href="public/img/mini_logo.png" type="image/png">
    </head>
    <body>

        <menu class="hiddenMenu">
            <div class="menuContent">
                <br><br>
                    <a href="#" class="sign">Авторизация / Регистрация</a>
                <br><br><br><br><br>
                <p class="categories">КАТЕГОРИИ</p>
                <ul>
                    <li></li>
                </ul>
            </div>
            <div class="closeMenu" onclick="handlerMenu();">
                <img src="public/img/icons/close.svg" alt="close icon" class="closeIcon">
            </div>
        </menu>

        <header>
            <!-- Header block -->
            <div id="headerBlock">
                <img src="public/img/icons/menu.svg" onclick="handlerMenu();" id="menuBtn" alt="menu bar" class="menuIcon">

                <img src="public/img/icons/cart.svg" alt="market cart" class="searchIcon">
                <img src="public/img/icons/search.svg" alt="search glass" class="searchIcon">
            </div>
            <!-- Index content -->
            <div id="indexContent">
                <div class="indexContent">
                    <h1 class="indexH1">Арендовать подходящее оборудование и инструменты. Прямо сейчас.</h1>

                    <form action="#" class="indexForm">
                        <input type="text" class="indexInp indexInpOne" placeholder="место нахождения">
                        <input type="text" class="indexInp indexInpTwo" placeholder="поиск аренды">

                        <input type="submit" type="submit" value="Поиск" class="indexFormBtn">
                    </form>
                </div>
            </div>
        </header>
        <!-- JS scripts -->
        <script src="public/js/menu.js"></script>
    </body>
</html>