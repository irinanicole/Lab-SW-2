<?php
	//session_start();
    include_once 'header_inicio.php';
	if (!empty($_SESSION['usuario']))
	{
?>
	<!-- BLOQUE A LA DERECHA -->
	<section class="d-flex justify-content-end align-items-center">
	
		<!-- USUARIO Y FOTO -->
		<section class="d-flex justify-content-end align-items-center">
		<?php
			echo '<img class="img-fluid rounded m-2 p-1" style="width: 10%;height: 10%;" src="../img/usuarios/'.$_SESSION['foto'].'">';			
			echo '<h4 class="text-dark p-2">'.$_SESSION['usuario'].'</h4>';
		?>
		</section>
		
		<!-- BOTON "CANCELAR" -->
		<section class="m-1">
			<a href="cerrar_sesion.php" class="btn btn-danger rounded border border-dark mx-2">Cerrar sesión</a>
		</section>
	</section>
</header>
<?php
	}
	else
	{
		header('refresh:0;url=../index.php');
	}
?>