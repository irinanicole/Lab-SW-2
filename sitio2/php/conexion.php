<?php

  function conectar()
  {
    $servidor = 'localhost';
    $usuario = 'root';
    $contrasenna = '';
    $nombre_bd = 'repaso2';

    set_error_handler (function() { // establecer manejador de excepciones
      throw new Exception ("--> ERROR <--");
    });

    try { // intenta conectar con la base de datos
      $conexion = mysqli_connect($servidor, $usuario, $contrasenna, $nombre_bd);
    }
    catch (Exception $e) { // atrapa el error
      $conexion = false;
      echo '<p>Error, comuníquese con su administrador.</p>';
    }

    return ($conexion);
  }

  function desconectar($miConexion)
  {
    if ($miConexion) {
      mysqli_close ($miConexion);
      $operacion = true;
    } else {
      echo '<p>No se puede desconectar porque no hay conexión abierta.</p>';
      $operacion = false;
    }

    return ($operacion);
  }

?>
