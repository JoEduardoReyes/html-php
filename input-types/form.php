<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de inputs</title>
</head>

<body>
  <form action="server.php" method="post" enctype="multipart/form-data">
    <!-- input simple  -->
    <!-- <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre"> -->

    <!-- input arreglo -->
    <!-- <label>Personas:
      <input type="text" name="personas[]">
      <input type="text" name="personas[]">
      <input type="text" name="personas[]">
    </label> -->

    <!-- input arreglo asosiativos -->
    <!-- <label>Nombre:
      <input type="text" name="persona[name]">
    </label>
    <label>Email:
      <input type="email" name="persona[email]">
    </label>
    <label>Edad:
      <input type="number" name="persona[age]">
    </label> -->

    <!-- checkbox -->
    <input type="checkbox" name="list1">
    <input type="checkbox" name="list2" value="Este valor fue clicado">
    <input type="checkbox" name="list3">

    <button type="submit">Mandar formulario</button>
  </form>
</body>

</html>