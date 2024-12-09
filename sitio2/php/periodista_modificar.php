<?php
    session_start();

    $ruta = '../';
    $rutaSalir = '';
    require_once 'encabezado.php';
    if (!empty($_GET['id_usuario']))
    {
      $id = $_GET['id_usuario'];
      require_once 'conexion.php';
      $conexion = conectar();
      if ($conexion) {
        $consulta = 'SELECT usuario, especialidad, fecha_alta
                     FROM periodistas
                     WHERE id_periodista = ?';
        $sentencia = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($sentencia, 'i', $id);
        mysqli_stmt_execute($sentencia);
        mysqli_stmt_bind_result($sentencia, $usuario, $especialidad, $fecha_alta);
        mysqli_stmt_store_result($sentencia);
        if (mysqli_stmt_num_rows($sentencia))
        {
          mysqli_stmt_fetch($sentencia);
?>

  <article class="container mt-4">
    <h2>Formulario de Modificación</h2>
    <form action="periodista_modificar_ok.php" method="post" enctype="multipart/form-data" class="container mt-3 p-4 col-md-3 bg-info bg-gradient">
      <section class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $usuario ?>">
      </section>
      <section class="mb-3">
        <label for="especialidad" class="form-label">Especialidad</label>
        <input type="text" class="form-control" id="especialidad" name="especialidad" value="<?php echo $especialidad ?>">
      </section>
      <section class="mb-3">
        <label for="fecha_alta" class="form-label">Fecha de Alta</label>
        <input type="date" class="form-control" id="fecha_alta" name="fecha_alta" value="<?php echo $fecha_alta ?>">
      </section>
      <input type="hidden" name="id_periodista" value="<?php echo $id ?>">
      <input type="submit" class="btn btn-primary" value="Actualizar">
    </form>
  </article>

<?php
        }
        desconectar($conexion);
      }
    }
    require_once 'pie.php';
?>
