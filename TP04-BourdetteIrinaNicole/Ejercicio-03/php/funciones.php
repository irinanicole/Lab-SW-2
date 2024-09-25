<?php
    define('PRECIO_HORA', 4000);

    function pagoDiario ($h, $d, $t) {
        $aumentoNoche = 1.28;
        $acumulativoSabado = 1.12;
        $acumulativoDomingo = 1.26;
        $montoDia = PRECIO_HORA * $h;

        if ($t == 'Noche') {
            $montoDia = $montoDia * $aumentoNoche;
        }
        if ($d == 'Sábado') {
            $montoDia = $montoDia * $acumulativoSabado;
        } elseif ($d == 'Domingo') {
            $montoDia = $montoDia * $acumulativoDomingo;
        }
        
        return $montoDia;
    }

?>