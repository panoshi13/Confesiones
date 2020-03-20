<?php require_once 'include/header.php' ?>
<?php require_once 'include/helpers.php' ?>
<div class="contenedor-central-login">
    <h1>Iniciar Sesion</h1>
    <form action="login.php" method="post" class="formulario">
        <label for="email">Email:</label>
        <input type="email" name="email">

        <label for="password">Contraseña:</label>
        <input type="password" name="password">

        <input type="submit" name="enviar" value="Enviar">
    </form>
    <?php if (isset($_SESSION['error-login'])) : ?>
        <p class="error"><?= $_SESSION['error-login'] ?></p>
    <?php endif ?>
    <?php borrarError() ?>
</div>
<footer class="pie-abajo">
        <p>Todos los Derechos Reservados &copy; | Harold Web - <?=date('Y')?></p>
    </footer>
</body>
</html>