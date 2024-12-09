<?php
	session_start();
	$ruta = '../';
	require_once 'header_inicio.php';
	if (!empty($_SESSION['usuario']))
	{
		require_once 'header_fin.php';
?>
<main class="container py-3">
    <section class="d-flex flex-column justify-content-center align-items-center">
<?php
    require_once 'conexion.php';
    $conexion = conectar();

    if ($conexion && !empty($_POST['id']) && !empty($_POST['nombre']) && !empty($_POST['categoria']) && !empty($_POST['precio']))
    {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $categoria = $_POST['categoria'];
        $precio = $_POST['precio'];
        if (!empty($_FILES['imagen']['size']))
        {
            $foto = $_FILES['imagen']['name'];
            $origen = $_FILES['imagen']['tmp_name'];
            $carpeta = '../img/articulos/';
            if (!file_exists($carpeta))
            {
                mkdir($carpeta);
            }
            $destino = $carpeta.$foto;
            $r = move_uploaded_file ($origen, $destino);
            if ($r) {
                echo '<p><strong>*Imagen nueva subida correctamente*</strong></p>';
            } else {
                echo '<p class="text-danger"><strong>No se pudo subir la imagen</strong></p>';
            }
            echo '<br>';
			}
			else
			{
				$foto = '';
				$consulta0 = 'SELECT foto
							  FROM articulo
							  WHERE id_articulo = ?';
				$sentencia0 = mysqli_prepare($conexion, $consulta0);
				mysqli_stmt_bind_param($sentencia0, 'i', $id);
				mysqli_stmt_execute($sentencia0);
				mysqli_stmt_bind_result($sentencia0, $fotoEliminar);
				mysqli_stmt_store_result($sentencia0);
				mysqli_stmt_fetch($sentencia0);
				if (!empty($fotoEliminar)) {
					$ubicacionArchivo = '../img/articulos/'.$fotoEliminar;
					unlink($ubicacionArchivo);
				}
			}
			$consulta1 = 'UPDATE articulo
						 SET nombre = ?, categoria = ?, precio = ?, foto = ?
						 WHERE id_articulo = ?';
			$sentencia1 = mysqli_prepare($conexion, $consulta1);
			mysqli_stmt_bind_param($sentencia1, 'ssdsi', $nombre, $categoria, $precio, $foto, $id);
			$estado = mysqli_stmt_execute($sentencia1);
			if ($estado)
			{
				echo '<h2 class="text-light">Actualización Exitosa!</h2>';
			}
			else
			{
				echo '<h2 class="text-danger">No se pudo Actualizar :(</h2>';
			}
			header('refresh:3;url=articulo_listado.php');
		}
	?>
   
    </section>
</main>


<?php
    require_once 'pie.php';
	}
	else
	{
		header('refresh:0;url=../index.php');
	}
?>