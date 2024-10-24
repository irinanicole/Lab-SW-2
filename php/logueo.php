<?php
    $ruta = '../';
    include_once 'encabezado.php';

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    include_once 'conexion.php';
    $conexion = conectar();

    if ($conexion)
    {
        $usu = $_POST['username']; 
        $contra = sha1($_POST['password']);

        $consulta = 'SELECT usuario, pass FROM usuario WHERE usuario= ? AND pass= ?';

        $sentencia = mysqli_prepare($conexion, $consulta);

        mysqli_stmt_bind_param ($sentencia, 'ss', $usu, $contra);

        $q = mysqli_stmt_execute($sentencia);

        if ($q)
        {
            header("refresh:0;url=articulo_listado.php");
        }
        else
        {
            echo '<p>Usuario y/o Contraseña incorrectos</p>';
            header('refresh:3;url=../index.php');
        }
        
        desconectar($conexion);
    }
}
else
{
    echo '<p>Faltan datos</p>';
    header('refresh:3;url=../index.php');
}

    include_once 'pie.php';
?>