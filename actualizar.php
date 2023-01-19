<?php

include 'conexion.php';

if(isset($_GET['id'])){
    $id_usuario = $_GET['id'];
    $consulta_sql= "SELECT * FROM usuarios WHERE id_usuario = $id_usuario";
    $resultado = mysqli_query($conexion, $consulta_sql);

    if (mysqli_num_rows($resultado) == 1){
        $row = mysqli_fetch_array($resultado);
        $edit_nombre = $row ['nombre'];
        $edit_apellido = $row ['apellido'];
        $edit_usuario = $row ['usuario'];
    }
}

if(isset($_POST['update'])){ 
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];

    $consulta_sql = "UPDATE usuarios set nombre='$nombre', apellido='$apellido', usuario='$usuario' WHERE id_usuario=$id";

    mysqli_query($conexion,$consulta_sql);

    $_SESSION ['mensaje'] = 'Tarea actualizada';
    header("location: consultas_inicio.php");
}

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

          <li class="nav-item">
            <a class="nav-link" href="inicio.php">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <?php
          
          if(isset($_SESSION['u'])){

          ?>
          <li class="nav-item">
            <a class="nav-link" href="cerrar_sesion.php">Cerrar <span class="sr-only">(current)</span></a>
          </li>
          <?php
          }
          ?>
          <li class="nav-item">
            <a class="nav-link" href="consultas_inicio.php">Consultas <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  </header>

<div class="container">
<h1>Modificar:</h1>
    </div>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="actualizar.php?id=<?php echo $_GET['id']?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $edit_nombre;?>" class="form-control" placeholder="Modifique el nombre">
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellido" value="<?php echo $edit_apellido;?>" class="form-control" placeholder="Modifique el apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" name="usuario" value="<?php echo $edit_usuario;?>" class="form-control" placeholder="Modifique el usuario">
                    </div>
                    <button class="btn btn-success" name="update">
                        Modificar
                    </button>
                </form>
            </div>
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

