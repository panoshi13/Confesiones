<?php require_once 'include/helpers.php' ?>
<?php $estado = noIdentificado() ?>
<?php if ($estado === false) : ?>
    <?php require_once 'include/header.php' ?>

    <div class="contenedor-central-login">
        <h1>Confiesate</h1>
        <form action="registrar_confieso.php" method="post" class="formulario">
            <textarea name="confesar" style="resize:none" id="" cols="56" rows="5"></textarea>
            <input type="submit" name="enviar" value="Enviar">
        </form>

        <?php if (isset($_SESSION['entrada'])) : ?>
            <p><?= $_SESSION['entrada'] ?></p>
        <?php elseif (isset($_SESSION['error-entrada'])) : ?>
            <p class="error"><?= $_SESSION['error-entrada'] ?></p>
        <?php endif ?>
        <?php borrarError() ?>
    </div>

    <footer class="pie-abajo">
        <p>Todos los Derechos Reservados &copy; | Harold Web - <?= date('Y') ?></p>
    </footer>
    </body>

    </html>
<?php else : ?>
    <?php Header("location: iniciar_sesion.php"); ?>
<?php endif ?>