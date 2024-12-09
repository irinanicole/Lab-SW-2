<?php

    if (!empty($_POST['categoria'])) {
      $nombre = 'mi-tipo';
      $categoria = $_POST['categoria'];
      $tiempoExpira = time() + 30 * 24 * 60 * 60;

      setcookie($nombre, $categoria, $tiempoExpira, '/');

      header('refresh:0;url=preferencia_mostrar.php');
    }

?>
