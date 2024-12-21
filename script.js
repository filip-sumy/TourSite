document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById("menu");
    
    //const ourTours = document.getElementById("block__text");

    //const slider = document.getElementById("slider");

    //const scroll = document.getElementById("scroll");

    const main = document.getElementById("main");

    function toggleMenu(button) {
        menu.classList.toggle("hidden");

        //ourTours.classList.toggle("hidden");

        //slider.classList.toggle("hidden");

        //scroll.classList.toggle("hidden");

        main.classList.toggle("hidden");
        // Создаём новую кнопку с изображением
        const newButton = document.createElement("button");
        newButton.id = "menuButton";
        newButton.className = "menu-btn";

        const icon = document.createElement("img");
        icon.id = "menuIcon";
        icon.src = menu.classList.contains("hidden") ? "images/Menu_button.svg" : "images/Menu_button_back.svg";
        icon.alt = menu.classList.contains("hidden") ? "Открыть меню" : "Закрыть меню";

        newButton.appendChild(icon);

        // Заменяем старую кнопку
        button.replaceWith(newButton);

        // Назначаем обработчик на новую кнопку
        newButton.addEventListener("click", () => toggleMenu(newButton));
    }

    // Назначаем обработчик на первую кнопку
    const initialButton = document.getElementById("menuButton");
    initialButton.addEventListener("click", () => toggleMenu(initialButton));
});
