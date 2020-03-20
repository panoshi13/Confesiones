<?php require_once 'include/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confiestate</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="header">
        <div class="contenedor">
        <div class="logo">
            <a href="index.php" class="letra">Confiesate</a>
        </div>
        <nav class="navegacion">
            <a href="index.php">Inicio</a>
            <?php if(isset($_SESSION['verificado'])):?>
                <a href="confiesate.php">Confiesate, <?=$_SESSION['verificado']['nombre']?></a>
                <a href="cerrar_sesion.php">Cerrar sesion</a>
            <?php else:?>
                <a href="registrar.php">Registrate</a>
                <a href="iniciar_sesion.php">Iniciar Sesion</a>
            <?php endif;?>
            
        </nav>
        </div>
    </header>