<?php
    $rutaBootstrap = '../../';
    $rutaCss = '../css';
    require_once 'encabezado.php';
?>

<section id="respuesta-login">
    <?php
        if ( !empty($_POST['usuario']) && !empty($_POST['contra']) )
        {
            $usuario = trim($_POST['usuario']); //elimino espacios en blanco con la funcion "trim()"
            $contra = trim($_POST['contra']);
           
            $archivo = fopen('../txt/usuarios.txt','r') ; // abro el archivo para SOLO LECTURA

            $acceso = false; // en caso de que el usuario y/o contraseña no coincidan

            if ($archivo)
            {
                while (!feof($archivo)) // mientras no se llegue al final del archivo
                {
                    $linea = fgets($archivo); // lee una linea del texto por vez (en cada iteracion) hasta llegar al final del archivo
                    $separados = explode(';',trim($linea)); // convierto a un arreglo cada linea del archivo txt
                    if ($usuario === $separados[0] && $contra === $separados[1])
                    {
                        $acceso = true; // el usuario y la contraseña coinciden
                        break;
                    }
                }

                if ($acceso) // redirige a la pagina 'listado.php' pasándole el dato del usuario en un arreglo '$_GET[]'; 
                {
                    header('refresh:0;url=listado.php?usu='.$usuario);
                }
                else
                {
                    echo '<h2 class="text-center p-3 bg bg-danger bg-opacity-50 rounded">Datos incorrectos</h2>'; // muestra el mensaje de error
                    header('refresh:3;url=../index.php'); // refresca la pagina durante 3 seg y redirecciona devuelta al index
                }

                fclose($archivo);
            }
        } 
        else
        {
            echo '<h2 class="text-center">Faltan datos</h2>'; // muestra el mensaje de error
            header('refresh:3;url=../index.php'); // refresca la pagina durante 3 seg y redirecciona devuelta al index
        }
    ?>
</section>


<?php
    require_once 'pie.php';
?>