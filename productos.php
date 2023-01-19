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
    <img src="../tp1_ 19_10_2022/img/productos1.jpg" alt="microfono condenser" width="1920" height="863" class="img-fluid">
  </figure>

  <div class="container">
    <div class="col-12">
      <h1 class="centro">Mas Vendidos</h1>
    </div>
  </div>

    <div class="productos">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
       <section>
          <article>
            <img src="../tp1_ 19_10_2022/img/prod1.png" alt="microfono gris" width="174" height="350" class="auris">
            <h2 class="bebas marginproductos">ATH-M20</h2>
            <p class="caja1 raleway ">Cuenta con una membrana grande técnicamente avanzada y tensionada específicamente para ofrecer características sónicas suaves y naturales.</p>
          </article>
      </section>
        </div>
        <div class="col-md-6 col-lg-3">
      <section>
          <article>
            <img src="../tp1_ 19_10_2022/img/prod2.png" alt="auriculares con cable negros" width="222" height="350" class="auris">
            <h2 class="bebas marginproductos">ATH-M60</h2>
            <p class="caja1 raleway">Los auriculares profesionales de monitorización ATH-M60 combinan una moderna ingeniería y materiales de alta calidad para una experiencia única.</p>
          </article>
       </section>
      </div>
      <div class="col-md-6 col-lg-3">
       <section>
          <article>
            <img src="../tp1_ 19_10_2022/img/prod3.png" alt="auriculares marrones" width="204" height="350" class="auris">
            <h2 class="bebas marginproductos">ATH-L500</h2>
            <p class="caja1 raleway">Descubra el sonido cálido y natural que generan los audífonos para audiófilos ATH-L500 de exquisita fabricación artesanal.</p>
          </article>
       </section>
      </div>
      <div class="col-md-6 col-lg-3">
        <section>
           <article>
             <img src="../tp1_ 19_10_2022/img/prod4a.png" alt="auriculares bluetooth" width="258" height="350" class="auris">
             <h2 class="bebas marginproductos">ATH-L500</h2>
             <p class="caja1 raleway">Los ATH-CKS50 brindan un audio claro de rango completo con graves profundos y potentes.
             Incluyendo la tecnología de cancelación de ruido.</p>
           </article>
        </section>
       </div>
    </div>
    </div>
  </div>

  <div class="container">
    <div class="vermas">
      <ul class="pagination justify-content-center" style="margin:20px 0">
        <li class="page-item"><a class="page-link" href="#">Anterior</a></li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
      </ul>
  <button type="button" class="btn btn-secondary btn-lg btn-block">VER MÁS PRODUCTOS</button>
</div>
  </div>


<figure>
  <img src="../tp1_ 19_10_2022/img/porquecomprar.jpg" alt="chico y chica con auriculares" width="1920" height="755" class="img-fluid">
</figure>

<section>
<h2 class="bebas centro" id="arrivals">New Arrivals</h2>
<div class="arrivals">
<div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="bebas">ath-iex1</h3>
                <p class="raleway">Los audífonos ATH-IEX1 cuentan con elementos de 6 mm de alta sensibilidad con un potente circuito magnético y amplificador que ofrece una reproducción de audio de alta fidelidad para estimular sus sesiones de ejercicio físico.</p>
            </div>
            <div class="col-md-6">
                <img src="../tp1_ 19_10_2022/img/productosb.jpg" alt="Auriculares in-ear" width="700" height="450" class="img-fluid">
            </div>
        </div>
    </div>
  </div>
  <div class="arrivals">
    <div class="container">
        <div class="row">
            <div class="col-md-6 seccion">
                <img src="../tp1_ 19_10_2022/img/productosc.jpg" alt="Auriculares gamers" width="700" height="450" class="img-fluid">
            </div>
            <div class="col-md-6 seccion">
                <h3 class="bebas">ath-g1</h3>
                <p class="raleway">El modelo ATH-G1WL es un conjunto de audífonos para juegos de primera calidad diseñados para jugadores serios que desean hacerse con el control total de su experiencia de juego por computadora.
                </p>
            </div>
        </div>
        </div>
  </div>
  <div class="arrivals">
        <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <h3 class="bebas">at 4022</h3>
                  <p class="raleway">El AT 4022, tiene un sonido suave, cálido y natural, articulado y con precisión de detalle para satisfacer las exigentes necesidades de los profesionales actuales de grabación, retransmisión y refuerzo de sonido.</p>
              </div>
              <div class="col-md-6">
                  <img src="../tp1_ 19_10_2022/img/productosb2.jpg" alt="micrófono condensador2" width="700" height="450" class="img-fluid">
              </div>
          </div>
      </div>
  </div>
  <div class="arrivals">
      <div class="container">
          <div class="row">
              <div class="col-md-6 seccion">
                  <img src="../tp1_ 19_10_2022/img/productosc2.jpg" alt="tocadiscos at" width="700" height="450" class="img-fluid">
              </div>
              <div class="col-md-6 seccion">
                  <h3 class="bebas">at-lp5</h3>
                  <p class="raleway">El tocadiscos de transmisión por correa totalmente automático AT-LP5 le permite llevar su experiencia de audio analógico a un nivel superior que le ofrecen un extraordinario rendimiento de alta fidelidad.
                  </p>
              </div>
          </div>
          </div>
  </div>
  </section>

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
    
    <script src="../lib/jquery/jquery-3.3.1.min.js"></script>
        <script src="../lib/popper/popper.min.js"></script>
        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
        </body>
    </html>