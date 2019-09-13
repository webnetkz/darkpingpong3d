// Отображение - скрытие поиска
function handlerSearch() {
    var Search = document.querySelector('#searchForm');
    var SearchClass = Search.getAttribute('class');

    switch(SearchClass) {
        case 'hiddenSearch':
        Search.setAttribute('class', 'visibleSearch');
        break;

        case 'visibleSearch':
        Search.setAttribute('class', 'hiddenSearch');
        break;
    }
}
