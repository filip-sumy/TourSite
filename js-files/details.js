document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById("menu");
    const body__container = document.getElementById("body__container");
    const main = document.getElementById("main");
    const menuButton = document.getElementById("menuButton");
    const menuIcon = document.getElementById("menuIcon");
    const footer = document.getElementById("footer");
    const header__container = document.getElementById("header__container");
    function toggleMenu() {
        menu.classList.toggle("hidden");
        main.classList.toggle("hidden");
        footer.classList.toggle("hidden");
        body__container.classList.toggle("hidden");
        header__container.classList.toggle("hidden");
        // Изменяем иконку и alt текст в зависимости от состояния меню
        if (menu.classList.contains("hidden")) {
            menuIcon.src = "../images/Menu_button.svg";
            menuIcon.alt = "Открыть меню";
        } else {
            menuIcon.src = "../images/Menu_button_back.svg";
            menuIcon.alt = "Закрыть меню";
        }
    }

    // Добавляем обработчик события на кнопку
    menuButton.addEventListener("click", toggleMenu);
});