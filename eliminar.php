<?php

require_once 'conexion.php';

if (isset($_GET['id'])){
    $id_usuario = $_GET['id'];
    $consulta_sql = "DELETE FROM usuarios WHERE id_usuario = $id_usuario";

    $resultado = mysqli_query($conexion,$consulta_sql);

    if($resultado == false){
        die ("Falla");
    }
    else{
        $_SESSION ['mensaje'] = 'Se ha eliminado exitosamente';
        header("location: consultas_inicio.php");
    }  
}




?>