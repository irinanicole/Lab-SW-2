<?php
    session_start();

    if (!empty($_SESSION['usuario']) && !empty($_SESSION['foto']))
    {
      $ruta = '../';
      $rutaSalir = '';
      require_once 'encabezado.php';

      $usuario = $_SESSION['usuario'];
      $foto = $_SESSION['foto'];

      $foto_nombre = explode('.', $foto);

      ?>

      <section class="d-flex flex-column justify-content-center align-items-center">
        <h2>¡Bienvenido/a <?php echo $usuario ?>! :)</h2>
        <img src="../img/usuarios/<?php echo $foto ?>" alt="<?php echo $foto_nombre[0] ?>" class="img-thumbnail img-fluid w-25">
      </section>

      <?php
      require_once 'pie.php';
      header('refresh:3;url=../index.php');
    }

?>
