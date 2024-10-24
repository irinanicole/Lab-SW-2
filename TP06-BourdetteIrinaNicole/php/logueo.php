<?php

if (!empty($_POST['username']) && !empty($_POST['password'])) {
    //hacer cuestiones
    header("refresh:0;url=articulo_listado.php");
}

?>