<?php

require_once 'conexion.php';

if (isset ($_POST['usuario']) && isset($_POST['clave'])){
    if(!empty($_POST["usuario"]) && !empty($_POST["clave"])){
        $usuario=$_POST["clave"];
        $clave =$_POST["clave"];

        session_start();
        $_SESSION["usuario"] = $usuario;
        header("Location: index.php");
    }

    if(empty($_POST["usuario"])){
        $error_usuario = "el campo usuario 'Usuario' es requerido";
    }
    else{
        $usuario = $_POST["usuario"];
    }
    if(empty($_POST["clave"])){
        $error_usuario = "el campo usuario 'Clave' es requerido";
    }
    else{
        $usuario = $_POST["clave"];
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../tp1_ 19_10_2022/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../tp1_ 19_10_2022/estilocss/estilo.css">

    <title>Inicio de Sesión</title>
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

<div class="container">
<div class="row">
    <div class="col-6">
    <figure><img src="../tp1_ 19_10_2022/img/sesionfoto.jpg" alt="hombre con auriculares negros" width="1246" height="532"></figure>
    </div>
</div>
     
     <form action="validarsesion.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <div class="row">
     <div class="col-6">
             <h2>Inicio de Sesión: </h2>
                 
         <label>Usuario: <input type="text" class="form-control" name="usuario" placeholder="Ingrese Usuario (*)" autocomplete="off"></label>
                  
         <label>Clave: <input type="password" class="form-control" name="clave" placeholder="Ingrese Clave (*)" autocomplete="off"></label>
         
         <input type="submit" class="btn btn-success btn-block" name="enviar" value="ENVIAR">

         </div>
     </div>  
     </div>

    <script src="../tp1_ 19_10_2022/lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="../tp1_ 19_10_2022/lib/popper/popper.min.js"></script>
    <script src="../tp1_ 19_10_2022/lib/bootstrap/js/bootstrap.min.js"></script>
    
</body>
</html>