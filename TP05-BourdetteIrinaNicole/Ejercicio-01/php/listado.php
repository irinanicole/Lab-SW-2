<?php
    $rutaBootstrap = '../../';
    $rutaCss = '../css';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TP05 - Ejercicio 01</title>
    <link rel="stylesheet" href="<?php echo $rutaBootstrap?>/bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $rutaCss?>/estilo.css">
</head>
<body>
    <header class="d-flex flex-row justify-content-end align-items-center"> <!-- arreglo el header para que se acomode todo a la izquierda -->
    <?php
        $usuario = $_GET['usu']; // utilizo este dato de la página 'logueo.php' para buscar la imagen específica de ese usuario
        $archivo = fopen('../txt/usuarios.txt','r');
        while (!feof($archivo))
        {
            $registro = fgets($archivo);
            $separados = explode(';',$registro);
            if ($usuario === $separados[0])
            { // muestro el usuario y la imagen de ese usuario por pantalla dnetro del '<header>'
                echo '<h1>'.$separados[0].'</h1>';
                echo '<img class="img-fluid rounded m-2 p-1" style="width: 10%;height: 10%;" src="../img/'.$separados[2].'">';
                break;
            }
        }
        fclose($archivo);

        
    ?>
    </header>
    <main>
        <section>
<?php
    require_once 'pie.php';
?>