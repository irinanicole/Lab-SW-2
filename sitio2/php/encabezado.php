<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diario FACET</title>
    <link rel="stylesheet" href="<?php echo $ruta ?>bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<body>
    <header class="d-flex justify-content-between align-items-center">
        <section class="col-4">
        </section>
        <h1 class="col-4">Periodistas del Diario FACET</h1>
        <section class="col-4 d-flex justify-content-end">
          <?php if (!empty($_SESSION['usuario'])) {
            echo '<a href="'.$rutaSalir.'cerrar_sesion.php" class="mx-2 btn btn-danger text-light">Cerrar sesión</a>';
          } ?>
        </section>
    </header>
    <nav class="navbar bg-body-tertiary mb-2">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo $ruta;?>index.php">Inicio</a>
            </li>
            <?php if (empty($_SESSION['usuario'])) { ?>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $ruta;?>php/ingreso.php">Ingreso</a>
            </li>
            <?php   } ?>
        </ul>
    </nav>
