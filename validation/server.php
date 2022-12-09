<?php

// podemos usar isset para saber si una variable esta seteada
// podemos usar empty para saber si tiene un valor

if (isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
  echo "Hola! " . $_POST["nombre"];
} else {
  echo "No mandaste nada :(";
}