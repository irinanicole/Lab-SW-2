<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TP3 - Ejercicio 0X</title>
    <!-- Bootstrap CSS local -->
    <link href="../bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        header {
            background-color: #bde0fe; /* Color pastel para el header */
        }
        main {
            background-color: #ffc8dd; /* Color pastel para el main */
        }
        section {
            background-color: #ffdfba; /* Color pastel para la sección */
            margin-top: 1rem;  /* Espacio superior */
            margin-bottom: 1rem;  /* Espacio inferior */
        }
        footer {
            background-color: #caffbf; /* Color pastel para el footer */
        }
        body, html {
            height: 100%;
        }
        /* Estilos para el formulario */
        form {
            border: 2px solid #333; /* Borde del formulario */
            padding: 1.5rem; /* Espacio interior del formulario */
            margin: 2rem auto; /* Márgenes automáticos para centrar el formulario */
            width: 80%; /* Ajuste de ancho para que sea más pequeño */
            max-width: 400px; /* Ancho máximo */
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <header class="text-center py-3">
        <h1>Nombre_Página</h1>
    </header>

    <!-- Main content -->
    <main class="container my-4 d-flex justify-content-center">
        <section class="col-10">
            <section class="col-9 mx-auto p-3 text-center">
                <!-- Formulario -->
                <form action="index.php" method="get" class="text-start">
                    <section class="mb-3">
                        <label for="cant-car" class="form-label">Cantidad de caracteres: </label>
                        <input type="number" class="form-control" id="numero" name="cant-car" min="8" max="16" required>
                    </section>
                    <section class="text-center">
                        <button type="submit" class="btn btn-primary">Generar</button>
                    </section>
                </form>

                <!-- Texto de resultado debajo del formulario -->
                <section class="info-resultado mt-4">
                    <p><strong>Resultado:</strong></p>
                    <p id="resultado"><strong>Información adicional con fondo pastel y texto en negrita.</strong></p>
                </section>
            </section>
        </section>
    </main>

    <!-- Footer -->
    <footer class="text-center mt-auto py-2 d-flex align-items-center justify-content-center">
        <p class="mb-0">Copyright 2024 - Irina Nicole Bourdette</p>
    </footer>

    <!-- Bootstrap JS local -->
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>

