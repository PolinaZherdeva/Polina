// Проверяем ширину окна при загрузке страницы и изменении размера
window.addEventListener('DOMContentLoaded', function() {
    if (window.matchMedia("(max-width: 768px)").matches) {
        const items = document.querySelectorAll('.grid-item-hit');
        let currentIndex = 0;

        function hideAllItems() {
            items.forEach(item => {
                item.style.display = 'none';
            });
        }

        function showCurrentItem() {
            hideAllItems();
            items[currentIndex].style.display = 'block';
        }

        function nextItem() {
            currentIndex++;
            if (currentIndex >= items.length) {
                currentIndex = 0;
            }
            showCurrentItem();
        }

        function prevItem() {
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = items.length - 1;
            }
            showCurrentItem();
        }

        showCurrentItem();

        document.getElementById('nextBtn').addEventListener('click', nextItem);
        document.getElementById('prevBtn').addEventListener('click', prevItem);
    }
});

window.addEventListener('resize', function() {
    if (window.matchMedia("(max-width: 768px)").matches) {
        const items = document.querySelectorAll('.grid-item-hit');
        let currentIndex = 0;

        function hideAllItems() {
            items.forEach(item => {
                item.style.display = 'none';
            });
        }

        function showCurrentItem() {
            hideAllItems();
            items[currentIndex].style.display = 'block';
        }

        function nextItem() {
            currentIndex++;
            if (currentIndex >= items.length) {
                currentIndex = 0;
            }
            showCurrentItem();
        }

        function prevItem() {
            currentIndex--;
            if (currentIndex < 0) {
                currentIndex = items.length - 1;
            }
            showCurrentItem();
        }

        showCurrentItem();

        document.getElementById('nextBtn').addEventListener('click', nextItem);
        document.getElementById('prevBtn').addEventListener('click', prevItem);
    }
});

