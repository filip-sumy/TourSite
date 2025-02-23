const addButton = document.getElementById("add__button");
const addContainer = document.getElementById("addContainer");

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

        // Создаем контейнер для нового пассажира
        const passengerContainer = document.createElement("div");
        passengerContainer.classList.add("passenger-container");

        // Заголовок "Персона X"
        const label = document.createElement("p");
        label.textContent = `Персона ${counter}`;
        label.classList.add("person__text");
        passengerContainer.appendChild(label);

        // Добавляем инпуты
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
            passengerContainer.appendChild(div);
        });

        // Добавляем контейнер пассажира в конец addContainer
        addContainer.appendChild(passengerContainer);
    });
}
