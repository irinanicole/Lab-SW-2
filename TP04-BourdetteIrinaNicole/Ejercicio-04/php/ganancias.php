<?php
    $rutaBtsp = '../../';
    $rutaCss = '../css/';
    require_once 'encabezado.php';
?>

<?php
    if (!empty($_POST['deposito_inicial']) && !empty($_POST['plazo_dias']))
    {
        require_once 'funciones.php';

        $deposito = $_POST['deposito_inicial'];
        $plazo = $_POST['plazo_dias'];

        $intereses = calcularIntereses($deposito, $plazo);

        $montoTotal = $deposito + $intereses;

        echo '<section class="d-flex justify-content-center"><section class="p-2 section-ganancias text-center">';

        echo '<p>Depósito: <strong>$'.number_format($deposito,2,',','.').'</strong></p>';
        echo '<p>Plazo: <strong>'.$plazo.'</strong> días</p>';
        echo '<p>Interés generado: <strong>$'.number_format($intereses,2,',','.').'</strong></p>';
        echo '<p><strong>Monto Total: $'.number_format($montoTotal,2,',','.').'</strong></p>';

        echo '</section></section>';

    }
?>

<?php
    require_once 'pie.php';
?>