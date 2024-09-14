<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 - Ejercicio 03</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        header, footer {
            background-color: #f8d7da; /* Color pastel para el header y footer */
            text-align: center;
            padding: 10px;
        }
        main {
            background-color: #d1ecf1; /* Color pastel para el main */
            min-height: 100vh; /* Para que ocupe toda la pantalla */
            display: flex;
            flex-direction: column;
            justify-content: space-evenly; /* Distribución con espacio equitativo */
            align-items: center;
            width: 100%; /* Para que ocupe todo el ancho */
        }
        @media (min-width: 1024px) {
            main {
                flex-direction: row;
            }
        }
        section {
            background-color: #e2e3e5; /* Color pastel para las sections */
            padding: 20px;
            width: 100%;
            max-width: 45%; /* Para que las secciones tengan el mismo ancho */
            display: flex;
            flex-direction: column;
            justify-content: center; /* Para alinear el contenido verticalmente */
            align-items: center;
            margin-bottom: 20px;
        }
        @media (min-width: 1024px) {
            section {
                height: 400px; /* Para que tengan la misma altura en pantallas grandes */
            }
        }
        table {
            margin-left: 10%; /* Margen a la izquierda y derecha del 10% */
            margin-right: 10%;
            width: 80%; /* Ajuste del ancho para la tabla */
        }
        h2 {
            margin-bottom: 20px;
        }
        footer {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60px; /* Altura fija para centrar verticalmente el contenido */
        }
    </style>
</head>
<body>

    <header>
        <h1>Tuqui 10</h1>
    </header>

    <main class="container-fluid">
        <section>
            <h2>Mi Cartón</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Fila 1, Col 1</td>
                        <td>Fila 1, Col 2</td>
                    </tr>
                    <tr>
                        <td>Fila 2, Col 1</td>
                        <td>Fila 2, Col 2</td>
                    </tr>
                    <tr>
                        <td>Fila 3, Col 1</td>
                        <td>Fila 3, Col 2</td>
                    </tr>
                    <tr>
                        <td>Fila 4, Col 1</td>
                        <td>Fila 4, Col 2</td>
                    </tr>
                    <tr>
                        <td>Fila 5, Col 1</td>
                        <td>Fila 5, Col 2</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section>
            <h2>Sorteo</h2>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td>Fila 1, Col 1</td>
                        <td>Fila 1, Col 2</td>
                        <td>Fila 1, Col 3</td>
                        <td>Fila 1, Col 4</td>
                        <td>Fila 1, Col 5</td>
                    </tr>
                    <tr>
                        <td>Fila 2, Col 1</td>
                        <td>Fila 2, Col 2</td>
                        <td>Fila 2, Col 3</td>
                        <td>Fila 2, Col 4</td>
                        <td>Fila 2, Col 5</td>
                    </tr>
                </tbody>
            </table>
            <p><strong>Aciertos</strong></p>
        </section>
    </main>

    <footer>
        <p>Copyright 2024 - Irina Nicole Bourdette</p>
    </footer>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>
