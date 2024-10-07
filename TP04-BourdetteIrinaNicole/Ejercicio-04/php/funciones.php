<?php

    function calcularIntereses ($depositoInicial, $cantidadDias)
    {
        switch ($cantidadDias) {
            case '30':
                $tasa = 117;
                break;
            
            case '45':
                $tasa = 125;
                break;
            
            case '60':
                $tasa = 137;
                break;
            
            case '90':
                $tasa = 150;
                break;
            
            default:
                
                break;
        }

        $resultado = $depositoInicial * (($tasa/100) * $cantidadDias/365);
        
        return $resultado;
    }

?>