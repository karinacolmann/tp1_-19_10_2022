<?php

session_start();

$servidor = 'localhost';
$usuario = 'root';
$clave = '';
$basededatos = 'crud_audiotechnica';

$conexion = mysqli_connect($servidor, $usuario, $clave, $basededatos);

if($conexion == false){
    #echo '<h1>' . mysqli_connect_errno() . ': ' . mysqli_connect_error() . '</h1>';
    #exit

    die('<h1>' . mysqli_connect_errno() . ': ' . mysqli_connect_error() . '</h1>');
}
#else{
    #echo 'conexión satisfactoria ';
#}

?>