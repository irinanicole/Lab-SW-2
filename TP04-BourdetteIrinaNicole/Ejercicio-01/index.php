<?php
    require_once 'php/misFunciones.php';
    // NOtas de cada comision:

$comisiones = [   
                                                1 => array (
                                                                                    $contJuego1,
                                                                                    $pagoJuego1
                                                                                    ),
                                                2 => array (
                                                                    $contJuego2,
                                                                    $pagoJuego2
                                                                    ),
                                                3 => array (
                                                                            $contJuego3,
                                                                            $pagoJuego3
                                                                            )
                                            ];
 var_dump ($comisiones);

    // $comisiones =
    // [
    //     [1] => array (2,3,5,4,7,3,5,10,3,6,8),
    //     [2] => array (4,3,1,10,4,7,4,5,10,5,10,4,6,6,8),
    //     [3] => array (5,7,9,3,8,5,2,7,10,1)
    // ];


    foreach ($comisiones as $nroComision => list($nota)) {
        $promedio = fnCalcularPromedio ($nroComision);
        $cantAprobados = fnCantidadAprobados ($nroComision);
        $cantDesaprobados = fnCantidadDesaprobados ($nroComision);

        prVerEstadisticas (($nroComision+1), $promedio, $cantAprobados, $cantDesaprobados);

    }


?>