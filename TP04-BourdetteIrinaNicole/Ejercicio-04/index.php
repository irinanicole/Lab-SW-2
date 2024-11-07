<?php
    $rutaBtsp = '../';
    $rutaCss = 'css/';
    require_once 'php/encabezado.php';
?>
            <form action="php/ganancias.php" method="post" class="p-3">
                <section class="mb-3">
                    <label for="deposito" class="form-label">Depósito inicial:</label>
                    <input type="number" class="form-control" id="deposito" name="deposito_inicial" placeholder="Ingrese su depósito inicial">
                </section>

                <fieldset class="mb-3">
                    <legend>Plazo:</legend>
                    <section class="form-check form-switch">
                        <input class="form-check-input" type="radio" id="plazo30" name="plazo_dias" value="30">
                        <label class="form-check-label" for="plazo30">30 días</label>
                    </section>
                    <section class="form-check form-switch">
                        <input class="form-check-input" type="radio" id="plazo45" name="plazo_dias" value="45">
                        <label class="form-check-label" for="plazo45">45 días</label>
                    </section>
                    <section class="form-check form-switch">
                        <input class="form-check-input" type="radio" id="plazo60" name="plazo_dias" value="60">
                        <label class="form-check-label" for="plazo60">60 días</label>
                    </section>
                    <section class="form-check form-switch">
                        <input class="form-check-input" type="radio" id="plazo90" name="plazo_dias" value="90">
                        <label class="form-check-label" for="plazo90">90 días</label>
                    </section>
                </fieldset>

                <section class="btn-simular">
                    <button type="submit" class="btn btn-primary col-2">Simular</button>
                </section>
            </form>
<?php
    require_once 'php/pie.php';
?>