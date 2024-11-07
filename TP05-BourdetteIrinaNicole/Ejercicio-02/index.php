<?php
    $rutaBootstrap = '../';
    $rutaCss = 'css/';
    require_once 'php/encabezado.php';
?>
            <h2>Registro enfermería</h2>
            <form class="w-100" action="php/procesar.php" method="post">
                <!-- Nombre -->
                <section class="mb-3">
                    <label for="nom" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nom" name="nombre">
                </section>

                <!-- Horas trabajadas -->
                <section class="mb-3">
                    <label for="horasTrabajadas" class="form-label">Horas trabajadas</label>
                    <input type="number" class="form-control" id="horasTrabajadas" name="horas_trabajadas" min="0">
                </section>
                
                <!-- Turno -->
                <section class="mb-3">
                    <label for="turno" class="form-label">Turno</label>
                    <select class="form-select" id="turno" name="turno">
                        <option selected>Seleccione</option>
                        <option value="Mañana">Mañana</option>
                        <option value="Noche">Noche</option>
                    </select>
                </section>
                
                <!-- Días trabajados -->
                <fieldset class="mb-3">
                    <legend>Días trabajados</legend>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="lunes" value="Lunes" name="dias[]">
                        <label class="form-check-label" for="lunes">Lunes</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="martes" value="Martes" name="dias[]">
                        <label class="form-check-label" for="martes">Martes</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="miercoles" value="Miércoles" name="dias[]">
                        <label class="form-check-label" for="miercoles">Miércoles</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="jueves" value="Jueves" name="dias[]">
                        <label class="form-check-label" for="jueves">Jueves</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="viernes" value="Viernes" name="dias[]">
                        <label class="form-check-label" for="viernes">Viernes</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="sabado" value="Sábado" name="dias[]">
                        <label class="form-check-label" for="sabado">Sábado</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="domingo" value="Domingo" name="dias[]">
                        <label class="form-check-label" for="domingo">Domingo</label>
                    </section>
                </fieldset>
                
                <!-- Botón Calcular -->
                <button type="submit" class="btn btn-primary btn-submit">Calcular</button>
            </form>

<?php
    require_once 'php/pie.php';
?>