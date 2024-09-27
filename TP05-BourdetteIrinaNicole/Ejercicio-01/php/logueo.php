<?php
    $rutaBootstrap = '../../';
    $rutaCss = '../css';
    require_once 'encabezado.php';
?>

<section id="respuesta-login">
    <?php
        if ( !empty($_POST['correo']) && !empty($_POST['contra']) )
        {
            $correo = trim($_POST['correo']); //elimino espacios en blanco con la funcion "trim()"
            $contra = trim($_POST['contra']);
            
            echo '<h2 class="text-center">Datos ingresados</h2><br>';
            echo '<p>Correo: <strong>'.$correo.'</strong></p>';
            echo '<p>Contraseña: <strong>'.$contra.'</strong></p>';

            $archivo = fopen('../archivo/usuarios.txt','') ;

            $acceso = false;

            if ($archivo)
            {
                while (!feof($archivo)) // mientras no se llegue al final del archivo
                {
                    $registro = fgets($archivo); // lee una linea del texto por vez (en cada iteracion)
                    $registroArray = explode(';',trim($registro)); //convierte a un arreglo cada linea del archivo txt

                }
            }



        } 
        else
        {
            echo '<h2 class="text-center">Datos incorrectos</h2>'; // muestra el mensaje de error
            header('refresh:3;url=../index.php'); // refresca la pagina durante 3 seg y redirecciona devuelta al index
        }
    ?>
</section>


<?php
    require_once 'pie.php';
?>