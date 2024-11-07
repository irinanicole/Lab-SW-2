<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TP04 - Ejercicio 01</title>
    <!-- Enlace a Bootstrap local -->
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <style>
        /* Estilos personalizados para los colores pastel */
        body {
            background-color: #e8d4f8; /* lila pastel */
        }

        header {
            background-color: #f8c8dc; /* rosa pastel */
        }

        main {
            background-color: #c8f8d2; /* verde pastel */
        }

        section {
            background-color: #f8eec8; /* amarillo pastel */
        }

        footer {
            background-color: #c8dff8; /* azul pastel */
        }

        /* Asegurar que todos los elementos, excepto main y section, tengan ancho 100% */
        body, html {
            height: 100%;
            margin: 0;
        }

        header, footer {
            width: 100%; /* Ocupa todo el ancho */
        }

        /* Centrado y estilo responsivo */
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        main {
            width: 75%; /* Main con ancho 75% */
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        section {
            padding: 2em;
            width: 50%; /* Section con ancho 50% */
            text-align: center;
        }

        footer {
            height: 8vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="text-center py-3">
        <h1>Nombre-Página</h1>
    </header>

    <!-- Main -->
    <main class="w-75">
        <section class="w-50">
            <h2>Contenido del Main</h2>
            <p>Aquí va el contenido de la sección principal del sitio.</p>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <p>Copyright 2024 - Irina Nicole Bourdette</p>
    </footer>

    <!-- Bootstrap JS local -->
    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>