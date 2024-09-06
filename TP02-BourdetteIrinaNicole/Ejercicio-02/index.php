<?php
    require_once("php/encabezado.php");
    
    echo ("<p><strong>Inicio -index.php-</strong></p>");
    
    // defino la constante que almacenará las 2 primeras letras
    
    const LETRAS = 'AG';
    echo("<p>Las letras constantes son: <strong>".LETRAS."</strong></p>");
    
    // defino la variable para almacenar el numero y le doy un valor aleatorio dentro de un rango
    
    $minNum=0;
    $maxNum=999;
    
    $num = mt_rand($minNum , $maxNum);
    echo("<p>El numero aleatorio es: <strong>".$num."</strong></p>");

    //defino las 2 variables que contendrán las letras faltantes para formar la patente

    //defino rango para codigo ASCII:    
    $minLetra=66;
    $maxLetra=90;

    $miAscii01 = (mt_rand($minLetra , $maxLetra)); //primero consigo el numero
    $letra1= chr($miAscii01); //luego lo convierto a su caracter determinado segun el codigo ascii
    echo ("<p>El penútimo caracter es: <strong>". $letra1 . "</strong></p>");
    // Repito las mismas operaciones para la segunda variable:
    $miAscii02 = mt_rand($minLetra , $maxLetra);
    $letra2= chr($miAscii02);
    echo ("<p>El útimo caracter es: <strong>". $letra2 . "</strong></p>");

    // Muetro por pantalla la pantente resultante:

    if ($num <= 9) { //si el numero que salió es sólo de 1 cifra
        echo("<p><strong>PATENTE: ".LETRAS."00".$num.$letra1.$letra2."</strong></p>");
    } elseif ($num > 9 && $num <= 99) { //si el numero que salió es sólo de 2 cifras
        echo("<p><strong>PATENTE: ".LETRAS."0".$num.$letra1.$letra2."</strong></p>");
    } else {
        echo("<p><strong>PATENTE: ".LETRAS.$num.$letra1.$letra2."</strong></p>");
    }

    require_once("php/pie.php");
?>