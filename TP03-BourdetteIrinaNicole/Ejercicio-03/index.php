<?php
    require_once 'php/encabezado.php'; // linkeo el código del encabezado de la pagina con el 'index.php'
?>

<!-- CONTENIDO DE LA TABLA A CONTINUACION -->

<?php // ----> ARMO MI ARREGLO PARA COMPLETAR EL CARTON CON EL QUE JUGARÉ EN CÓDIGO PHP <----
    $miCarton = ['01','05','06','07','09','10','13','15','19','20'];
?>
<!-- A CONTINUACION LA TABLA EN HTML -->
        <section>
            <h2>Mi Cartón</h2>
            <table class="table table-bordered table-warning text-center" style="width: 30%;">
                <tbody>
                    <?php // procedo a mostrar en una tabla todos los numeros de mi cartón
                        for ($i=0; $i<10; $i++) {
                            if ($i==0) {                            // si es fila 1 columna 1
                                echo '<tr><td><strong>'.$miCarton[$i].'</strong></td>';// crea una fila y una columna (por única vez)
                            } else if ($i%2!==0) {                  // si es fila 2
                                echo '<td><strong>'.$miCarton[$i].'</strong></td></tr>';// crea una nueva columna y cierra fila
                            } else {                                // si es fila 1
                                echo '<tr><td><strong>'.$miCarton[$i].'</strong></td>'; // crea una nueva fila y una nueva columna
                            }
                        }
                    ?>
                </tbody>
            </table>
        </section>

<!-- EL SIGUIENTE PASO SERÁ MOSTRAR LOS RESULTADOS (creados aleatoriamente) QUE PUDIERON SALIR DESDE EL NRO 1 AL 22 (rango) -->
        <section>
            <h2>Sorteo</h2>
            <table class="table table-bordered table-info text-center" style="width: 80%;">
                <tbody>
                    <?php
                        $min=1; $max=22;
                        for ($j=0; $j<10; $j++) { //genero los resultados aleatorios y los voy guardando en un array
                            $num = mt_rand($min,$max);
                            if ($j==0) { // el primer valor se guarda directamente en el primer lugar del arreglo
                                $resultados[0] = $num;
                            } else if (!in_array($num,$resultados)) { // me aseguro de que no se vaya a repetir un valor dentro del array y ejecuto lo mismo pasos que en la condición anterior para tener numeros de 2 cifras 
                                $resultados[$j] = $num;
                            } else { // me aseguro de que se ocupen 10 lugares en el arreglo y sin espacios vacíos de por medio.
                                $j--;
                            }
                        }
                        // Le agrego un cero delante para los numeros menores a 10
                        foreach ($resultados as $index => $valor) {
                            if ($valor < 10) {
                                $resultados [$index] = "0" . $valor;
                            }
                        }
                    ?>
                    <!-- ¡AHORA DEBO COMPROBAR SI MI CARTÓN ES EL CARTÓN GANADOR! -->
                    <?php
                        $asiertos = 0;
                        for ($k=0; $k<10; $k++) {
                            $num = $miCarton[$k]; // agarro un valor de mi carton y lo comparo con cada uno de los valores del arreglo $resultados hasta terminar el carton
                            foreach ($resultados as $valor) {
                                if ($num == $valor) {
                                    $asiertos++; // voy sumando la cantidad de asiertos
                                }
                            }
                        }
                    ?>
                    <!-- ORDENO LOS NUMEROS DE MANERA ASCENDENTE Y LOS MUESTRO POR PANTALLA -->
                    <?php
                        //print_r($resultados);
                        //echo '<hr>';
                        sort($resultados); // solo los elementos del arreglo cambian su orden... los índices quedan como están
                        //print_r($resultados);
                        for ($j=0; $j<10; $j++) {
                            if ($j==0 || $j==5) {                            // si es el comienzo de una fila
                                echo '<tr><td><strong>'.$resultados[$j].'</strong></td>';// crea una fila y la primera columna de esa fila
                            } else if ($j==4 || $j==9) {                  // si es el final de una fila
                                echo '<td><strong>'.$resultados[$j].'</strong></td></tr>';// crea la ultima columna y cierra esa fila
                            } else {                                // si no comienza ni termina una fila, es decir, se encuentra entre la 2da y 4ta columna
                                echo '<td><strong>'.$resultados[$j].'</strong></td>'; // escribe una columna por cada numero
                            }
                        }
                    ?>
                </tbody>
            </table>
            <!-- MUESTR LA CANTIDAD DE ASIERTOS -->
            <?php
                if ($asiertos == 10) {
                    echo '<p>¡¡¡<strong>WOW, HAS GANADO EL POZO DE $35.000.000!!!</strong></p>';
                    ECHO '<p><strong>¡¡¡¡MUCHAS FELICIDADES!!!!</strong></p>';
                } else {
                    echo '<p><strong>Aciertos: '.$asiertos.'</strong></p>';
                }
            ?>
        </section>

<!-- TERMINO EL CÓDIGO DE LA TABLA EN HTML -->

<?php
    require_once 'php/pie.php';
?>