<?php
    require_once('php/encabezado.php');

    const ALICUOTA = 2.5; //constante para calcular mas tarde la retencion de las tranferencias
    
    $valorInicial = 220000;
    $valorFinal = 350000;
    
    //Declaración de variables para representar las transferencias
    $ingreso1 = mt_rand($valorInicial, $valorFinal);
    $ingreso2 = mt_rand($valorInicial, $valorFinal);

    //Cálculo de retención de ingresos y declaración de dicha variable
    $retencion1 = $ingreso1 - ($ingreso1*ALICUOTA)/100;
    $retencion2 = $ingreso2 - ($ingreso2*ALICUOTA)/100;
    

    require_once('php/pie.php');
?>