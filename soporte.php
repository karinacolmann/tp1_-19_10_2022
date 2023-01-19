<?php

require_once 'conexion.php';
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="../tp1_ 19_10_2022/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../tp1_ 19_10_2022/estilocss/estilo.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">


    <title>Trabajo Práctico</title>
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
    
    <figure>
<img src="../tp1_ 19_10_2022/img/soporte1.jpg" alt="hombre con auriculares" width="1920" height="863" class="img-fluid">
</figure>

<div class="container">
  <div class="col-12">
    <h1 class="centro">Elegir por producto</h1>
  </div>
</div>

<div class="productos">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3">
     <section>
        <article>
          <a href="#"><img src="../tp1_ 19_10_2022/img/soportemic.png" alt="microfonos negros" width="220" height="350" class="auris"></a>
          <h2 class="bebas marginproductos">micrófonos</h2>
          <p class="caja1">Micrófonos cableados, sistemas inalámbricos, para broadcasting, para instrumentos musicales y voces en vivo, micrófonos USB. </p>
        </article>
    </section>
      </div>
      <div class="col-md-6 col-lg-3">
    <section>
        <article>
          <a href="#"><img src="../tp1_ 19_10_2022/img/soporteauris.png" alt="auriculares con cable verdes" width="220" height="350" class="auris"></a>
          <h2 class="bebas marginproductos">cableados</h2>
          <p class="caja1">Todo tipo de auriculares cableados, Over Ear, In-Ear, On-Ear, Headsets, canceladores de ruido, cables de recambio.</p>
        </article>
     </section>
    </div>
    <div class="col-md-6 col-lg-3">
     <section>
        <article>
          <a href="#"><img src="../tp1_ 19_10_2022/img/prod3.png" alt="auriculares marrones" width="204" height="350" class="auris"></a>
          <h2 class="bebas marginproductos">especiales</h2>
          <p class="caja1">Auriculares de fabricación especial, acabados especiales, gamers, auriculares de monitorización y abiertos.</p>
        </article>
     </section>
    </div>
    <div class="col-md-6 col-lg-3">
      <section>
         <article>
          <a href="#"><img src="../tp1_ 19_10_2022/img/soporteblue.png" alt="auriculares bluetooth negros" width="260" height="350" class="auris"></a>
           <h2 class="bebas marginproductos">bluetooth</h2>
           <p class="caja1">Productos Bluetooth, inalámbricos, Truly Wireless, auriculares intrauditivos SonicSport y Sound Reality.</p>
         </article>
      </section>
     </div>
  </div>
  </div>
</div>

<div class="container">
<div class="col-12">
  <div class="vermas">
<a class="btn btn-outline-secondary" href=".../tp1_ 19_10_2022/productos.php">VER OTROS</a>
</div>
</div>
</div>

<div class="container">
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">Buscar por modelo de producto</a>
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
  </form>
</nav>
</div>

    <footer>
      <nav>
        <div class="centro">
          <a href="../tp1_ 19_10_2022/index.php"><img src="../tp1_ 19_10_2022/img/logo1.png" alt="Logo AudioTechnica" width="380" height="70"></a>
        </div>
      <br>
      <p>ESPAÑOL / $ USD<br>
      CONTACTO<br>
    CATÁLOGO</p>
    <h2 class="bebas">soporte</h2>
    <p>FAQ de Productos <br> Garantías </p>
    <h2 class="bebas">acerca de</h2>
    <p>Our Story <br> Notas de Prensa </p>
    <h2 class="bebas">social</h2>
    <p>Instagram <br> Facebook <br> Twitter</p>
      </nav>
    </footer>
    
    <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
        <script src="../lib/popper/popper.min.js"></script>
        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
        </body>
    </html>