<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 - Ejercicio 04</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link href="css/mi_estilo.css" rel="stylesheet">
</head>
<body>

    <!-- Header con imagen -->
    <header class="container-fluid text-center">
        <img src="img/logo_steam.jpg" alt="Imagen del Header" class="img-fluid w-50">
    </header>

    <!-- Contenido principal en flexbox con aside y main -->
    <section class="container-fluid flex-grow-1">
        <section class="row">
            <!-- Aside con imágenes y precios -->
            <aside class="col-12 col-md-4 d-flex flex-column">
                <figure class="figure text-center">
                    <img src="img/Age Of Mythology Retold.jpg" alt="Juego 1" class="figure-img img-fluid">
                    <figcaption class="figure-caption"><strong>Age Of Mythology Retold - $22.99</strong></figcaption>
                </figure>

                <figure class="figure text-center">
                    <img src="img/NBA 2K25.jpg" alt="Juego 2" class="figure-img img-fluid">
                    <figcaption class="figure-caption"><strong>NBA 2K25 - $69.99</strong></figcaption>
                </figure>

                <figure class="figure text-center">
                    <img src="img/Baldurs Gate III.jpg" alt="Juego 3" class="figure-img img-fluid">
                    <figcaption class="figure-caption"><strong>Baldurs Gate III - $27.99</strong></figcaption>
                </figure>

                <figure class="figure text-center">
                    <img src="img/Fallout 76.jpg" alt="Juego 4" class="figure-img img-fluid">
                    <figcaption class="figure-caption"><strong>Fallout 76 - $23.99</strong></figcaption>
                </figure>

                <figure class="figure text-center">
                    <img src="img/CoD Black Ops 6.jpg" alt="Juego 5" class="figure-img img-fluid">
                    <figcaption class="figure-caption"><strong>CoD Black Ops 6 - $69.99</strong></figcaption>
                </figure>
            </aside>

            <!-- Main con dos sections -->
            <main class="col-12 col-md-8 d-flex flex-column">

                <!-- Primer section con tabla -->
                <section>
                    <h2>Hot Sale</h2>
                    <table class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Juego</th>
                                <th>Cantidad</th>
                                <th>Recaudado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td>Juego 1</td><td>2</td><td>$199.98</td></tr>
                            <tr><td>Juego 2</td><td>3</td><td>$299.97</td></tr>
                            <tr><td>Juego 3</td><td>1</td><td>$99.99</td></tr>
                            <tr><td>Juego 4</td><td>5</td><td>$499.95</td></tr>
                            <tr><td>Juego 5</td><td>2</td><td>$199.98</td></tr>
                            <tr><td>Juego 6</td><td>4</td><td>$399.96</td></tr>
                        </tbody>
                    </table>
                </section>

                <!-- Segundo section con total recaudado -->
                <section>
                    <h2>Total Recaudado: $9999.99</h2>
                </section>

            </main>
        </section>
    </section>

    <!-- Footer fijo -->
    <footer>
        <span>Copyright 2024 - Irina Nicole Bourdette</span>
    </footer>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>
