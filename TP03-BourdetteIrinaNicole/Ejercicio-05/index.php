<?php
    require_once 'php/encabezado.php';
?>

<?php

    $caracteres = array ('-' => 'guion', 'B' => 'b_larga');
    $contBombas = 0;
    $espacios = 8;

    for ($i=0; $i < 10; $i++) { 
        for ($j=0; $j < 10; $j++) { 
            $carac_alea = array_rand ($caracteres);
            if ($carac_alea == 'B') {
                if ($contBombas < 10 && $espacios >= 8) {
                    $matriz[$i][$j] = 'B';
                    $contBombas++;
                    $espacios = 0;
                } else {
                    $matriz[$i][$j] = '-';
                    $espacios++;
                }
            } else {
                $matriz[$i][$j] = '-';
                $espacios++;
            }
        }
    }

    // print_r($matriz);
?>
        <table class="table table-responsive table-secondary table-borderless align-middle w-25 h-100">
            <!-- Generar una tabla 10x10 -->
            <tbody>
                <!-- Crear filas de la tabla -->
                <!-- Puedes generar las celdas automáticamente con un bucle si usas un lenguaje de servidor o JavaScript -->
                <!-- Aquí está el ejemplo estático -->
                <?php
                    for ($i = 0; $i <10; $i++) {
                        echo '<tr>';
                        for ($j = 0; $j <10; $j++) {
                            if ($matriz[$i][$j] == 'B') {
                                echo '<td class="p-0">
                                            <img src="img/mina.jpg" alt="bomba" class="img-fluid w-100 h-100">
                                    </td>';
                            } else {
                                echo '<td class="p-0">
                                            <img src="img/vacio.jpg" alt="espacio vacío" class="img-fluid w-100 h-100">
                                    </td>';
                            }
                        }
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <section class="bg bg-success p-3">
            <?php
                $min = 1; $max = 10;
                $sigueJugando = true;
                $puntos = 0;
                do {
                    $num1 = mt_rand ($min,$max);
                    $num2 = mt_rand ($min,$max);
                    if ($matriz[($num1-1)][($num2-1)] == 'B') {
                        $sigueJugando = false;
                    } else {
                        $puntos++;
                    }
                } while ($sigueJugando == true);

                echo '<p><strong>Bomba hallada en la casilla: ['.$num1.']['.$num2.']</strong></p>';
                echo '<p><strong>Puntos Obtenidos: '.$puntos.'</strong></p>';
            ?>     
        </section>

<?php
    require_once 'php/pie.php';
?>