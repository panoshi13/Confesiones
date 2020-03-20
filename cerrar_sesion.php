<?php 

    require_once 'include/db.php';
    unset($_SESSION['verificado']);
    header("Location: index.php");
?>