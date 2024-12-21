<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));

    if (!empty($name) && !empty($phone)) {
        $to = "filip-sumy@ukr.net"; // Замените на ваш email
        $subject = "Нове замовлення дзвінка";
        $message = "Ім'я: $name\nТелефон: $phone";
        $headers = "From: no-reply@yourdomain.com\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8";

        if (mail($to, $subject, $message, $headers)) {
            echo "Ваше повідомлення успішно відправлено!";
        } else {
            echo "Помилка при відправленні повідомлення.";
        }
    } else {
        echo "Будь ласка, заповніть усі поля.";
    }
} else {
    echo "Невірний метод запиту.";
}
?>
