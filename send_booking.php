<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$email = $_POST['email'];
$name = $_POST['name'];
$date_birth = $_POST['date_birth'];
$phone = $_POST['phone'];
$city_from = $_POST['city_from'];
$comment = $_POST['comment'];
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->Username   = 'homiewlker@gmail.com';                     //SMTP username
    $mail->Password   = 'cmii ygwh zjjy vfus';                               //SMTP password

    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('yaroslavkhodun@gmail.com', 'Mailer');
    $mail->addAddress('yaroslavkhodun@gmail.com', 'Joe User');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'You have a new tour booking!';
    $mail->Body    = '
        <h4>Почта : '.$email.'</h4>
        <h4>Имя : '.$name.'</h4>
        <h4>Дата рождения : '.$date_birth.'</h4>
        <h4>Телефон : '.$phone.'</h4>
        <h4>Город выезда : '.$city_from.'</h4>
        <h4>Комментарий : '.$comment.'</h4>
    ';

    $mail->send();
    echo 'Message has been sent';
}
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    echo 'Message has been sent';{

}

?>
?>