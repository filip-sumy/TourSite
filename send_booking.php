<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Проверяем, переданы ли все данные
$requiredFields = ['email', 'name', 'date_birth', 'phone', 'city_from', 'comment', 'tour_name', 'tour_dates', 'tour_duration', 'contentDesktop'];

foreach ($requiredFields as $field) {
    if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
        die("Ошибка: отсутствует обязательное поле $field.");
    }
}

// Фильтрация данных
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$name = htmlspecialchars($_POST['name']);
$date_birth = htmlspecialchars($_POST['date_birth']);
$phone = htmlspecialchars($_POST['phone']);
$city_from = htmlspecialchars($_POST['city_from']);
$comment = htmlspecialchars($_POST['comment']);
$tour_name = htmlspecialchars($_POST['tour_name']);
$tour_dates = htmlspecialchars($_POST['tour_dates']);
$tour_duration = htmlspecialchars($_POST['tour_duration']);
$contentDesktop = htmlspecialchars($_POST['contentDesktop']);

$persons = [];
foreach ($_POST as $key => $value) {
    if (preg_match('/^(name|date_birth|phone|city_from)_(\d+)$/', $key, $matches)) {
        $field = $matches[1];
        $index = $matches[2];
        $persons[$index][$field] = htmlspecialchars($value);
    }
}

// Создание PHPMailer
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'your-email@gmail.com'; 
    $mail->Password   = 'your-app-password'; // Используй App Password, а не реальный пароль
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('your-email@gmail.com', 'Mailer');
    $mail->addAddress('your-email@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Подтверждение бронирования!';

    $body = "<h2>Детали бронирования</h2>";
    foreach ($persons as $index => $person) {
        $body .= "<h3>Персона {$index}</h3>";
        $body .= "<p>Имя: {$person['name']}</p>";
        $body .= "<p>Дата рождения: {$person['date_birth']}</p>";
        $body .= "<p>Телефон: {$person['phone']}</p>";
        $body .= "<p>Город отправления: {$person['city_from']}</p>";
    }
    $body .= "<p><strong>Комментарий:</strong> {$comment}</p>";
    $body .= "<hr><h3>Детали тура</h3>";
    $body .= "<p>Название тура: {$tour_name}</p>";
    $body .= "<p>Даты тура: {$tour_dates}</p>";
    $body .= "<p>Продолжительность: {$tour_duration}</p>";

    $mail->Body = $body;
    $mail->send();
    
    echo 'Сообщение успешно отправлено!';
} catch (Exception $e) {
    echo "Ошибка при отправке письма: {$mail->ErrorInfo}";
}

?>
