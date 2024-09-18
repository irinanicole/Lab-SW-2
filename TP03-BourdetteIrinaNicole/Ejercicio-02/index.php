<?php
    require_once 'php/encabezado.php';

    // Genero un numero aleatorio entre 8 y 16 para establecer la cantidad de caracteres que tendrá la contraseña:
    $min= 8; $max=16;
    $cantCarac = mt_rand($min,$max);
    echo '<p>Cantidad de caracteres: '.$cantCarac.'</p>';

    // Creo los valores minimos y maximos para obtener los diferentes numeros ascii que luego serán convertidos a caracter, uno por uno, y almacenados todos en un arreglo de dimension '$cantCarac' con nombre '$contraseña[]'
    $valorMin=48; $valorMax=122;
    for ($i=0; $i < $cantCarac; $i++) { 
        $num = mt_rand($valorMin,$valorMax);
        if ($num <= 57 || ($num >= 65 && $num <= 90) || $num >=97) { // VERIFICO QUE EN EL ARREGLO NO HAYA OTRO TTIPO DE CARACTERES MÁS QUE NUMEROS, MAYÚSCULAS Y MINÚSCULAS.
            $contraseña[] = chr($num);
        } else {
            $i--; // EN CASO DE QUE NO SE HAYA CUMPLIDO LA CONDICIÓN ANTERIOR, HABRÁ UN LUGAR EN LA CONTRASEÑA QUE NO SE HABRÁ LLENADO Y EL BUCLE IGUAL LO TOMARÁ COMO UNA REPETICIÓN MENOS QUE REALIZAR, A MENOS QUE YO ALTERE EL VALOR DE $i, HACIENDO DE CUENTA QUE ESTA ITERACIÓN NUNCA PASÓ VUELVA A TRABAJAR CON ESTE VALOR DE $i HASTA QUE PUEDA LLENAR EL ESPACIO.
        }
    }
    // print_r ($contraseña); --> SOLO LO UTILICÉ PARA VERIFICAR QUE EL ARREGLO SE HABÍA GUARDADO BIEN

    echo '<p>La nueva contraseña es: <strong>';
    for ($j=0; $j < $cantCarac; $j++) {
        echo $contraseña[$j];
    }
    echo '</strong></p>';


    require_once 'php/pie.php';
?>