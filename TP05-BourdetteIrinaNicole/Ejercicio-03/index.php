<?php
    $rutaBootstrap = '../';
    $rutaCss = 'css/';
    require_once 'php/encabezado.php';
?>
            <h2>Registro enfermería</h2>
            <form class="w-100" action="php/procesar.php" method="get">
                <!-- Nombre -->
                <section class="mb-3">
                    <label for="nom" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nom" name="nombre" required>
                </section>

                <!-- Botón Consultar -->
                <button type="submit" class="btn btn-primary btn-submit">Consultar</button>
            </form>

<?php
    require_once 'php/pie.php';
?>