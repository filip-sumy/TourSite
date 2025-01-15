<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require "PHPMailer/src/PHPMailer.php";
    require "PHPMailer/src/Exception.php";

    $mail = new PHPMailer(true);
    $mail->CharSet = "UTF-8";

    $name = $_POST["name"];
    
    $phone = $_POST["phone"];
    

    $body = $name . ' ' . $phone;
    $theme = "[Заявка с формы]";

    $mail->addAddress("filip-sumy@ukr.net");

    $mail->Subject = $theme;
    $mail->Body = $body;

    $mail->send();

