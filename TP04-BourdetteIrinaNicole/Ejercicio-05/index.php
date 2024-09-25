<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TP04 - Ejercicio 05</title>
    <link rel="stylesheet" href="../bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <style>
        body {
            height: 100vh;
            background-color: #fdfd96; /* color pastel para el body */
        }
        header {
            background-color: #ffb3ba; /* color pastel para el header */
        }
        footer {
            background-color: #bae1ff; /* color pastel para el footer */
            height: 8vh;
        }
        main {
            background-color: #c4e17f; /* color pastel para el main */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 84vh; /* ajustando el main para que ocupe el resto de la pantalla */
        }
        form {
            width: 100%;
            /*max-width: 500px;*/
            border: 2px solid #cccccc; /* borde del formulario */
            padding: 20px;
            border-radius: 8px;
            background-color: white; /* fondo blanco del formulario */
        }
        .form-label {
            align-self: center;
        }
    </style>
</head>
<body>
    <header class="w-100 text-center py-4">
        <h1>Inicio de Sesión</h1>
    </header>
    
    <main>
        <section>
            <form class="row g-3 needs-validation" novalidate>
                <!-- Grupo Email -->
                <section class="col-md-12 d-flex align-items-center">
                    <label for="email" class="form-label col-sm-3">Email</label>
                    <input type="email" class="form-control col-sm-8" id="email" placeholder="ejemplo@correo.com" required>
                    <div class="invalid-feedback">
                        Por favor, introduce un email válido.
                    </div>
                </section>
                <!-- Grupo Contraseña -->
                <section class="col-md-12 d-flex align-items-center">
                    <label for="password" class="form-label col-sm-3">Contraseña</label>
                    <input type="password" class="form-control col-sm-8" id="password" placeholder="Contraseña" required>
                    <div class="invalid-feedback">
                        Por favor, introduce una contraseña.
                    </div>
                </section>
                <!-- Botón Iniciar Sesión -->
                <section class="col-12 text-center">
                    <button type="submit" class="btn btn-primary col-4">Iniciar Sesión</button>
                </section>
            </form>
        </section>
    </main>
    
    <footer class="w-100 text-center d-flex justify-content-center align-items-center">
        <p class="mb-0">Copyright 2024 - Irina Nicole Bourdette</p>
    </footer>

    <script src="../bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>
