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
            <a href="articulo_listado.php" class="btn btn-dark mb-2">Volver</a>
            <form class="p-4 border rounded w-50" action="articulo_alta_ok.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend class="text-center mb-4">Alta de Artículo</legend>

                    <label for="nombre" class="form-label">Nombre del artículo</label>
                    <input type="text" id="nombre" name="nombre" class="form-control mb-3" required>

                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" id="categoria" name="categoria" class="form-control mb-3" required>

                    <label for="precio" class="form-label">Precio</label>
                    <input type="number" step="0.01" id="precio" name="precio" class="form-control mb-3" required>

                    <label for="imagen" class="form-label">Subir imagen del artículo</label>
                    <input type="file" id="imagen" name="imagen" class="form-control mb-4">

                    <button type="submit" class="btn btn-primary w-100">Dar de alta</button>
                </fieldset>
            </form>
        </section>
    </main>

<?php
		require("pie.php");
	}
	else
	{
		header('refresh:0;url=../index.php');
	}
?>