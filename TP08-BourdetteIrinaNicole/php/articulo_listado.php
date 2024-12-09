<?php
	session_start();
	$ruta = '../';
	require_once 'header_inicio.php';
	if (!empty($_SESSION['usuario']))
	{
		require_once 'header_fin.php';
        $usuario = $_SESSION['usuario'];
        $tipoUsuario = $_SESSION['tipo'];
?>


<main class="container-fluid w-100">
    <section>
        <article class="barra-menu py-3 mb-2 d-flex justify-content-evenly align-items-center bg bg-dark bg-opacity-75">
            <form class="d-flex align-items-center m-3 bg bg-transparent" action="" method="get">
                <input type="search" class="form-control" name="buscar" id="busc" placeholder="Buscar...">
                <button type="submit" class="btn btn-light ms-2">Buscar</button>
            </form>
            <section class="menu_tmp m-3">
                <?php
                    if ($tipoUsuario == 'Administrador') {
                        echo '<a class="btn btn-light" href="articulo_alta.php">+ Alta Articulo</a>';
                    } else {
                        echo '<a class="btn btn-light" href="articulo_carrito.php">Mi Carrito</a>';
                    }
                ?>
            </section>
            <form class="d-flex align-items-center m-3 bg bg-transparent" action="articulo_filtrar.php" method="get"">
                <select class="form-select" name="cat_filtrada" id="cat">
                    <option value="Ninguno" selected>Ninguno</option>
                    <option value="Celulares">Celulares</option>
                    <option value="Electrodomésticos">Electrodomésticos</option>
                    <option value="Televisores">Televisores</option>
                </select>
                <button type="submit" class="btn btn-light ms-2">Filtrar</button>
            </form>
        </article>
        <article class="row text-center">
            <section class="d-flex justify-content-center">
                <table class="table table-bordered table-hover table-striped w-auto">
                    <caption class="caption-top text-center bg-dark text-white">Listado de articulos</caption>
                    <thead>
                        <tr>
                            <th class="bg-secondary text-white">Foto</th>
                            <th class="bg-secondary text-white">Producto</th>
                            <th class="bg-secondary text-white">Categoria</th>
                            <th class="bg-secondary text-white">Precio</th>
                            <?php
                                if ($tipoUsuario == 'Administrador') {
                                    ?>
                                    <th class="bg-secondary text-white">Modificar</th>
                                    <th class="bg-secondary text-white">Eliminar</th>
                                    <?php
                                } else {
                                    ?>
                                    <th class="bg-secondary text-white">Comprar</th>
                                    <?php
                                }
                            ?>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        include 'conexion.php';
                        $conexion = conectar();
                        if ($conexion)
                        {
                            if (!empty($_GET['buscar']) || !empty($_COOKIE[$usuario])) { // puso realizarse una búsqueda y/o un filtrado
                                if (!empty($_COOKIE[$usuario]) && isset($_COOKIE[$usuario])) { // verifico si hay un filtrado
                                    $filtro = $_COOKIE[$usuario];
                                    if ($filtro == 'Ninguno') { //no hay filtrado particular -> se muestran todos los artículos
                                        setcookie($usuario, '', time() - 3600, '/');
                                        unset($_COOKIE[$usuario]);
                                        if (!empty($_GET['buscar'])) {     // verifico si también hubo una búsqueda
                                            $buscado = '%'.$_GET['buscar'].'%';
                                            $consulta = 'SELECT id_articulo, nombre, categoria, precio, foto 
                                                         FROM articulo 
                                                         WHERE nombre LIKE ?';
                                            $sentencia = mysqli_prepare($conexion, $consulta);
                                            mysqli_stmt_bind_param($sentencia, 's',$buscado);
                                        } else {
                                            $consulta = 'SELECT id_articulo, nombre, categoria, precio, foto 
                                                        FROM articulo';
                                            $sentencia = mysqli_prepare ($conexion, $consulta);
                                        }
                                    } else { // hay un filtrado por categoría
                                        if (!empty($_GET['buscar'])) {    // verifico si también hubo una búsqueda
                                            $buscado = '%'.$_GET['buscar'].'%';
                                            $consulta = 'SELECT id_articulo, nombre, categoria, precio, foto 
                                                         FROM articulo 
                                                         WHERE categoria = ? AND nombre LIKE ?';
                                            $sentencia = mysqli_prepare($conexion, $consulta);
                                            mysqli_stmt_bind_param($sentencia, 'ss',$filtro, $buscado);
                                        } else { // se prepara una consulta solo por filtrado de categoría
                                            $consulta = 'SELECT id_articulo, nombre, categoria, precio, foto 
                                                         FROM articulo 
                                                         WHERE categoria = ?';
                                            $sentencia = mysqli_prepare($conexion, $consulta);
                                            mysqli_stmt_bind_param ($sentencia, 's', $filtro);
                                        }
                                    }
                                } else {  // solo era verdadero que se realizó una busqueda, sin indicar el filtrado
                                    $buscado = '%'.$_GET['buscar'].'%';
                                    $consulta = 'SELECT id_articulo, nombre, categoria, precio, foto 
                                                FROM articulo 
                                                WHERE nombre LIKE ?';
                                    $sentencia = mysqli_prepare($conexion, $consulta);
                                    mysqli_stmt_bind_param($sentencia, 's',$buscado);
                                }
                            } else { // no hay ni búsqueda ni filtros realizados
                                $consulta = 'SELECT id_articulo, nombre, categoria, precio, foto 
                                             FROM articulo';
                                $sentencia = mysqli_prepare ($conexion, $consulta);
                            }

                            mysqli_stmt_execute($sentencia);
                            mysqli_stmt_bind_result ($sentencia, $id, $nombre, $categoria, $precio, $fotoProd);
                            mysqli_stmt_store_result($sentencia);
                            $resultados = mysqli_stmt_num_rows($sentencia);
                            if ($resultados > 0)
                            {
                                while (mysqli_stmt_fetch($sentencia)) {
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
                                    if ($tipoUsuario == 'Administrador') {
                                        echo '<td>';
                                        echo '<a href="modificar.php?id='.$id.'"><img src="../img/iconos/modificar.png" class="p-4" alt="modificar"></a>';
                                        echo '</td><td>';
                                        echo '<a href="eliminar.php?id='.$id.'"><img src="../img/iconos/eliminar.png" class="p-4" alt="eliminar"></a>';
                                        echo '</td>';
                                    } else {
                                        echo '<td>';
                                        echo '<a href="articulo_carrito.php?id='.$id.'"><img src="../img/iconos/carrito.png" class="p-4" alt="comprar"></a>';
                                        echo '</td>';
                                    }
                                    echo '</tr>';
                                }
                            }
                            desconectar($conexion);
                        }
                        ?>
                    </tbody>
                </table>
            </section>
        </article>
    </section>
</main>

<?php
		require_once 'pie.php';
	}
	else
	{
		echo '</header>';
		header('refresh:0;url=../index.php');
	}
?>