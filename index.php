<?php

require_once 'conexion.php';

?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilocss/estilo.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <title>AudioTechnica</title>
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
     
    <figure><img src="img/slider1.jpg" alt="auriculares negros" width="1920" height="863" class="img-fluid"></figure>


    <div class="container">
      <div class="col-12">
        <h1 class="centro">Nuevos Ingresos</h1>
      </div>
    </div>
    

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-lg-4">
   <section>
      <article>
        <img src="img/auris1.png" alt="auriculares marroness" width="280" height="508" class="auris">
        <h2 class="bebas marginbebas">ATH-L500</h2>
        <p class="caja1 centro">Descubra el sonido cálido y natural que generan los audífonos ATH-L500, con preciosas carcasas de exquisita fabricación artesanal y una estética superior.
        </p>
      </article>
  </section>
    </div>
    <div class="col-sm-12 col-lg-4">
  <section>
      <article>
        <img src="img/auris2.png" alt="auriculares con cable negros" width="280" height="508" class="auris">
        <h2 class="bebas marginbebas">ATH-M60</h2>
        <p class="caja1 centro">Los auriculares profesionales de monitorización combinan una moderna ingeniería y materiales de alta calidad para una experiencia única.</p>
      </article>
   </section>
  </div>
  <div class="col-sm-12 col-lg-4">
   <section>
      <article>
        <img src="img/auris3.png" alt="auriculares blancos" width="280" height="508" class="auris">
        <h2 class="bebas marginbebas">ATH-A20</h2>
        <p class="caja1 centro">Los audífonos con cancelación del ruido QuietPoint® bloquea hasta el 80 % del ruido ambiente y ofrece una calidad, comodidad y portabilidad extraordinarias.</p>
      </article>
   </section>
  </div>
  <div class="vermas">
  <a class="btn btn-outline-secondary btn-lg" href="productos.php">VER MÁS</a>
  </div>
</div>
</div>

<figure><img src="img/slider2mic.jpg" alt="chica con microfono" width="1920" height="793" class="img-fluid"></figure>

<div class="container">
  <div class="row">
    <div class="col-sm-12 col-lg-6">
  <section class="juegosystream rounded">
     <article>
      <img src="img/juegos1.png" alt="auriculares gamers" width="454" height="484">
       <p class="juegos">juegos</p>
     </article>
 </section>
  </div>
  <div class="col-sm-12 col-lg-6">
 <section class="juegosystream rounded">
     <article>
      <img src="img/stream1.png" alt="microfono podcast" width="454" height="484" class="juegos">
       <p class="juegos">stream</p>
     </article>
  </section>
  </div>
  </div>
</div>

<figure><img src="img/slider3verde.jpg" alt="personas con auriculares" width="1920" height="877" class="img-fluid"></figure>   

<div class="container">
  <div class="row">
  <div class="col-sm-12 col-lg-6">
<h2 class="bebas" id="deshagase"> Deshágase del cable y quédese con el vinilo</h2>
<p class="raleway" id="textotocadisco">El tocadiscos AT-LP60XBT le ofrece todas las fantásticas funciones de un tocadiscos estéreo de transmisión por correa totalmente automático con la comodidad de la conectividad inalámbrica Bluetooth®.</p>
</div>
<div class="col-sm-12 col-lg-6">
  <figure><img src="img/tocadiscos.png" alt="tocadiscos" width="460" height="390" id="tocadiscos"></figure>
  </div>
</div>
</div>


  
<footer>
  <nav>
    <div class="centro">
  <a href="index.php"><img src="img/logo1.png" alt="Logo AudioTechnica" width="380" height="70"></a>
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


    <!-- JavaScript -->
    <script src="lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="lib/popper/popper.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>