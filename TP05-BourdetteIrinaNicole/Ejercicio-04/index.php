<?php
    $rutaBtsp = '../';
    $rutaCss = 'css/';
    require_once 'php/encabezado.php';
?>
    <!-- Main -->
    <main class="container my-3 d-flex align-items-center">
        <section class="w-50 section-form">
            <!-- Formulario -->
            <form action="php/consulta.php" method="get">
                <section class="mb-3">
                    <label for="legajo" class="form-label">Número de Legajo</label>
                    <input type="number" class="form-control" id="legajo" name="legajo" required>
                </section>
                <button type="submit" class="btn btn-primary w-100">Consultar</button>
            </form>
        </section>
    </main>
<?php
    require_once 'php/pie.php';
?>