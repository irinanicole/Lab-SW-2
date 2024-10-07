<?php
    require_once('php/encabezado.php');

    $penDrive = 16; //defino variable $penDrive
    echo '/////////////////////////////////';
    echo '<h2>Tamaño Pen Drive: ', $penDrive, ' GB</h2>'; //muestro por pantalla el valor para verificar
    //determino el rango para darles avlores aleatorios a los archivos
    $valorIniciaL = 2500;
    $valorFinal = 4000;
    echo '/////////////////////////////////';
    echo '<h3>Tamaños en MB:</h3>';
    // declaro las variables para cada archivo y le doy un valor aleatorio con el rango definido anteriormente
    $archivo1 = mt_rand($valorIniciaL, $valorFinal);
    echo '<p>Tamaño Archivo 1: ', $archivo1, ' MB</p>'; //muestro el valor
    $archivo2 = mt_rand($valorIniciaL, $valorFinal);
    echo '<p>Tamaño Archivo 2: ', $archivo2, ' MB</p>'; //muestro el valor
    $archivo3 = mt_rand($valorIniciaL, $valorFinal);
    echo '<p>Tamaño Archivo 3: ', $archivo3, ' MB</p>'; //muestro el valor
    ////////
    const FACTOR = 1000; // DEFINO LA CONSTANTE 'FACTOR'
    ////////
    echo '/////////////////////////////////';
    // Realizo las conversiones de los tamaños de MB a GB con la constante ya definida
    // y acomodo los valores obtenidos para que solo se muestren 2 decimales
    echo '<h3>Tamaños en GB:</h3>';
    $archivoA = $archivo1/FACTOR;
    $archivoA1 = number_format($archivoA, 2, ',', '.');
    echo '<p>Tamaño Archivo 1: ', $archivoA1, ' GB</p>';
    $archivoB = $archivo2/FACTOR;
    $archivoB2 = number_format($archivoB, 2, ',', '.');
    echo '<p>Tamaño Archivo 2: ', $archivoB2, ' GB</p>';
    $archivoC = $archivo3/FACTOR;
    $archivoC3 = number_format($archivoC, 2, ',', '.');
    echo '<p>Tamaño Archivo 3: ', $archivoC3, ' GB</p>';
    /////////////////////////////////
    echo '/////////////////////////////////';
    $disponible = $penDrive - ($archivoA + $archivoB + $archivoC);
    $disponible2 = number_format($disponible, 2, ',', '.');
    echo '<h2>Tamaño Disponible en PenDrive: ', $disponible2,' GB</h2>';

    require_once('php/pie.php');
?>