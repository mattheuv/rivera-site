<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['msg'];

require 'PHPMailerAutoload.php';


$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'localhost';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'noresponder@rivera.com.co';                 // SMTP username
$mail->Password = 'noresponder';                           // SMTP password
$mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('noresponder@rivera.com.co', 'AUTOPRO Sitio Web');
$mail->addAddress('info@colmultimedia.com', 'MATTHEUV');     // Add a recipient

$mail->Subject = 'AUTOPRO Sitio web: Nuevo Mensaje';
$mail->Body    = "Nombre Completo: $name.\n".
                "Correo Electrónico: $email.\n".
                "Teléfono: $phone.\n".
                "Mensaje: $msg.\n";

if(!$mail->send()) {
echo 'El mensaje no pudo ser enviado';
     echo 'Mailer Error: ' . $mail->ErrorInfo;
 } else {
     echo 'Mensaje se ha enviado correctamente.';
     header("location:../index.html");
 }