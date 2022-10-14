<?php
    include("../../bd/accesoABD.php");

    $nombre=$_POST["nombre"];
    $imagen=$_FILES["imagen"];

    $imagen64=base64_encode(file_get_contents($imagen['tmp_name']));

    $producto= array($nombre,$imagen64);
    insertIntoTable($producto);


    header("Location: ../../listado.php");
?>
