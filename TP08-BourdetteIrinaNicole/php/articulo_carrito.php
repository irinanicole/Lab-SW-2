<?php
	session_start();
	$ruta = '../';
	require_once 'header_inicio.php';
	if (!empty($_SESSION['usuario']))
	{
        require_once 'header_fin.php';
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            if (empty($_SESSION['carrito'])) {
                $_SESSION['carrito'] = array(); // si no existe (o está vacío) creo un arreglo para almacenar los articulos en el carrito
            }
            if (empty($_SESSION['carrito'][$id])) {
                $_SESSION['carrito'][$id] = 1; // si el carrito con la clave $id (que representa a un único producto) no tiene ninguna cantidad asociada, es decir, aún no fue agregado por primera vez en el carrito, le asigno la primera unidad.
            } else {
                $_SESSION['carrito'][$id]++; // si el articulo ($id) ya se encontraba en el arreglo 'carrito', entonces incremento la cantidad solicitada.
            }
            header('refresh:3; url=articulo_listado.php');
        }

        if (!empty($_SESSION['carrito'])) {

?>

<main class="container">
    <section>
        <article class="row text-center">
            <?php
            if (empty($_GET['id'])) {
                echo '<section class="menu_tmp py-3">
                        <a class="btn btn-dark" href="articulo_listado.php">Volver</a>
                      </section>';
            }
            ?>
            <section class="d-flex justify-content-center mt-3">
                <table class="table table-bordered table-hover table-striped w-auto">
                    <caption class="caption-top text-center bg-dark text-white">Listado de articulos</caption>
                    <thead>
                        <tr>
                            <th class="bg-secondary text-white">Foto</th>
                            <th class="bg-secondary text-white">Producto</th>
                            <th class="bg-secondary text-white">Categoria</th>
                            <th class="bg-secondary text-white">Precio (xUnidad)</th>
                            <th class="bg-secondary text-white">Cantidad</th>
                            <th class="bg-secondary text-white">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
						include 'conexion.php';
                        $conexion = conectar();
                        if ($conexion)
                        {
                            $consulta = 'SELECT nombre, categoria, precio, foto
                                         FROM articulo
                                         WHERE id_articulo = ?';
                            $sentencia = mysqli_prepare ($conexion, $consulta);
                            mysqli_stmt_bind_param ($sentencia, 'i', $id);
                            mysqli_stmt_bind_result ($sentencia, $nombre, $categoria, $precio, $fotoProd); // vinculo resultados con variables
                            $sumaTotal = 0;
                            foreach ($_SESSION['carrito'] as $id => $cantidad) {
                                mysqli_stmt_execute($sentencia);
                                mysqli_stmt_fetch($sentencia);
                                echo '<tr class="align-middle">';
                                if (empty($fotoProd)) {
                                    $fotoProd = 'sin_imagen.png';
                                }
                                echo '<td>
                                        <img class="img-fluid" src="../img/articulos/'.$fotoProd.'">
                                        </td>';
                                echo '<td>'.$nombre.'</td>';
                                echo '<td>'.$categoria.'</td>';
                                echo '<td>$ '.number_format($precio,3,',','.').'</td>';
                                echo '<td>'.$cantidad.'</td>';
                                echo '<td>$ '.number_format($cantidad*$precio,3,',','.').'</td>';
                                echo '</tr>';
                                $sumaTotal += $cantidad * $precio;
                            }
                            mysqli_stmt_close($sentencia);
                            echo '<tr><td colspan=6>Total Compra: <strong>$'.number_format($sumaTotal,3,',','.').'</strong></td></tr>';
                        }
                        desconectar($conexion);
                        ?>
                    </tbody>
                </table>
            </section>
            <?php
            if (empty($_GET['id'])) {
                echo '<section class="menu_tmp py-3">
                        <button class="btn btn-primary" href="#">COMPRAR</button>
                      </section>';
            }
            ?>
        </article>
    </section>
</main>

<?php
    }
        require_once 'pie.php';
    }
	else
	{
		echo '</header>';
		header('refresh:0;url=../index.php');
	}
?>
