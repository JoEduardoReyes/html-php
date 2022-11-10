<?php
  $se_habla_de_bruno = true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Condicionales</title>
</head>

<body>
  <h1>Esto no se debe de hacer</h1>
  <!-- esto no se debe de hacer -->
  <?php 
    if ($se_habla_de_bruno) {
      echo "<b>😮</b>";
    } else {
      echo "<p>😁</p>";
    }
    ?>
  <h1>Esto es aceptable</h1>
  <!-- eso es aceptable -->
  <?php if ($se_habla_de_bruno) { ?>
  <b>😮</b>
  <?php } else {?>
  <p>😁</p>
  <?php }?>
  <h1>Esto si deberias hacerlo</h1>
  <?php if($se_habla_de_bruno): ?>
  <b>😮</b>
  <?php else: ?>
  <p>😁</p>
  <?php endif;?>
</body>

</html>