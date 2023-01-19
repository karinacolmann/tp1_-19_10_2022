<?php

require_once 'conexion.php';

$consulta_sql = 'SELECT * FROM usuarios';
$ejecutar_consulta = mysqli_query($conexion, $consulta_sql);

#var_dump($ejecutar_consulta);

$registros = mysqli_fetch_all ($ejecutar_consulta, MYSQLI_ASSOC);

foreach ($registros as $registro){
    
     foreach ($registro as $datos){
        echo $datos. '<br />';
     }

}

#var_dump ($registros);

mysqli_close($conexion);

?>