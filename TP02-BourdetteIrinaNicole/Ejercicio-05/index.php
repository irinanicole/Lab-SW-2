<?php
    require_once("php/encabezado.php");
    
    echo ("<p><strong>Inicio -index.php-</strong></p>");
    
    //defino las variables de los naipes y les doy un valor aleatorio con el rango...
    $min = 1;
    $max = 12;
    // ... y luego...
    $naipe1 = mt_rand($min,$max); // Primer Naipe
    switch ($naipe1) {
        case '10':
            echo("<p>Naipe 1: <strong>Sota</strong></p>");
            $naipe1 = 0.5;
            break;
        
        case '11':
            echo("<p>Naipe 1: <strong>Caballo</strong></p>");
            $naipe1 = 0.5;
            break;
        
        case '12':
            echo("<p>Naipe 1: <strong>Rey</strong></p>");
            $naipe1 = 0.5;
            break;
        
        default:
            echo("<p>Naipe 1: <strong>".$naipe1."</strong></p>");
            break;
    }
    $naipe2 = mt_rand($min,$max); // Segundo Naipe
    switch ($naipe2) {
        case '10':
            echo("<p>Naipe 2: <strong>Sota</strong></p>");
            $naipe2 = 0.5;
            break;
        
        case '11':
            echo("<p>Naipe 2: <strong>Caballo</strong></p>");
            $naipe2 = 0.5;
            break;
        
        case '12':
            echo("<p>Naipe 2: <strong>Rey</strong></p>");
            $naipe2 = 0.5;
            break;
        
        default:
            echo("<p>Naipe 2: <strong>".$naipe2."</strong></p>");
            break;
    }
    
    // Realizo la suma  de los naipes para conocer los puntos obtenidos y en el caso de que lo haya, indicar si es 'Ganador'...
    $suma = $naipe1 + $naipe2;
    // Analizo el resultado e informo al jugador de dicho resultado:
    $respuesta = ($suma === 9.5) ? '<strong>¡GANADOR!</strong>' : '<strong>PUNTAJE OBTENIDO: '.$suma.'</strong>';
    echo($respuesta);


    require_once("php/pie.php");
?>