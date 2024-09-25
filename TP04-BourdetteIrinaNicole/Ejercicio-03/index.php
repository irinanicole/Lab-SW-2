<?php
    $rutaBootstrap = '../';
    $rutaCss = 'css/';
    require_once 'php/encabezado.php';
?>
            <h2>Registro enfermería</h2>
            <form class="w-100" action="php/procesa.php" method="get">
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
                        <option value="mañana">Mañana</option>
                        <option value="noche">Noche</option>
                    </select>
                </section>
                
                <!-- Días trabajados -->
                <fieldset class="mb-3">
                    <legend>Días trabajados</legend>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="lunes" name="dias[]">
                        <label class="form-check-label" for="lunes">Lunes</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="martes" name="dias[]">
                        <label class="form-check-label" for="martes">Martes</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="miercoles" name="dias[]">
                        <label class="form-check-label" for="miercoles">Miércoles</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="jueves" name="dias[]">
                        <label class="form-check-label" for="jueves">Jueves</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="viernes" name="dias[]">
                        <label class="form-check-label" for="viernes">Viernes</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="sabado" name="dias[]">
                        <label class="form-check-label" for="sabado">Sábado</label>
                    </section>
                    <section class="form-check">
                        <input class="form-check-input" type="checkbox" id="domingo" name="dias[]">
                        <label class="form-check-label" for="domingo">Domingo</label>
                    </section>
                </fieldset>
                
                <!-- Botón Calcular -->
                <button type="submit" class="btn btn-primary btn-submit">Calcular</button>
            </form>
<?php
    require_once 'php/pie.php';
?>