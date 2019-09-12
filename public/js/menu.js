// Отображение - скрытие меню
function handlerMenu() {
    var menu = document.querySelector('menu');
    var menuClass = menu.getAttribute('class');
    var closeMenu = document.querySelector('.closeMenu');

    switch(menuClass) {
        case 'hiddenMenu':
        menu.setAttribute('class', 'visibleMenu');
        closeMenu.setAttribute('style', 'left: 70%;');
        break;

        case 'visibleMenu':
        menu.setAttribute('class', 'hiddenMenu');
        closeMenu.setAttribute('style', 'left: 100%;');
        break;
    }
}
