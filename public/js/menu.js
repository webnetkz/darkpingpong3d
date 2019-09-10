// Отображение - скрытие меню
function handlerMenu() {
    var menu = document.querySelector('menu');
    var menuClass = menu.getAttribute('class');

    switch(menuClass) {
        case 'hidden':
        menu.setAttribute('class', 'visible');
        break;

        case 'visible':
        menu.setAttribute('class', 'hidden');
        break;
    }
}
