document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById("menu");
    const bodyContainer = document.getElementById("body__container");
    const main = document.getElementById("main");
    const menuButton = document.getElementById("menuButton");
    const menuIcon = document.getElementById("menuIcon");
    const footer = document.getElementById("footer");
    const headerContainer = document.getElementById("header__container");
    const addButton = document.getElementById("add__button");
    const addContainer = document.getElementById("addContainer");
    const acceptButton = document.getElementById("acceptButton");

    if (menuButton && menuIcon) {
        menuButton.addEventListener("click", () => {
            const isHidden = menu.classList.toggle("hidden");
            main?.classList.toggle("hidden");
            footer?.classList.toggle("hidden");
            bodyContainer?.classList.toggle("hidden");
            headerContainer?.classList.toggle("hidden");

            menuIcon.src = isHidden ? "../images/Menu_button.svg" : "../images/Menu_button_back.svg";
            menuIcon.alt = isHidden ? "Открыть меню" : "Закрыть меню";
        });
    }

    let counter = 1;
    if (addButton && addContainer) {
        addButton.addEventListener("click", (event) => {
            event.preventDefault();
            counter++;

            const fields = [
                { name: "name", placeholder: "Введіть ваше ім'я та прізвище", icon: "../images/name-icon.svg" },
                { name: "date_birth", placeholder: "Введіть вашу дату народження", icon: "../images/date-icon.svg" },
                { name: "phone", placeholder: "Введіть ваш номер телефону", icon: "../images/tel-icon.svg" },
                { name: "city_from", placeholder: "Місце від'їзду", icon: "../images/cityfrom-icon.svg" }
            ];

            const label = document.createElement("p");
            label.textContent = `Персона ${counter}`;
            label.classList.add("person__text");
            addContainer.appendChild(label);

            fields.forEach(field => {
                const div = document.createElement("div");
                div.classList.add("block__person");

                const img = document.createElement("img");
                img.classList.add("icon");
                img.src = field.icon;

                const input = document.createElement("input");
                input.classList.add("input");
                input.type = "text";
                input.name = `${field.name}_${counter}`;
                input.placeholder = field.placeholder;
                input.required = true;

                div.appendChild(img);
                div.appendChild(input);
                addContainer.appendChild(div);
            });
        });
    }

    if (acceptButton) {
        acceptButton.addEventListener("click", () => {
            const contentDesktop = document.getElementById("contentDesktop");

            fetch("../send_booking.php", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "contentDesktop=" + encodeURIComponent(contentDesktop)
            })
            .then(response => response.text())
            .then(data => alert(data))
            .catch(error => console.error("Ошибка:", error));
        });
    }
});
