<?php

    function pagoDiario ($h, $d, $t) {
        define('PRECIO_HORA', 4000);
        $aumentoNoche = 1.28;
        $acumulativoSabado = 1.12;
        $acumulativoDomingo = 1.26;
        $montoDia = PRECIO_HORA * $h;

        if ($t == 'noche') {
            $montoDia = $montoDia * $aumentoNoche;
        }
        if ($d == 'sabado') {
            $montoDia = $montoDia * $acumulativoSabado;
        } elseif ($d == 'domingo') {
            $montoDia = $montoDia * $acumulativoDomingo;
        }
        
        return $montoDia;
    }

?>