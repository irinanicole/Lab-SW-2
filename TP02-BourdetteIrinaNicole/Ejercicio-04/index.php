<?php
    require_once("php/encabezado.php");
    
    echo ("<p><strong>Inicio -index.php-</strong></p>");
    
    // Creo un rango para determinar el dinero dsponible para realizar una compra, de manera aleatoria
    $min = 200000;
    $max = 400000;

    $disponible = mt_rand($min,$max);
    $disponiblePrint = number_format($disponible,0,',','.');
    echo("<p>Dinero Disponible: $<strong>".$disponiblePrint."</strong></p>");

    // calculo que valor adoptará la comisión de la compra según lo gastado:
    $comision = ($disponible < 300000) ? '0.01':'0.05' ;
    echo("<p>Comisión: <strong>".($comision*10)."%</strong></p>");
    // el valor restante que queda luego de realizar la compra:
    $restante = $disponible - ($disponible * $comision);
    $restantePrint = number_format($restante,2,',','.');
    echo("<p>Dinero Restante: $<strong>".$restantePrint."</strong></p>");

    // Defino la constante de la cotizacion de la cripto:
    define('USDT',1322.74);
    echo("<p>Cotización USDT: $<strong>".USDT."</strong></p>");

    // Calculo la cantidad de cripto comprados:
    $criptoCompra = ($restante / USDT) ;

    // Muestro la cantidad comprada redondeada a 4 decimales
    $criptoCompraPrint = number_format($criptoCompra, 4, ',', '.');
    echo("<p>USDT adquiridos: <strong>".$criptoCompraPrint."</strong></p>");


    require_once("php/pie.php");
?>