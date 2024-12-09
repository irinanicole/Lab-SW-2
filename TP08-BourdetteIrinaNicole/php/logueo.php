<?php
	session_start();
    $ruta = '../';
    require_once 'header_inicio.php';
	echo '</header>';

if (!empty($_POST['username']) && !empty($_POST['password']))
{
    include_once 'conexion.php';
    $conexion = conectar();

    if ($conexion)
    {
        $usu = $_POST['username'];
        $contraFormu = $_POST['password'];
        $clave = sha1($contraFormu);

        $consulta = 'SELECT usuario, pass, tipo, foto 
					 FROM usuario 
					 WHERE usuario = ? AND pass = ?';

        $sentencia = mysqli_prepare($conexion, $consulta);

        mysqli_stmt_bind_param($sentencia, 'ss', $usu, $clave);

        mysqli_stmt_execute($sentencia);
        mysqli_stmt_bind_result($sentencia, $usuTabla, $claveTabla, $tipo, $foto);

        // compruebo que la consulta haya encontrado alguna coincidencia con el nombre de usuario por lo menos
        $coincide = false;
        while (mysqli_stmt_fetch($sentencia))
        {
            if (!empty($usuTabla))
            {
                if ($contraFormu == $usuTabla)
                {
                    $coincide = true;
					$_SESSION['usuario'] = $usuTabla;
					$_SESSION['clave'] = $claveTabla;
					$_SESSION['tipo'] = $tipo;
					if (empty($foto)) {
						$foto = 'usuario_default.png';
					}
					$_SESSION['foto'] = $foto;
                    header('refresh:0;url=articulo_listado.php');
                }
            }
        }

        if (!$coincide)
        {
            echo '<p>Usuario y/o Contraseña Incorrectos</p>';
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