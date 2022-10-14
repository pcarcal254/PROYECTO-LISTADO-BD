<?php
    include("../bd/accesoABD.php");

    $nombre=$_POST["Nombre"];
    $Imagen=$_POST["Imagen"];


    $Imagen=file_get_contents($Imagen);
    $Imagen64=base64_encode($Imagen);

    $Producto= new Array($nombre,$Imagen64);
    insertIntoTable($Producto);


    header("../listado/listado.php");
?>
