<?php
    session_start();
    $ruta = '';
    $rutaSalir = 'php/';
    require_once 'php/encabezado.php';
?>
    <section class="row justify-content-center">

        <article class="container mt-4 w-75">
            <table class="table table-striped table-bordered text-center table-fixed">
                <thead class="table-dark">
                <tr>
                    <th class="col-3">Usuario</th>
                    <th class="col-3">Especialidad</th>
                    <th class="col-3">Fecha de Alta</th>
                    <th class="col-3">Foto</th>
                    <?php
                    if (!empty($_SESSION['usuario'])) {
                      echo '<th class="col-3">Modificar</th>';
                    }
                    ?>
                </tr>
                </thead>
                <tbody>


                <!-- programar debajo de aquí, debe mostrar los datos de la tabla -->
                <?php

                  require_once 'php/conexion.php';
                  $conexion = conectar();
                  if ($conexion)
                  {
                    $consulta = 'SELECT id_periodista, usuario, especialidad, fecha_alta, foto
                                 FROM periodistas';
                    $sentencia = mysqli_prepare($conexion, $consulta);
                    mysqli_stmt_execute($sentencia);
                    mysqli_stmt_bind_result($sentencia, $id, $usu, $tipo, $fecha, $foto);
                    mysqli_stmt_store_result($sentencia);
                    $num_registros = mysqli_stmt_num_rows($sentencia);
                    if ($num_registros) {
                      while (mysqli_stmt_fetch($sentencia))
                      {
                        echo '<tr>';
                        echo '<td>'.$usu.'</td>';
                        echo '<td>'.$tipo.'</td>';
                        echo '<td>'.$fecha.'</td>';
                        if (empty($foto)) {
                          $foto = 'sin_imagen.png';
                        }
                        echo '<td><img src="img/usuarios/'.$foto.'" alt="Foto de '.$usu.'" class="img-thumbnail img-fluid w-75"></td>';
                        if (!empty($_SESSION['usuario'])) {
                          echo '<td><a href="php/periodista_modificar.php?id_usuario='.$id.'"><img src="img/modificar.png" class="img-thumbnail img-fluid w-75"></a></td>';
                        }
                        echo '</tr>';
                      }
                    }

                    desconectar($conexion);
                  }

                ?>
                <!-- <tr>
                    <td>María Pérez</td>
                    <td>Programación Web</td>
                    <td>01/09/2023</td>
                    <td><img src="img/usuarios/foto.jpg" alt="Foto de María" class="img-thumbnail img-fluid w-75"></td>
                    <td><a href="php/periodista_modificar.php"><img src="img/modificar.png" class="img-thumbnail img-fluid w-75"></a></td>
                </tr> -->
                </tbody>
            </table>
        </article>
    </section>

<?php
    require_once 'php/pie.php';
?>
