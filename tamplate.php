    <!-- HTML Content -->
    <html>
        <head>
            <!-- HTML Metas -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <title><?=$title?></title>
            <!-- CSS styles -->
            <link rel="stylesheet" href="<?=$path?>public/css/indexStyles.css">
            <link rel="stylesheet" href="<?=$path?>public/css/mobileIndexStyles.css">
            <link rel="shortcut icon" href="<?=$path?>public/img/mini_logo.png" type="image/png">
            <!-- Description meta -->
    
        </head>
        <body>
        <!-- Append blocks -->
        <menu class="hiddenMenu">
            <!-- Menu block -->
            <div class="menuContent">
                <br>
                    <a href="<?=$path?>/index.php" class="homePage">Главная</a>
                    <a href="<?=$path?>pages/sign.php" class="sign">Авторизация / Регистрация</a>
                <p class="categories">КАТЕГОРИИ</p>
                <ul>
                    <a href="pages/hire.php">
                        <li class="menuItem">Прокат</li>
                    </a>
                    <a href="pages/services.php">
                        <li class="menuItem">Услуги</li>
                    </a>
                    <a href="pages/goods.php">
                        <li class="menuItem">Товары</li>
                    </a>
                </ul>
            </div>
            <div class="closeMenu" onclick="handlerMenu();">
                <img src="<?=$path?>public/img/icons/close.svg" alt="close icon" class="closeIcon">
            </div>
        </menu>
        <form action="index.php" method="GET" class="hiddenSearch" id="searchForm">
            <!-- Search form -->
            <p class="closeSearch" onclick="handlerSearch();">Закрыть</p>
            <input type="text" class="searchInp" placeholder="место нахождения">
            <input type="text" class="searchInp" placeholder="поиск">
        </form>

        <header>
            <!-- Header block -->
            <div id="headerBlock">
                <img src="<?=$path?>public/img/icons/menu.svg" onclick="handlerMenu();" id="menuBtn" alt="menu bar" class="menuIcon">

                <a href="<?=$path?>profile.php">
                    <img src="<?=$path?>public/img/icons/user.svg" id="searchBtn" alt="market cart" class="searchIcon">
                </a>
                <img src="<?=$path?>public/img/icons/search.svg" onclick="handlerSearch();" alt="search glass" class="searchIcon">
            </div>
            <!-- All content -->
            <?=$content?>

        </header>
        <!-- JS scripts -->
        <script src="<?=$path?>public/js/menu.js"></script>
        <script src="<?=$path?>public/js/search.js"></script>
    </body>
</html>