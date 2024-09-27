<?php
    $rutaBootstrap = '../';
    $rutaCss = 'css';
    require_once 'php/encabezado.php';
?>
            <form class="row g-3" action="php/logueo.php" method="post">
                <section class="col-md-12">
                    <label for="usu" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usu" name="usuario" >
                </section>
                <section class="col-md-12">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="contra" required>
                </section>
                <section class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary col-4">Iniciar Sesión</button>
                </section>
            </form>

<?php
    require_once 'php/pie.php';
?>