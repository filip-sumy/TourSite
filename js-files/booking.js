document.addEventListener("DOMContentLoaded", () => {
    const menu = document.getElementById("menu");
    const body__container = document.getElementById("body__container");
    const main = document.getElementById("main");
    const menuButton = document.getElementById("menuButton");
    const menuIcon = document.getElementById("menuIcon");
    const footer = document.getElementById("footer");
    const header__container = document.getElementById("header__container");
    const addButton = document.getElementById("add__button");
    const acceptButton = document.getElementById("acceptButton");
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
    let counter = 1;
    function addPerson() {
        counter++;
        const addContainer = document.getElementById("addContainer");
        // Создаем подпись
        const label = document.createElement('p');
        label.textContent = `Персона ${counter}`;
        label.classList.add('person__text');
        addContainer.appendChild(label);

        //Создаем div
        const fieldsContainerName = document.createElement('div');
        fieldsContainerName.classList.add('block__person');

        //Создаем input
        const inputFieldName = document.createElement('input');
        inputFieldName.classList.add("input");
        inputFieldName.type = 'text';
        inputFieldName.placeholder = "Введіть ваше ім'я та прізвище";
        inputFieldName.required = true;

        //Создаем иконку
        const iconName = document.createElement('img');
        iconName.classList.add("icon");
        iconName.src = '../images/name-icon.svg';

        fieldsContainerName.appendChild(iconName);
        fieldsContainerName.appendChild(inputFieldName);
        addContainer.appendChild(fieldsContainerName);

        //Date
        //Создаем div
        const fieldsContainerDate = document.createElement('div');
        fieldsContainerDate.classList.add('block__person');

        //Создаем input
        const inputFieldDate = document.createElement('input');
        inputFieldDate.classList.add("input");
        inputFieldDate.type = 'text';
        inputFieldDate.placeholder = "Введіть вашу дату народження";
        inputFieldDate.required = true;

        //Создаем иконку
        const iconDate = document.createElement('img');
        iconDate.classList.add("icon");
        iconDate.src = '../images/date-icon.svg';

        fieldsContainerDate.appendChild(iconDate);
        fieldsContainerDate.appendChild(inputFieldDate);
        addContainer.appendChild(fieldsContainerDate);

        //Telephone
        //Создаем div
        const fieldsContainerTel = document.createElement('div');
        fieldsContainerTel.classList.add('block__person');

        //Создаем input
        const inputFieldTel = document.createElement('input');
        inputFieldTel.classList.add("input");
        inputFieldTel.type = 'text';
        inputFieldTel.placeholder = "Введіть ваш номер телефону";
        inputFieldTel.required = true;

        //Создаем иконку
        const iconTel = document.createElement('img');
        iconTel.classList.add("icon");
        iconTel.src = '../images/tel-icon.svg';

        fieldsContainerTel.appendChild(iconTel);
        fieldsContainerTel.appendChild(inputFieldTel);
        addContainer.appendChild(fieldsContainerTel);

        //City 
        //Telephone
        //Создаем div
        const fieldsContainerCity = document.createElement('div');
        fieldsContainerCity.classList.add('block__person');

        //Создаем input
        const inputFieldCity = document.createElement('input');
        inputFieldCity.classList.add("input");
        inputFieldCity.type = 'text';
        inputFieldCity.placeholder = "Місце від'їзду";
        inputFieldCity.required = true;

        //Создаем иконку
        const iconCity = document.createElement('img');
        iconCity.classList.add("icon");
        iconCity.src = '../images/cityfrom-icon.svg';

        fieldsContainerCity.appendChild(iconCity);
        fieldsContainerCity.appendChild(inputFieldCity);
        addContainer.appendChild(fieldsContainerCity);

    }
    function sendEmail() {
        let contentDesktop = document.getElementById("contentDesktop").innerHTML;

        fetch("send_mail.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: "contentDesktop=" + encodeURIComponent(contentDesktop)
        })
        .then(response => response.text())
        .then(data => alert(data))
        .catch(error => console.error("Ошибка:", error));
    }
    // Добавляем обработчик события на кнопку
    menuButton.addEventListener("click", toggleMenu);
    addButton.addEventListener("click", addPerson);
    acceptButton.addEventListener("click", sendEmail);
});
