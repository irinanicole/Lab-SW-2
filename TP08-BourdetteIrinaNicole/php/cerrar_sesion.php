<?php
	session_start();
	$ruta = '../';
	require_once 'header_inicio.php';
	echo '</header>';
	
	if (!empty($_SESSION['usuario'])) {
		echo '<section class="container fluid text-center my-4 w-50">
				<h2 class="p-2 bg bg-danger text-white">Usted ha cerrado sesión</h2>
			  </section>';
		header('refresh:2;url=../index.php');
		session_destroy();
	}
	
	require_once 'pie.php';
?>