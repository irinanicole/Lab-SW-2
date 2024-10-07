<?php
    $rutaBtsp = '../../';
    $rutaCss = '../css/';
    require_once 'encabezado.php';

    // TRABAJO CON ARCHIVO sueldos.csv //
    if (!empty($_GET['legajo']))
    {
        $numLegajo = $_GET['legajo'];

        $carpeta = '../archivos/';
        // me aseguro de que exista una carpeta que contenga al archivo 'suelvos.csv'
        if (!file_exists($carpeta))
        {
            mkdir($carpeta);
        }
        // abro el archivo solo para leer
        $archivo = fopen($carpeta.'sueldos.csv','r');

        $existe = false;

        // solo si el archivo se pudo abrir...
        if ($archivo)
        {
            while (!feof($archivo))
            {
                $linea = fgets($archivo);
                $registros = explode(';',$linea);

                if ($registros[0] == $numLegajo)
                {
                    $existe = true;
                    ?>
                        <main class="container my-3">
                            <!-- Primer section con dos sections internos, sin margen inferior -->
                            <section class="row mb-0">
                                <section class="col-12 col-md-4 section-legajo">
                                    <h4>Legajo:</h4>
                                    <?php echo '<h5>'.$registros[0].'</h5>'; ?>
                                </section>
                                <section class="col-12 col-md-8 section-nombre">
                                    <h4>Apellido y Nombre:</h4>
                                    <?php echo '<h5>'.$registros[1].', '.$registros[2].'</h5>'; ?>
                                </section>
                            </section>

                            <!-- Segundo section sin borde -->
                            <section class="row">
                                <section class="col-12 section-sueldo text-center">
                                    <h4>Sueldo a cobrar:</h4>
                                    <?php echo '<h5>$ '.$registros[3].'</h5>'; ?>
                                </section>
                            </section>
                        </main>
                    <?php
                    break;
                }
            }

            if (!$existe) // si el num de legajo no fue encontrado le muestro el mensaje por pantalla y luego lo mando devuelta a la pagina del index
            {
                ?>
                <main class="container my-3">
                    <section class="text-center p-2 border border-rounded bg bg-danger bg-opacity-50">
                        <h2>Legajo Inexistente</h2>
                    </section>
                </main>
                <?php

                header('refresh:3;url=../index.php');
            }
        }
    }



?>

<?php
    require_once 'pie.php';
?>