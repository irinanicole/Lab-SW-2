<?php
    
    function prMostrarMontosPagados ($nombre)
    {
        $ubicacion = '../../Ejercicio-02/archivos/';
        $nombreArchivo = 'enfermeria_honorarios.txt';

        $archivo = fopen($ubicacion.$nombreArchivo,'r');

        if ($archivo)
        {
            while (!feof($archivo))
            {
                $linea = fgets($archivo);
                $datos = explode(';',$linea);

                if ($datos[0] == $nombre)
                {
                    $pagado[$datos[3]] = $datos[4];
                }
                // else
                // {
                //     echo '<h2>No existe '.$nombre.' en los registros</h2>';
                // }
            }
            
            fclose($archivo);
            
            echo '<section class="d-flex flex-row justify-content-center"><table class="table table-bordered table-striped w-75">';
            echo '<thead class="text-center table-dark">
                    <td>Día</td><td class="w-25">Honorario</td>
                </thead>';
            echo '<tbody>';
            foreach ($pagado as $dia => $honorario)
            {
                echo '<tr><td class="text-start">'.$dia.'</td><td class="w-25 text-end">'.$honorario.'</td></tr>';
            }
            echo '</tbody>';
            echo '</table></section>';
        }
        else
        {
            echo '<p>No se pudo abrir el archivo</p>';
        }
    }

?>