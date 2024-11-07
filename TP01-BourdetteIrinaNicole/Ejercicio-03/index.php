<?php
    require_once('php/encabezado.php');
                
    // a) Declaración de constante 'ALICUOTA':
    
    const ALICUOTA = 2.5; //retención por impuesto de Ingresos Brutos en el rubro informático

?> 
<!-- Termina codigo PHP para continuar en codigo html -->
<table class="table table-success table-responsive caption-top table-bordered w-50"> <!-- Codigo en HTML -->
    <caption class="text-center"><h3>Estado de la Cuenta</h3></caption> 
    <thead>
        <tr> <!--FILA 0-->
            <th scope="col">Concepto</th><th scope="col">Monto</th>
        </tr>
    </thead>
    <tbody>
        <tr><!-- Termina codigo HTML para continuar en php--><!--FILA 1-->
            <?php // Codigo en PHP

                // b.1) Determino el rango para el monto segun las transferencias ENTRANTES
                
                $valorInicialEntrante = 220000;
                $valorFinalEntrante = 350000;
                
                // b.2) Declaración y cálculo de valor de variables para representar las transferencias ENTRANTES
                
                $entrante1 = mt_rand($valorInicialEntrante, $valorFinalEntrante);
                $entrante1Print = number_format($entrante1,2,',','.');
                echo '<td>Transferencia entrante</td><td><strong>+$'. $entrante1Print .'</strong></td>';
            ?> <!--termina codigo php-->
        </tr>
        <tr><!-- termina codigo html --><!--FILA 2-->
            <?php
            // c) Cálculo de retención de entrantes y declaración de dicha variable por cada ingreso:
            
            $retencion1 = ($entrante1*ALICUOTA)/100;
            $retencion1Print = number_format($retencion1,2,',','.');
            echo '<td>Retención IIBB</td><td><strong>-$'. $retencion1Print .'</strong></td>';
            ?> <!--termina codigo php-->
        </tr>
        <tr><!-- termina codigo html --><!--FILA 3-->
            <?php
            //b.2)
                $entrante2 = mt_rand($valorInicialEntrante, $valorFinalEntrante);
                $entrante2Print = number_format($entrante2,2,',','.');
                echo '<td>Transferencia entrante</td><td><strong>+$'. $entrante2Print .'</strong></td>';
            ?> <!--termina codigo php-->
        </tr>
        <tr><!-- termina codigo html --><!--FILA 4-->
            <?php
            //c)
                $retencion2 = ($entrante2*ALICUOTA)/100;
                $retencion2Print = number_format($retencion2,2,',','.');
                echo '<td>Retención IIBB</td><td><strong>-$'. $retencion2Print .'</strong></td>';
            ?> <!--termina codigo php-->
        </tr>
        <tr><!-- termina codigo html --><!--FILA 5-->
            <?php
                // d.1) Determino el rango para el monto segun las transferencias SALIENTES
                
                $valorInicialSaliente = 80000;
                $valorFinalSaliente = 130000;

                // d.2) Declaración y cálculo de valor de variables para representar las transferencias SALIENTES
                
                $saliente1 = mt_rand($valorInicialSaliente, $valorFinalSaliente);
                $saliente1Print = number_format($saliente1,2,',','.');
                echo '<td>Transferencia saliente</td><td><strong>-$'. $saliente1Print .'</strong></td>';
            ?> <!--termina codigo php-->
        </tr>
        <tr><!-- termina codigo html --><!--FILA 6-->
            <?php
            // d.2)
                $saliente2 = mt_rand($valorInicialSaliente, $valorFinalSaliente);
                $saliente2Print = number_format($saliente2,2,',','.');
                echo '<td>Transferencia saliente</td><td><strong>-$'. $saliente2Print .'</strong></td>';
            ?> <!--termina codigo php-->
        </tr>
        <tr><!-- termina codigo html --><!--FILA 7-->
            <?php
                // e) A continuación se realizaron los cálculos auxiliares necesarios para obtener el SALDO_FINAL de la cuenta:
                
                $totalEntrantes = ($entrante1 - $retencion1) + ($entrante2 - $retencion2); //teniendo en cuenta las retenciones aplicadas por cada ingreso
                $totalSalientes = $saliente1 + $saliente2;
                
                $saldoFinal = $totalEntrantes - $totalSalientes;
                $saldoFinalPrint = number_format($saldoFinal,2,',','.');
                echo '<td><strong>Saldo</strong></td><td><strong>$'. $saldoFinalPrint .'</strong></td>';
            ?> <!--termina codigo php-->
        </tr>
        
    </tbody>
</table>
<!-- termina codigo html -->
<!-- Continua codigo PHP para enlazar con la parte del footer de la pagina y para cerrarla -->
<?php
    require_once('php/pie.php');
?>