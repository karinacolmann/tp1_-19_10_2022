<?php 

require_once 'conexion.php';


if(isset($_POST['agregar'])){
 

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    $consulta_sql = "INSERT INTO usuarios(nombre, apellido, usuario, clave) VALUES ('$nombre','$apellido','$usuario','$clave');";
    
    $resultado = mysqli_query($conexion,$consulta_sql);
    
    if (!$resultado){
        die ("Falló la conexión");
    }
    
    $_SESSION['mensaje']='Se ha guardado correctamente';
    $_SESSION['color_mensaje']='success';
    
    header ("Location: consultas_inicio.php");
    
    #mysqli_close($conexion);

}

?>