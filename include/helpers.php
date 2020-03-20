<?php
require_once 'db.php';
function verificarUsuario($conexion, $email, $password)
{
    require_once 'db.php';
    $sql = "SELECT * FROM usuarios WHERE email='$email' AND contraseña='$password'";
    $consulta = mysqli_query($conexion,$sql);
    if ($consulta) {
        $usuario=$consulta;
    }else{
        $usuario="Error";
    }
    return $usuario;
}


function borrarError(){
    $retorno = false;
    unset($_SESSION['errores']);
    unset($_SESSION['completado']);
    unset($_SESSION['error-entrada']);
    unset($_SESSION['entrada']);
    unset($_SESSION['error-login']);
    return $retorno;
}

function traerTodasEntradas($conexion){
    $sql = "SELECT * FROM entradas ORDER BY id DESC";
    $ejecutar = mysqli_query($conexion,$sql);
    $entradas = array();
    if($ejecutar){
        $entradas = $ejecutar;
    }
    return $entradas;
}

function traerEntradas($conexion){
    $sql = "SELECT * FROM entradas ORDER BY id DESC LIMIT 8";
    $ejecutar = mysqli_query($conexion,$sql);
    $entradas = array();
    if($ejecutar){
        $entradas = $ejecutar;
    }
    return $entradas;
}

function noIdentificado(){
    $estado=false;
    if (!isset($_SESSION['verificado'])) {
        $estado = true;
    }
    return $estado;
}