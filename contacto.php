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

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">


    <title>Trabajo Práctico</title>
  </head>
  
  <body background="">

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
<img src="../tp1_ 19_10_2022/img/contacto1.jpg" alt="chica con auriculares blancos" width="1920" height="863" class="img-fluid">
</figure>

<h1 class="centro">Dejanos tu mensaje</h1>
<div id="datos">
<div class="container">
<div class="row">
  <div class="col-sm-12 col-lg-6">
<section>
  <article class="tecnica">
    <h2 class="bebas">Audio-Technica América Latina S.A.</h2>
    <p class="raleway">Av. Dorrego 2133, CABA
      (1414) Buenos Aires, Argentina
      Customer support: monica@audio-technica.lat
      Distribution management: jorge@audio-technica.lat</p>
  </article>
</section>
  </div>

  <div class="row" id="datos2">
  <div class="col-sm-12 col-lg-6">
    
   <form action="#" method="get">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" title="ingrese su nombre aquí"><br>
    
     <label for="ape">Apellido:</label>
      <input type="text" id="ape" name="apellido" required><br>
                  
    <label for="correo">Email:</label><br>
      <input type="email" id="correo" name="email" required><br>              
       
    <label for="tel">Telefono:</label><br>
      <input type="tel" id="tel" name="telefono" pattern="[0-9]"><br>
     
    <label for="consulta">Mensaje:</label><br>
     <textarea name="consulta" id="consulta" cols="30" rows="10" maxlength="400"></textarea>
      <br>
       
       <input type="submit" value="Enviar">
       <input type="reset" value="Borrar">
   </form>
    </div>
    </div>
    </div>
    </div>
  </div>

<img src="../tp1_ 19_10_2022/img/distribuidores.jpg" alt="auriculares en estuche" width="1920" height="784" class="img-fluid">

<div class="container">
  <section>
  <div class="row">
    <div class="col-sm-12 col-lg-6">

    <article class="distribuidores argentina">
<h2 class="bebas">argentina</h2>
<p class="raleway">Exosound
  Buenos Aires, Argentina
  Tel/Fax: (+5411)  2120-5330
  Email: contacto@exosound.com
  Sitio web: <a href="https://www.exosound.com/" target="_blank">www.exosound.com</a></p>
    </article>
  </div>
</div>

  <div class="row">
    <div class="col-sm-12 col-lg-6">
    <article class="distribuidores">
<h2 class="bebas">uruguay</h2>
<p class="raleway">Palacio de la Música
  Paraguay 1319
  Montevideo, Uruguay
  Tel: (+598) 2909 3333
  Sitio: <a href="https://www.palaciodelamusica.com.uy/" target="_blank">www.palaciodelamusica.com</a></p>
    </article>    

    <article class="distribuidores">
<h2 class="bebas">chile</h2>
<p class="raleway">Audio Systems
  Las Condes, Santiago de Chile, Chile
  Tel: (+562) 2231 2356
  Email: ventas@audiosystems.cl
  Sitio web: <a href="https://audiosystems.cl/" target="_blank">https://audiosystems.cl</a></p>
    </article>  
  </div>
  


<div class="col-sm-12 col-lg-6">
    <article class="distribuidores">
<h2 class="bebas">paraguay</h2>
<p class="raleway">Music Hall S.A.
  Asunción, Paraguay
  Tel: +595 2168 3888
  E-mail: info@musichall.com.py
  Sitio web: <a href="https://musichall.com.py/tienda/" target="_blank">www.musichall.com.py</a>
  </p>
    </article>    

    <article class="distribuidores">
<h2 class="bebas">bolivia</h2>
<p class="raleway">Yamabol
  La Paz, Bolivia
  Tel: +591-2-240-8459 / 2406911
  Tel: +591-2-2797917
  Email: info@yamabol-srl.com
  Sitio web: <a href="https://www.yamabol-srl.com/" target="_blank">www.yamabol-srl.com</a></p>
    </article> 
</div>
</div>
</section>

</div>


<footer>
  <nav>
    <div class="centro">
      <a href="index.php"><img src="../tp1_ 19_10_2022/img/logo1.png" alt="Logo AudioTechnica" width="380" height="70"></a>
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

<script src="../tp1_ 19_10_2022/lib/jquery/jquery-3.3.1.min.js"></script>
    <script src="../tp1_ 19_10_2022/lib/popper/popper.min.js"></script>
    <script src="../tp1_ 19_10_2022/lib/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>