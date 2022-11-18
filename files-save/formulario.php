<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enviar archivos</title>
</head>

<body>
  <form action="./server.php" method="post" enctype="multipart/form-data">

    <label for="nombre">Inserta el nombre</label>
    <input type="text" name="nombre" id="nombre">

    <label for="image">Inserta la imagen</label>
    <input type="file" name="image" id="image">

    <button type="submit">Mandar formulario</button>
  </form>
</body>

</html>