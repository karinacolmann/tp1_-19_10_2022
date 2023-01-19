<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilocss/estilo.css">

    <title></title>
</head>
<body>
   
    <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">No tienes permiso para acceder</h4>
  <p>No tienes permisos de Administrador para realizar estas acciones! :(</p>
  <hr>
  <p class="mb-0">Debes ser Administrador para realizar consultas</p>
</div>

<a class="btn btn-primary" href="../tp1_ 19_10_2022/index.php" role="button">Volver al Inicio</a>

<script src="lib/jquery/jquery-3.3.1.min.js"></script>
<script src="lib/popper/popper.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>