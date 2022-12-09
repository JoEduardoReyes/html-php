<?php

$name = $_POST["nombre"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

$htmlentitiesonname = htmlentities($name);
$addslashesonuser = addcslashes($username, "\\");
$onlywords = preg_replace('/\d/', "", $username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Datos sanitizados</title>
</head>

<body>
  <div class="nombre">Nombre:<?=$name ?></div>
  <div class="nombre">Nombre en html entities:<?=$htmlentitiesonname ?></div>
  <div class="username">Usuario: <?= $username ?></div>
  <div class="username">Usuario con barras invertidas: <?= $addslashesonuser ?></div>
  <div class="username">Usuario solo con palabras: <?= $onlywords ?></div>
  <div class="email">Correo <?= $email?></div>
  <div class="age">Edad: <?= $age ?></div>
</body>

</html>