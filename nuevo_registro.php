<?php 

require_once 'conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../tp1_ 19_10_2022/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../tp1_ 19_10_2022/estilocss/estilo.css">

    <link rel="stylesheet" href="http://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
 crossorigin="anonymous">

    <title>Nuevo Registro</title>
</head>
<body>

<header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
      <a class="navbar-nav" href="index.php"> <img src="img/logo2.png" alt="logo audiotechnica" width="370" height="60"> </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
   
      <div class="collapse navbar-collapse bg-dark" id="navbarText">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="productos.php" role="button" aria-expanded="false">Productos</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="productos.php">Auriculares</a>
              <a class="dropdown-item" href="productos.php">Micrófonos</a>
              <a class="dropdown-item" href="productos.php">Sonido profesional</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="productos.php">Ver Todos</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto <span class="sr-only">(current)</span></a>
          </li>
        
          <li class="nav-item">
            <a class="nav-link" href="soporte.php">Soporte</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="inicio.php" role="button" aria-expanded="false">Inicio</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="inicio.php">Inicio Sesion</a>
              <a class="dropdown-item" href="nuevo_registro.php">Registrate</a>
              <?php
          if(isset($_SESSION['u'])){
          ?>
              <a class="dropdown-item" href="cerrar_sesion.php">Cerrar Sesion</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="consultas_inicio.php">Consultas Usuarios</a>
              <?php
          }
          ?>
            </div>
          </li>

          <?php
          if(isset($_SESSION['u'])){
          ?>
          <li class="nav-item">
            <a class="nav-link">Hola <?php echo $_SESSION['u'];?></a>
          </li>
          <?php
          }
          ?>

        </ul>
      </div>
      </div>
    </nav>
  </header>


  <figure><img src="img/nuevoregistro.jpg" alt="microfono primer plano" width="1920" height=371 class="img-fluid"></figure>

<?php
    
    if(isset($_SESSION['mensaje'])){  ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <?php echo $_SESSION['mensaje'] ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
    </div>
    
    <?php unset($_SESSION['mensaje']);}

    ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">

        <div class="card card-body">
            <form action="agregar_nuevo.php" method="post">
                <div class="form-group">
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre (*)" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido (*)" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario (*)" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="clave" class="form-control" placeholder="Clave (*)" autocomplete="off">
                </div>
                <input type="submit" class="btn btn-success btn-block" name="agregar_nuevo" value="Registrate">
            </form>
            </div>
        </div>
        </div>
    </div>

    <script src="../tp1_ 19_10_2022/lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="../tp1_ 19_10_2022/lib/popper/popper.min.js"></script>
    <script src="../tp1_ 19_10_2022/lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>