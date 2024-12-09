<?php

  session_start();

  if (!empty($_POST['usuario']) && !empty($_POST['clave'])) {
    $usuario_ingresado = $_POST['usuario'];
    $clave_ingresada = sha1($_POST['clave']);
    require_once 'conexion.php';
    $conexion = conectar();
    if ($conexion) {
      $consulta = 'SELECT foto
                   FROM periodistas
                   WHERE usuario = ? AND clave = ?';
      $sentencia = mysqli_prepare ($conexion, $consulta);
      mysqli_stmt_bind_param ($sentencia, 'ss', $usuario_ingresado, $clave_ingresada);
      mysqli_stmt_execute($sentencia);
      mysqli_stmt_bind_result($sentencia, $foto);
      mysqli_stmt_store_result($sentencia);
      if (mysqli_stmt_num_rows($sentencia) == 1)
      {
        mysqli_stmt_fetch($sentencia);
        $_SESSION['usuario'] = $usuario_ingresado;
        if (empty($foto)) {
          $_SESSION['foto'] = 'sin_imagen.png';
        } else {
          $_SESSION['foto'] = $foto;
        }
        header('refresh:0;url=periodista_verificado.php');
      }
      else {
        echo '<h2 class="text-center text-danger mt-3">Su nombre de usuario o clave son incorrectos o aún no está registrado.</h2>';
        header('refresh:3;url=ingreso.php');
      }
      desconectar($conexion);
    }

  }

?>
