<?php

$tabla_del_9 = [];

for ($i=1; $i <=10 ; $i++) { 
  $resultado = $i * 9;
  $texto = "9 x $i = $resultado";
  array_push($tabla_del_9, $texto);
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Tabla del 9</h1>

  <ul>
    <?php foreach($tabla_del_9 as $multiplo): ?>
    <li><?= $multiplo?></li>
    <?php endforeach ?>
  </ul>
</body>