<?php
    $rutaBootstrap = '../../';
    $rutaCss = '../css/';
    require_once 'encabezado.php';
?>

<?php

    if ( !empty($_POST['horas_trabajadas']) && !empty($_POST['turno']) && !empty($_POST['dias']) ) {
        
        $horas = $_POST['horas_trabajadas'];
        $turno = $_POST['turno'];
        
        echo '<p>Horas trabajadas: <strong>'.$horas.'</strong></p>';
        echo '<p>Turno: <strong>'.$turno.'</strong></p>';
        echo '<section class="d-flex flex-row justify-content-center"><table class="table table-bordered table-striped w-75">';
        echo '<thead class="text-center table-dark">
                <td>Día</td><td class="w-25">Honorario</td>
            </thead>';
        echo '<tbody>';
        require_once 'funciones.php';
        $pagoSemanal = 0;
        foreach ($_POST['dias'] as $dia) {
            $honorario = pagoDiario ($horas, $dia, $turno);
            echo '<tr><td class="text-start">'.$dia.'</td><td class="w-25 text-end">'.number_format($honorario,2,',','.').'</td></tr>';
            $pagoSemanal = $pagoSemanal + $honorario;
        }
        echo '<tr class="text-end"><td>Total</td><td>'.number_format($pagoSemanal,2,',','.').'</td></tr>';
        echo '</tbody>';
        echo '</table></section>';
    }

?>

<?php
    require_once 'pie.php';
?>