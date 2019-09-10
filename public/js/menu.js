// Отображение - скрытие меню
function handlerMenu() {
    var menu = document.querySelector('menu');
    var menuClass = menu.getAttribute('class');

    switch(menuClass) {
        case 'hiddenMenu':
        menu.setAttribute('class', 'visibleMenu');
        break;

        case 'visibleMenu':
        menu.setAttribute('class', 'hiddenMenu');
        break;
    }
}
