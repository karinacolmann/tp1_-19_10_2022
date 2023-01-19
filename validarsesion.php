<?php
    require_once 'conexion.php';

    $usuario= $_POST['usuario'];
    $clave= $_POST['clave'];

    $consulta_sql = "SELECT usuario, clave FROM usuarios WHERE usuario = '$usuario' && clave = '$clave';";

    $resultado = mysqli_query($conexion,$consulta_sql);

    $registro = mysqli_fetch_assoc($resultado);
    
    /*if(isset($_POST['enviar'])){
    
        $usuario=$username=trim($_POST['usuario']," ");
        $clave=trim($_POST['clave']," ");
    
        if(preg_match("/[^a-zA-Z0-9]+/",trim($_POST['usuario']," ")) || preg_match("/[^a-zA-Z0-9]+/",trim($_POST['clave']," "))){
            $msg_error_login = 'Error, no se aceptan caracteres especiales.';
        }
    
        $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' && clave = '$clave';";
    
        $resultado = mysqli_query($conexion, $consulta);
    
        $registro = mysqli_fetch_assoc($resultado);
    
        if(isset($registro)){
            if($usuario == $registro['usuario'] && $clave == $registro['clave']){
    
                $_SESSION['u'] = $registro['nombre']." ".$registro['clave'];
                    
                header('Location: index.php');
            }    
        }
    }*/
    
    if ($usuario == $registro['usuario'] && $clave == $registro['clave']){
        $_SESSION['u'] = $usuario;
       header("Location: index.php");
    }

    else {
        echo '<!DOCTYPE html>
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
          <h4 class="alert-heading">Error, Usuario o Contraseña inválidos</h4>
          <p>Tu usuario y/o contraseña no son correctos! :(</p>
          <hr>
          <p class="mb-0">Debes crearte una cuenta</p>
        </div>
        
        <a class="btn btn-primary" href="../tp1_ 19_10_2022/index.php" role="button">Volver al Inicio</a>
        
        <script src="lib/jquery/jquery-3.3.1.min.js"></script>
        <script src="lib/popper/popper.min.js"></script>
        <script src="lib/bootstrap/js/bootstrap.min.js"></script>
        
        </body>
        </html>';
    }


?>