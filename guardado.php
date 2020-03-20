<?php
require_once 'include/db.php';
if (isset($_POST)) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $error = array();
    //validacion
    if (!empty($nombre) && !preg_match("/[0-9]/", $nombre)) {
        $nombre_validado = true;
    } else {
        $nombre_validado = false;
        $error['nombre'] = "El nombre no puede estar vacio y no puede contener números";
    }

    if (!empty($apellidos) && !preg_match("/[0-9]/", $apellidos)) {
        $apellido_validado = true;
    } else {
        $apellido_validado = false;
        $error['apellidos'] = "El Apellido no puede estar vacio y no puede contener números";
    }

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_validado = true;
    } else {
        $email_validado = false;
        $error['email'] = "Digite bien el correo";
    }

    if (!empty($password) && strlen($password) > 5) {
        $password_validado = true;
    } else {
        $password_validado = false;
        $error['password'] = "La contraseña no puede estar vacio y debe tener mas de 6 caraceteres";
    }

    $guardar_usuario = false;
    //comprobar si no hay errrores e insertar los datos a la base de datos
    if (count($error) == 0) {
        $guardar_usuario = true;
        $sql = "INSERT INTO usuarios VALUES(null,'$nombre','$apellidos','$email','$password')";
        $ejecutar = mysqli_query($conexion, $sql);
        if ($ejecutar) {
            $_SESSION['completado'] = "Exito al registrar Usuario";
        } else {
            $_SESSION['errores']['falla'] = "Error al registrar Ususario";
        }
    } else {
        $_SESSION['errores'] = $error;
        
        /*
        foreach($error as $errores){
            echo $errores."</br>";
        }*/
    }
    Header("Location: registrar.php");
}
