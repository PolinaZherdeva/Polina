document.addEventListener('DOMContentLoaded', function() {
    const tabs = document.querySelectorAll('.tab');
    const tabNavigationItems = document.querySelectorAll('.tabs-navigation__item');

    // По умолчанию показываем текст класса tab-shop и скрываем остальные
    tabs.forEach(function(tab) {
        if (tab.classList.contains('tab-shop')) {
        tab.style.display = 'block';
        } else {
        tab.style.display = 'none';
        }
    });

    tabNavigationItems.forEach(function(item) {
        item.addEventListener('click', function() {
        const tabToShow = this.getAttribute('show-tab');

        // Скрываем все тексты, кроме текста, соответствующего выбранному пункту меню
        tabs.forEach(function(tab) {
            if (tab.classList.contains(tabToShow)) {
            tab.style.display = 'block';
            } else {
            tab.style.display = 'none';
            }
        });

        // Удаляем класс 'tabs-navigation__item--active' у всех элементов в коллекции tabNavigationItems
        tabNavigationItems.forEach(function(item) {
            item.classList.remove('tabs-navigation__item--active');
        });

        // Добавляем класс 'tabs-navigation__item--active' к текущему выбранному элементу
        this.classList.add('tabs-navigation__item--active');
        });
    });
});
