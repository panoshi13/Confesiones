<?php require_once 'include/header.php' ?>
<?php require_once 'include/db.php' ?>
<?php require_once 'include/helpers.php' ?>
<?php require_once 'include/sidebar.php' ?>
    <main class="principal">
        <h1 class="center">Confesiones</h1>
        <article class="articulos">
            <?php $entrada = traerTodasEntradas($conexion) ?>
            <?php while ($entradita = mysqli_fetch_assoc($entrada)): ?>
                <h1><?= $entradita['fecha'] ?></h1>
                <p><?= $entradita['descripcion'] ?></p>
            <?php endwhile; ?>
        </article>
        <div class="ver-todas">
            <a href="ver-todas.php">Ver Todas</a>
        </div>
    </main>
</div>
<?php require_once 'include/footer.php' ?>