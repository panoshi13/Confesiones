<?php
require_once 'include/db.php';
if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE email='$email' AND contraseña='$password'";
    $ejecucion = mysqli_query($conexion, $sql);
    if ($ejecucion && mysqli_num_rows($ejecucion) == 1) {
        $usuario = mysqli_fetch_assoc($ejecucion);
        //utilizar una sesion para guardar los datos del usuario logueado
        $_SESSION['verificado'] = $usuario;
        header("Location: index.php");
    } else {
        //mensaje de error
        $_SESSION['error-login'] = "No coincide el usuario";
        header('Location: iniciar_sesion.php');
    }
}
