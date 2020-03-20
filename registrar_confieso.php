<?php

require_once 'include/helpers.php';
require_once 'include/db.php';

if (isset($_POST)) {
    $descripcion = $_POST['confesar'];
    $id = $_SESSION['verificado']['id'];

    if (!empty($descripcion)) {
        $registrar_validad = true;
    } else {
        $registrar_validad = false;
        $error= "Por favor complete una descripcion";
    }

    if (count($error) == 0) {
        $sql = "INSERT INTO entradas VALUES(null,$id,CURDATE(),'$descripcion')";
        $ejecutar = mysqli_query($conexion, $sql);
        if ($ejecutar) {
            $_SESSION['entrada'] = "Entrada registrada correctamente";
            Header("location: confiesate.php");
        }
    } else {
        $_SESSION['error-entrada'] = $error;
        Header("location: confiesate.php");
    }
}
