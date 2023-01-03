<?php

// configuracion de la documentación
use PHPMailer\PHPMailer\PHPMailer;

require("../vendor/autoload.php");

function sendMail($subject, $body, $email, $name, $html = false) {

  // configuracion incial
  $phpmailer = new PHPMailer();
  $phpmailer->isSMTP();
  $phpmailer->Host = 'smtp.mailtrap.io';
  $phpmailer->SMTPAuth = true;
  $phpmailer->Port = 2525;
  $phpmailer->Username = 'f7c590142c0e4d';
  $phpmailer->Password = '86a67e162a93df';

  // aniadiendo destination
  $phpmailer->setFrom('contact@miempresa.com', 'Mi empresa');
  $phpmailer->addAddress($email, $name);

  // definiendo el contenido de mi email
  $phpmailer->isHTML($html);                                  //Set email format to HTML
  $phpmailer->Subject = $subject;
  $phpmailer->Body    = $body;

  // mandar el correo
  $phpmailer->send();
}



?>