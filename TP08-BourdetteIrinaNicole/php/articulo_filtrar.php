<?php
	session_start();
	$ruta = '../';
	require_once 'header_inicio.php';
	if (!empty($_SESSION['usuario']))
	{
		require_once 'header_fin.php';
        $usuario = $_SESSION['usuario'];

        if (!empty($_GET['cat_filtrada'])) {
            $cat_filtrada = $_GET['cat_filtrada'];
            $tiempo_expira = time() + 30 * 24 * 60 * 3600;
            setcookie($usuario, $cat_filtrada, $tiempo_expira, '/');
			header('refresh:0;url=articulo_listado.php');
        }
?>

<?php
		require_once 'pie.php';
	}
	else
	{
		echo '</header>';
		header('refresh:0;url=../index.php');
	}
?>