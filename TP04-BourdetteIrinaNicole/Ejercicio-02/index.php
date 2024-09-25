<?php
    require_once 'php/encabezado.php';
    // incluyo las funciones
    require_once 'php/misFunciones.php';
    // NOtas de cada comision:

    // COMISIONES
    $comision1 = array (2,3,5,9,4,7,3,5,10,3,6,8);
    $comision2 = array (4,3,1,10,4,7,4,5,10,5,10,4,6,6,8);
    $comision3 = array (5,7,9,3,8,5,2,7,10,1);

//////////////////////////////////////////////////////////////////////////////////////////////
    // CALCULOS //

    // comision 1
    echo '<h3>Comision 1</h3>';
    $promedio = fnCalcularPromedio ($comision1);
    $cantAprobados = fnCantidadAprobados ($comision1);
    $cantDesaprobados = fnCantidadDesaprobados ($comision1);
    $nro = 1;
    prVerEstadisticas ($nro, $promedio, $cantAprobados, $cantDesaprobados);

    // comision 2
    echo '<h3>Comision 2</h3>';
    $promedio = fnCalcularPromedio ($comision2);
    $cantAprobados = fnCantidadAprobados ($comision2);
    $cantDesaprobados = fnCantidadDesaprobados ($comision2);
    $nro = 2;
    prVerEstadisticas ($nro, $promedio, $cantAprobados, $cantDesaprobados);
    
    // comision 3
    echo '<h3>Comision 3</h3>';
    $promedio = fnCalcularPromedio ($comision3);
    $cantAprobados = fnCantidadAprobados ($comision3);
    $cantDesaprobados = fnCantidadDesaprobados ($comision3);
    $nro = 3;
    prVerEstadisticas ($nro, $promedio, $cantAprobados, $cantDesaprobados);


    require_once 'php/pie.php';
?>