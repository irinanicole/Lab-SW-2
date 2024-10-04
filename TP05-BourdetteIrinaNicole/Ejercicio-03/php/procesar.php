<?php
    $rutaBootstrap = '../../';
    $rutaCss = '../css/';
    require_once 'encabezado.php';
?>

<?php

    if ( !empty($_GET['nombre']) )
    { 
        $nombre = $_GET['nombre'];

        require_once 'funciones.php';
        prMostrarMontosPagados ($nombre);
    }
?>

<?php
    require_once 'pie.php';
?>