<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Получаем данные из POST-запроса
$email = $_POST['email'] ?? '';
$name = $_POST['name'] ?? '';
$date_birth = $_POST['date_birth'] ?? '';
$phone = $_POST['phone'] ?? '';
$city_from = $_POST['city_from'] ?? '';
$comment = $_POST['comment'] ?? '';

// Получаем информацию о туре
$tour_name = $_POST['tour_name'] ?? '';
$tour_dates = $_POST['tour_dates'] ?? '';
$tour_duration = $_POST['tour_duration'] ?? '';

// Собираем данные из динамически добавленных полей
$passengers = [];
foreach ($_POST as $key => $value) {
    if (preg_match('/(name|date_birth|phone|city_from)_(\d+)/', $key, $matches)) {
        $field = $matches[1]; // name, date_birth, phone, city_from
        $index = $matches[2]; // номер пассажира

        if (!isset($passengers[$index])) {
            $passengers[$index] = [];
        }
        $passengers[$index][$field] = $value;
    }
}

// Формируем блок с дополнительными пассажирами
$additionalPassengers = "";
foreach ($passengers as $index => $data) {
    $additionalPassengers .= "<h3>Пассажир " . ($index - 1) . "</h3>"; // Нумерация пассажиров начинается с 1
    $additionalPassengers .= "<h4>Имя: " . ($data['name'] ?? 'Не указано') . "</h4>";
    $additionalPassengers .= "<h4>Дата рождения: " . ($data['date_birth'] ?? 'Не указано') . "</h4>";
    $additionalPassengers .= "<h4>Телефон: " . ($data['phone'] ?? 'Не указано') . "</h4>";
    $additionalPassengers .= "<h4>Город выезда: " . ($data['city_from'] ?? 'Не указано') . "</h4>";
    $additionalPassengers .= "<hr>";
}

mb_internal_encoding("UTF-8");

// Создаём объект PHPMailer
$mail = new PHPMailer(true);

try {
    // Настройки сервера SMTP
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host       = 'smtp.gmail.com';
    $mail->Username   = 'homiewlker@gmail.com';
    $mail->Password   = 'cmii ygwh zjjy vfus';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Получатель
    $mail->setFrom('yaroslavkhodun@gmail.com', 'Mailer');
    $mail->addAddress('yaroslavkhodun@gmail.com', 'Joe User');

    // Контент письма
    $mail->isHTML(true);
    $mail->Subject = 'You have a new tour booking!';
    $mail->Body    = "
    <h4>Выбранный тур:</h4>
    <h4>Название тура: $tour_name</h4>
    <h4>Даты тура: $tour_dates</h4>
    <h4>Продолжительность: $tour_duration</h4>
    <hr>
    <h3>Данные клиента</h3>
    <h4>Email: $email</h4>
    <h4>Имя: $name</h4>
    <h4>Дата рождения: $date_birth</h4>
    <h4>Телефон: $phone</h4>
    <h4>Город выезда: $city_from</h4>
    <h4>Комментарий: $comment</h4>
    <hr>
    <h3>Дополнительные пассажиры:</h3>
    $additionalPassengers
    ";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Ошибка при отправке: {$mail->ErrorInfo}";
}
?>
