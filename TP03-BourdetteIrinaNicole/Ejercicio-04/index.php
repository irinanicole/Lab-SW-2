<?php
    require_once 'php/encabezado.php';
?>
    <!-- Primer section con tabla -->
                <section>
                    <h2>Hot Sale</h2>
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Juego</th>
                                <th>Cantidad</th>
                                <th>Recaudado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Llamo a la pagina 'juegos.php' para incluir el vector $juegos
                                require_once 'php/juegos.php';
                                //print_r($juegos);
                                
                            // Defino un variable que cuente la cantidad de compras que se vayan haciendo:
                                $cantCompras = 0;
                            // Comienzo un bucle para que se repitan los descuentos por cada compra
                                $totalRecaudado = 0;
                            // Inicializo los contadores para cada juego vendido
                                $contJuego1 = 0;
                                $contJuego2 = 0;
                                $contJuego3 = 0;
                                $contJuego4 = 0;
                                $contJuego5 = 0;
                            // Inicializo los acumuladores para lo que se paga en total por cada juego
                                $pagoJuego1 = 0;
                                $pagoJuego2 = 0;
                                $pagoJuego3 = 0;
                                $pagoJuego4 = 0;
                                $pagoJuego5 = 0;
                            // GENERO UN ARREGLO QUE IRÁ CAMBIANDO SUS VALORES EN EL BUCLE PARA MÁS TARDE MOSTARLO POR PANTALLA CON UN foreach()
                                $vendidos = [   
                                                'Age Of Mythology Retold' => array (
                                                                                    $contJuego1,
                                                                                    $pagoJuego1
                                                                                    ),
                                                'NBA 2K25' => array (
                                                                    $contJuego2,
                                                                    $pagoJuego2
                                                                    ),
                                                'Baldurs Gate III' => array (
                                                                            $contJuego3,
                                                                            $pagoJuego3
                                                                            ),
                                                'Fallout 76' => array (
                                                                        $contJuego4,
                                                                        $pagoJuego4
                                                                        ),
                                                'CoD Black Ops 6' => array (
                                                                            $contJuego5,
                                                                            $pagoJuego5
                                                                            )
                                            ];
                            ?>
                            <?php

                                do {
                                    $cantCompras++; // comienza una nueva compra
                                    // echo '<p><strong>COMPRA ('.$cantCompras.')</strong></p>';
                                    // obtengo de manera aleatoria la clave de un solo juego por cada compra
                                    $clave_aleatoria = array_rand($juegos);
                                    // obtengo el precio de ese juego aleatorio
                                    $precio = $juegos[$clave_aleatoria];

                                    // Muestro el juego que salió y su precio (sin descuentos)
                                    // echo '<p>Juego: '.$clave_aleatoria.'</p>';
                                    // echo '<p>Precio: $'.$precio.'</p>';
                                    

                                    switch ($cantCompras) {
                                        
                                        case $cantCompras <= 10: // para las primeras 10 compras calcular...
                                            $pago = $precio - ($precio * 0.8);
                                            break;
                                        
                                        case $cantCompras <= 200: // para las siguientes 190 compras calcular...
                                            $pago = $precio - ($precio * 0.6);
                                            break;
                                        
                                        case $cantCompras <= 500: // para las siguientes 300 compras calcular...
                                            $pago = $precio - ($precio * 0.4);
                                            break;
                                            
                                        default: // para las 500 compras restantes calcular...
                                            $pago = $precio - ($precio * 0.3);
                                            break;
                                    }
                                    
                                    switch ($clave_aleatoria) {

                                        case 'Age Of Mythology Retold':
                                            $contJuego1++;
                                            $pagoJuego1 += $pago;
                                            // cambio los datos de la cantidad de juegos vendidos[0] y del total recaudado[1] por cada juego segun la clave (el nombre del juego)
                                            $vendidos[$clave_aleatoria][0] = $contJuego1;
                                            $vendidos[$clave_aleatoria][1] = $pagoJuego1;

                                            break;
                                        
                                        case 'NBA 2K25':
                                            $contJuego2++;
                                            $pagoJuego2 += $pago;

                                            $vendidos[$clave_aleatoria][0] = $contJuego2;
                                            $vendidos[$clave_aleatoria][1] = $pagoJuego2;
                                            
                                            break;
                                        
                                        case 'Baldurs Gate III':
                                            $contJuego3++;
                                            $pagoJuego3 += $pago;

                                            $vendidos[$clave_aleatoria][0] = $contJuego3;
                                            $vendidos[$clave_aleatoria][1] = $pagoJuego3;

                                            break;
                                        
                                        case 'Fallout 76':
                                            $contJuego4++;
                                            $pagoJuego4 += $pago;

                                            $vendidos[$clave_aleatoria][0] = $contJuego4;
                                            $vendidos[$clave_aleatoria][1] = $pagoJuego4;
                                            
                                            break;
                                        
                                        case 'CoD Black Ops 6':
                                            $contJuego5++;
                                            $pagoJuego5 += $pago;

                                            $vendidos[$clave_aleatoria][0] = $contJuego5;
                                            $vendidos[$clave_aleatoria][1] = $pagoJuego5;

                                            break;
                                    }

                                    // echo '<hr>';
                                    // voy sumando el total recaudado
                                    $totalRecaudado += $pago;

                                } while ($cantCompras <= 1000);

                            ?>

                            <?php
                                // buscando en el sitio https://www.php.net/manual/es/control-structures.foreach.phpinfo
                                // encontré la forma de usar un foreach() cuando tengo una matriz como arreglo.
                                // Mediante prueba y error descubrí que utilizando el concepto 'foreach($array as $clave => $a)' y el 'foreach ($array as list($a,$b))', podía adaptar mi caso como un 'foreach($array as $clave => list($a,$b))' como se ve a continuación:
                                 foreach ($vendidos as $nombreJuego => list($totalJuegosVendidos,$totalRecaudadoPorJuego)) {
                                     echo '<tr><td>'.$nombreJuego.'</td><td>'.$totalJuegosVendidos.'</td><td>'.$totalRecaudadoPorJuego.'</td></tr>';
                                 }
                                 // y así queda creada una tabla con 6 fila y 3 columnas: 1 fila de encabezado y otras 5 filas por cada uno de los juegos.
                            ?>
                        </tbody>
                    </table>
                </section>

    <!-- Segundo section con total recaudado -->
                <section style="background-color: lightgreen;">
                    <?php
                        $total = number_format($totalRecaudado,2,'.',','); // muestro el resultado final con 2 decimales
                        echo '<h2>Total Recaudado: $'.$total.'</h2>';
                    ?>
                </section>

<?php
     require_once 'php/pie.php';
?>