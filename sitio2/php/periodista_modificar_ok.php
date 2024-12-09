<?php
  session_start();

  $ruta = '../';
  $rutaSalir = '';
  require_once 'encabezado.php';

  if (!empty($_POST['id_periodista']) && !empty($_POST['usuario']) && !empty($_POST['especialidad']) && !empty($_POST['fecha_alta']))
  {
    $id = $_POST['id_periodista'];
    $usuario = $_POST['usuario'];
    $especialidad = $_POST['especialidad'];
    $fecha_alta = $_POST['fecha_alta'];
    require_once 'conexion.php';
    $conexion = conectar();
    if ($conexion)
    {
      $consulta = 'UPDATE periodistas
                   SET usuario = ?,
                       especialidad = ?,
                       fecha_alta = ?
                   WHERE id_periodista = ?';
      $sentencia = mysqli_prepare($conexion, $consulta);
      mysqli_stmt_bind_param($sentencia, 'sssi', $usuario, $especialidad, $fecha_alta, $id);
      $estado = mysqli_stmt_execute($sentencia);
      if ($estado) {
        echo '<h2 class="text-center mt-4">¡Actualización exitosa!</h2>';
      } else {
        echo '<h2 class="text-center mt-4">No se pudo actualizar :(</h2>';
      }
      header('refresh:3;url=../index.php');
      desconectar($conexion);
    }
  }

  require_once 'pie.php';
?>
