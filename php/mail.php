<?php

use PHPMailer\PHPMailer\PHPMailer;

date_default_timezone_set('Etc/UTC');

$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'smtp.gmail.com'
$mail->Port = 465;  
$mail->SMTPAuth = true;

//email username
$mail->Username = 'abdumuhaimin.1@gmail.com';
$mail->Password = 'Magnumsniper123';
$mail->setFrom($_POST['email'], $_POST['name']);
$mail->Subject = $_POST['subject'];

if(!$mail->send()){
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>