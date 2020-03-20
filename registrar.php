<?php require_once 'include/header.php' ?>
<?php require_once 'include/db.php'; ?>
<?php require_once 'include/helpers.php'; ?>
<div class="contenedor-central">
    <h1>Registrarse</h1>
    <form action="guardado.php" method="post" class="formulario">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre">
        <label for="apellidos">Apellidos:</label>
        <input type="text" name="apellidos">
        <label for="email">Email:</label>
        <input type="email" name="email">
        <label for="password">Contraseña:</label>
        <input type="password" name="password">
        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php if (isset($_SESSION['completado'])) : ?>
        <?php echo  $_SESSION['completado']; ?>
    <?php elseif (isset($_SESSION['errores']['falla'])) : ?>
        <?php echo  "<div class='error'>" . $_SESSION['errores']['falla'] . "</div>" ?>
    <?php elseif (isset($_SESSION['errores'])) : ?>
        <?php
        foreach ($_SESSION['errores'] as $errores) {
            echo "<ul>";
            echo "<li><div class='error'>" . $errores . "</div></li>";
            echo "</ul>";
        } ?>
    <?php endif; ?>
    <?php borrarError() ?>
</div>
<?php require_once 'include/footer.php' ?>