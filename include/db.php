<?php 
    $servidor="localhost";
    $usuario="root";
    $contraseña="";
    $db="proyecto_harold";

    $conexion = mysqli_connect($servidor,$usuario,$contraseña,$db);

    mysqli_query($conexion,"SET NAMES 'utf8'");

    if (!isset($_SESSION)) {
        session_start();
    }
?>