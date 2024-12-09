<?php
  $ruta = '../';
  require_once 'encabezado.php';

  if (!empty($_POST['titulo']) && !empty($_POST['contenido']) && !empty($_POST['fecha_publicacion']) && !empty($_POST['categoria']) && !empty($_FILES['foto']['size']))
  {
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $fecha_publicacion = $_POST['fecha_publicacion'];
    $categoria = $_POST['categoria'];
    $foto = $_FILES['foto']['name'];

    $origen_foto = $_FILES['foto']['tmp_name'];
    require_once 'conexion.php';
    $conexion = conectar();
    if ($conexion)
    {
      $consulta = 'INSERT INTO noticias (titulo, contenido, foto, categoria, fecha_publicacion)
                   VALUES (?,?,?,?,?)';
      $sentencia = mysqli_prepare($conexion, $consulta);
      mysqli_stmt_bind_param($sentencia, 'sssss', $titulo, $contenido, $foto, $categoria, $fecha_publicacion);
      $r = mysqli_stmt_execute($sentencia);
      if ($r)
      {
        $origen_foto = $_FILES['foto']['tmp_name'];
        $carpeta = '../img/noticias/';
        if (!file_exists($carpeta)) {
          mkdir($carpeta);
        }
        $destino_foto = $carpeta.$foto;
        $img_movida = move_uploaded_file($origen_foto, $destino_foto);
        if ($img_movida) {
          echo '<h2 class="text-center text-success">¡Actualización Exitosa!</h2>';
        } else {
          echo '<h2 class="text-center text-warning">La Actualización no está completa</h2>';
        }
      }
      else
      {
        echo '<h2 class="text-center text-danger">Algo fue mal con la actualización.. :(</h2>';
      }
      desconectar($conexion);
    }
    else
    {
      echo '<h2 class="text-center text-danger">No se logró conectar con la BD</h2>';
    }
  }
  else
  {
    echo '<h2 class="text-center text-danger">Debe llenar todos los campos</h2>';
  }
  header('refresh:0;url=../index.php');
  require_once 'pie.php';
?>
