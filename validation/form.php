<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validando datos</title>
</head>

<body>
  <form action="server.php" method="post">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre">

    <button type="submit" name="form">Enviar formulario</button>
    <!--
      podemos usar name en el button para que nos verifique si todo el form fue enviado
    -->
  </form>
</body>

</html>