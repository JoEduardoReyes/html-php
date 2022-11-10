<?php

$usuarios = array(
  array(
    "id" => 0,
    "username" => "Eduardo"
  ),
  array(
    "id" => 1,
    "username" => "Raul"
  ),
  array(
    "id" => 2,
    "username" => "Sergio"
  ),
  array(
    "id" => 3,
    "username" => "Daniela"
  )
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <script>
  let users = JSON.parse('<?= json_encode($usuarios) ?>');
  console.log(users);
  </script>
</body>

</html>