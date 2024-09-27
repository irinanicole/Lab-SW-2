<?php
    $rutaBootstrap = '../';
    $rutaCss = 'css';
    require_once 'php/encabezado.php';
?>
            <form class="row g-3 needs-validation" action="php/login.php" method="post">
                <section class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="ejemplo@correo.com" name="correo" required>
                    <div class="invalid-feedback">
                        Por favor, introduce un email válido.
                    </div>
                </section>
                <section class="col-md-12">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" placeholder="Contraseña" name="contra" required>
                    <div class="invalid-feedback">
                        Por favor, introduce una contraseña.
                    </div>
                </section>
                <section class="col-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary col-4">Iniciar Sesión</button>
                </section>
            </form>

<?php
    require_once 'php/pie.php';
?>