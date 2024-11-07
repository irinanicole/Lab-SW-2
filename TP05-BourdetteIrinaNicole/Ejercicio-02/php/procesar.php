<?php
    $rutaBootstrap = '../../';
    $rutaCss = '../css/';
    require_once 'encabezado.php';
?>

<?php

    if ( !empty($_POST['horas_trabajadas']) && !empty($_POST['turno']) && !empty($_POST['dias']) && !empty($_POST['nombre']) ) {
        
        $nombre = $_POST['nombre'];
        $horas = $_POST['horas_trabajadas'];
        $turno = $_POST['turno'];

        echo '<p>Nombre: <strong>'.$nombre.'</strong></p>';
        echo '<p>Horas trabajadas: <strong>'.$horas.'</strong></p>';
        echo '<p>Turno: <strong>'.$turno.'</strong></p>';
        echo '<section class="d-flex flex-row justify-content-center"><table class="table table-bordered table-striped w-75">';
        echo '<thead class="text-center table-dark">
                <td>Día</td><td class="w-25">Honorario</td>
            </thead>';
        echo '<tbody>';
        require_once 'funciones.php';
        $pagoSemanal = 0;
        foreach ($_POST['dias'] as $dia)
        {
            $honorario = pagoDiario ($horas, $dia, $turno);
            $honorario2 = number_format($honorario,2,',','.');

            // TRABAJO DE ARCHIVOS //

            $registro = $nombre.';'.$horas.';'.$turno.';'.$dia.';'.$honorario2;

            $registro = trim($registro);

            $carpeta = '../archivos/';
            if (!file_exists($carpeta))
            {
                mkdir($carpeta);
            }
            $nombreArchivo = 'enfermeria_honorarios.txt';

            $archivo = fopen($carpeta.$nombreArchivo,'a');

        if ($archivo) // verifica que se haya abierto el archivo
            {
                $nuevaLinea = fputs($archivo,$registro.PHP_EOL);
                if ($nuevaLinea)
                {
                    //echo '<p class="text-center"><strong>Guardado exitoso</strong></p>';
                    fclose($archivo);
                }
                else
                {
                    echo '<p class="text-center"><strong>No se pudo guardar los datos</strong></p>';
                }
            }
            else
            {
                echo '<p>No se pudo abrir el archivo</p>';
            }

            // FIN DEL TRABAJO DE ARCHIVO //

            // contenido tabla: dias y honorarios
            echo '<tr><td class="text-start">'.$dia.'</td><td class="w-25 text-end">'.$honorario2.'</td></tr>';
            $pagoSemanal = $pagoSemanal + $honorario;
            //
        }
        $pagoSemanal2 = number_format($pagoSemanal,2,',','.');
        echo '<tr class="text-end"><td>Total</td><td>'.$pagoSemanal2.'</td></tr>';
        echo '</tbody>';
        echo '</table></section>';

    }
?>

<?php
    require_once 'pie.php';
?>