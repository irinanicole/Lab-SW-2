<?php
  $ruta = '../';
  require_once 'encabezado.php';

    if (isset($_COOKIE['mi-tipo']) && !empty($_COOKIE['mi-tipo']))
    {
      $categoria = $_COOKIE['mi-tipo'];
      require_once 'conexion.php';
      $conexion = conectar();
      if ($conexion)
      {
        $consulta = 'SELECT titulo, fecha_publicacion, foto, contenido
                     FROM noticias
                     WHERE categoria = ?';
        $sentencia = mysqli_prepare($conexion, $consulta);
        mysqli_stmt_bind_param($sentencia, 's', $categoria);
        mysqli_stmt_execute($sentencia);
        mysqli_stmt_bind_result($sentencia, $titulo, $fecha, $foto, $contenido);
        mysqli_stmt_store_result($sentencia);
        $num_resultados = mysqli_stmt_num_rows($sentencia);
        echo '<section class="row justify-content-center">';
        if ($num_resultados)
        {
          while(mysqli_stmt_fetch($sentencia))
          {
   ?>
          <article class="card mb-4 mx-4 col-md-3">
              <section class="card-body">
                <?php
                  echo '<h2 class="card-title">'.$titulo.'</h2>';
                  /* La fecha llega de tipo STRING desde la DataBase, por lo que debo convertirla a un objeto de tipo DateTIME para poder cambiarle el formato al que yo quiero que tenga (en este caso: DIA-MES-AÑO) */
                  $fecha_publicacion = date_create($fecha); // convierto un STRING a un DateTIME
                  $fecha_publicacion = date_format($fecha_publicacion, 'd-m-Y'); // cambio el formato de fecha al objeto DateTIME y devuelvo un STRING
                  $fecha_publicacion = explode('-', $fecha_publicacion);
                  $fecha_publicacion = implode('/', $fecha_publicacion);
                  //
                  echo '<p class="card-subtitle mb-2">Fecha: '.$fecha_publicacion.'</p>';
                  echo '<img src = "../img/noticias/'.$foto.'" class="card-img-top">';
                  echo '<p class="card-text">'.$contenido.'</p>';
                ?>
              </section>
          </article>
  <?php
          }
        }
        else {
          echo '<h2 class="text-center mt-3">No hay noticias aún en la categoria "'.$categoria.'"</h2>';
          header('refresh:3;url=preferencias.php');
        }
        echo '</section>';
        desconectar($conexion);
      }
      else
      {
        echo '<h2 class="text-center text-danger">No se pudo conectar a la BD</h2>';
      }
    }
    else
    {
      echo '<h2 class="text-center text-danger">No hay preferencia seleccionada</h2>';
    }
  require_once 'pie.php';
?>
