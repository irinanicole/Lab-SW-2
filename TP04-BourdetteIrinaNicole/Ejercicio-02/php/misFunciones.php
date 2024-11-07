<?php

    function  fnCalcularPromedio ($comision) {
        $cant = 0;
        $sumaNotas = 0;

        foreach ($comision as $nota) {
            $sumaNotas = array_sum($comision);
            $cant++;
        }
        $prom = $sumaNotas / $cant;
        $promedio = number_format($prom, 1, ',','');

        return $promedio;
    }


    function fnCantidadAprobados ($comision) {
        $cant = 0;

        foreach ($comision as $nota) {
            if ($nota >= 4) {
                $cant++;
            }
        }

        return $cant;
    }


    function fnCantidadDesaprobados ($comision) {
        $cant = 0;

        foreach ($comision as $nota) {
            if ($nota < 4) {
                $cant++;
            }
        }

        return $cant;
    }

    function prVerEstadisticas ($nroComi, $prom, $cantAp, $cantDes) {
        
        echo '<p>a. Promedio: '.$prom.'<br>b. Cantidad de Aprobados: '.$cantAp.'<br>c. Cantidad de Desaprobados: '.$cantDes.'</p>';

    }

?>