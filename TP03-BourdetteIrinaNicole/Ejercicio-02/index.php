<?php
    require_once 'php/encabezado.php';

    // Genero un numero aleatorio entre 8 y 16 para establecer la cantidad de caracteres que tendrá la contraseña:
    $min= 8; $max=16;
    $cantCarac = mt_rand($min,$max);
    echo '<p>Catidad de caracteres: '.$cantCarac.'</p>';

    $valorMin=48; $valorMax=122;
    for ($i=0; $i < $cantCarac; $i++) { 
        $num = mt_rand($valorMin,$valorMax);
        if ($num <= 57 || ($num >= 65 && $num <= 90) || $num >=97) {
            $caracter[] = chr($num);
        } else {
            $i--;
        }
    }
    print_r ($caracter);

    echo '<p>';
    for ($j=0; $j < $cantCarac; $j++) {
        echo '['.$caracter[$j].']';
    }
    echo '</p>';

?>

    <!-- Contenido centrado dentro del section -->
    <p>Contenido centrado dentro del section</p>

<?php
    require_once 'php/pie.php';
?>