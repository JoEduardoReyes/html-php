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
    <!-- radious 
    <label for="Mexico">Mexico
      <input type="radio" name="pais" value="MX" id="Mexico">
    </label>
    <label for="Colombia">Colombia
      <input type="radio" name="pais" value="COL" id="Colombia">
    </label>
    <label for="Guatemala">Guatemala
      <input type="radio" name="pais" value="GT" id="Guatemala">
    </label> -->
    <!-- multiple files -->
    <label for="galeria">Carga tus imagenes</label>
    <input type="file" name="galeria[]" id="galeria" multiple>

    <button type=" submit">Mandar formulario</button>
  </form>
</body>

</html>