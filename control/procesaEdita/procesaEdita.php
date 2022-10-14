<?php
    include("../../bd/accesoABD.php");


    $id=$_POST["id"];
    var_dump($_POST["id"]);
    $nombre=$_POST["nombre"];
    $imagen=$_FILES["imagen"];

    $imagen64=base64_encode(file_get_contents($imagen['tmp_name']));

    $productoEditado= array($id,$nombre,$imagen64);

    editElement($productoEditado);

    header("Location: ../../listado.php");

?>
