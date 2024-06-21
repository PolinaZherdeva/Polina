document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("header").classList.remove("open");

    document.querySelector(".menu_item .submenu").classList.remove("open");

    document.querySelector(".submenu_item .sub-submenu").classList.remove("open");

    document.querySelector(".sub-submenu_item .sub-submenu2").classList.remove("open");


    document.getElementById("burger").addEventListener("click", function() {
        document.querySelector("header").classList.toggle("open")
    })

    document.getElementById("submenu").addEventListener("click", function(e) {
        e.preventDefault(); // Предотвращаем переход по ссылке

        let submenu = document.querySelector(".menu_item .submenu");
        submenu.classList.toggle("open");
    });

    document.getElementById("sub-submenu").addEventListener("click", function(e) {
        e.preventDefault(); // Предотвращаем переход по ссылке

        let submenu = document.querySelector(".submenu_item .sub-submenu");
        submenu.classList.toggle("open");
    });

    document.getElementById("sub-submenu2").addEventListener("click", function(e) {
        e.preventDefault(); // Предотвращаем переход по ссылке

        let submenu = document.querySelector(".sub-submenu_item .sub-submenu2");
        submenu.classList.toggle("open");
    });


});


