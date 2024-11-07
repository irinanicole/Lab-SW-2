<?php
    $rutaBootstrap = '../../';
    $rutaCss = '../css';
    require_once 'encabezado.php';
?>

<section id="respuesta-login">
    <?php
        if ( !empty($_POST['correo']) && !empty($_POST['contra']) )
        {
            echo '<h2 class="text-center">Datos ingresados</h2><br>';
            echo '<p>Correo: <strong>'.$_POST['correo'].'</strong></p>';
            echo '<p>Contraseña: <strong>'.$_POST['contra'].'</strong></p>';
        }
    ?>
</section>


<?php
    require_once 'pie.php';
?>