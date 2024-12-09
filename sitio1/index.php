<?php
    $ruta = '';
    require_once 'php/encabezado.php';
?>
    <section class="row justify-content-center">
        <!-- programar debajo de aquí, debe mostrar los datos de la tabla -->
<?php
    require_once 'php/conexion.php';
    $conexion = conectar();
    $consulta = 'SELECT titulo, fecha_publicacion, foto, contenido
                 FROM noticias';
    $sentencia = mysqli_prepare($conexion, $consulta);
    mysqli_stmt_execute($sentencia);
    mysqli_stmt_bind_result($sentencia, $titulo, $fecha, $foto, $contenido);
    mysqli_stmt_store_result($sentencia);
    $num_resultados = mysqli_stmt_num_rows($sentencia);
    if ($num_resultados)
    {
      while(mysqli_stmt_fetch($sentencia))
      {
 ?>
        <article class="card mb-4 mx-4 col-md-3">
            <section class="card-body">
              <?php
                echo '<h2 class="card-title">'.$titulo.'</h2>';
                //
                $fecha_publicacion = date_create($fecha);
                $fecha_publicacion = date_format($fecha_publicacion, 'd-m-Y');
                $fecha_publicacion = explode('-', $fecha_publicacion);
                $fecha_publicacion = implode('/', $fecha_publicacion);
                //
                echo '<p class="card-subtitle mb-2">Fecha: '.$fecha_publicacion.'</p>';
                echo '<img src = "img/noticias/'.$foto.'" class="card-img-top">';
                echo '<p class="card-text">'.$contenido.'</p>';
              ?>
            </section>
        </article>
<?php
      }
    }
?>
    </section>

<?php
    desconectar($conexion);
    require_once 'php/pie.php';
?>
