<?php
    require_once 'php/encabezado.php';

    // defino CONSTANTES
    define ('APORTE_JUBILATORIO', 13);
    define ('OBRA_SOCIAL', 3.5);
    // asigno un nombre al empleado
    $nombreEmpleado = 'Irina Nicole Bourdette';
    // creo la variable del sueldo básico que tendrá un valor entre 600.000 y 790.000
    $sueldoBasico = mt_rand(600000,790000);
    // Calculo los descuentos en base al sueldo Básico y los guardo en variables auxiliares
    $descuentoAporteJub = $sueldoBasico * (APORTE_JUBILATORIO/100);
    $descuentoObraSocial = $sueldoBasico * (OBRA_SOCIAL/100);
    // Calculo SUELDO NETO
    $sueldoNeto = $sueldoBasico - ($descuentoAporteJub + $descuentoObraSocial);

?>

<table class="table table-responsive table-borderless caption-top">
    <caption class="text-center">
        <strong><?php echo $nombreEmpleado;?></strong>
    </caption>
    <thead>
        <tr>
            <th scope="col">Concepto</th><th scope="col">Remuneración</th><th scope="col">Descuento</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td scope="row">Sueldo básico</td>
            <td>$ <?php echo number_format($sueldoBasico,2,',','.');?></td>
            <td></td>
        </tr>
        <tr>
            <td scope="row">Aporte jubilatorio</td>
            <td></td>
            <td>$ <?php echo number_format($descuentoAporteJub,2,',','.');?></td>
        </tr>
        <tr>
            <td scope="row">Obra social</td>
            <td></td>
            <td>$ <?php echo number_format($descuentoObraSocial,2,',','.');?></td>
        </tr>
        <tr>
            <td colspan="2" scope="row"><strong>Sueldo Neto</strong></td>
            <td><strong>$ <?php echo number_format($sueldoNeto,2,',','.');?></strong></td>
        </tr>
    </tbody>
</table>

<?php
    require_once 'php/pie.php';
?>