<?php
    $ruta = '../';
    require("encabezado.php");
?>

<main class="container">
    <section>
        <article class="row text-center">
            <section class="menu_tmp pt-3 pb-3">
                <a class="btn btn-dark" href="articulo_alta.php">+ Alta Articulo</a>
            </section>
            <section class="d-flex justify-content-center">
                <table class="table table-bordered table-hover table-striped w-auto">
                    <caption class="caption-top text-center bg-dark text-white">Listado de articulos</caption>
                    <tr>
                        <th class="bg-secondary text-white">Foto</th>
                        <th class="bg-secondary text-white">Producto</th>
                        <th class="bg-secondary text-white">Categoria</th>
                        <th class="bg-secondary text-white">Precio</th>
                    </tr>
                    
                    <?php
                        
                    ?>
                </table>
            </section>
        </article>
    </section>
</main>

<?php
    require("pie.php");
?>