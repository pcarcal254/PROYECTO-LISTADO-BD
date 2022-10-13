<?php
    include("../BD/accesoABD.php");


    $id=$_POST["id"];
    $nombre=$_POST["Nombre"];
    $Imagen=$_POST["Imagen"];

    $Imagen=file_get_contents($Imagen);
    $Imagen64=base64_encode($Imagen);


    $ProductoEditado= new Array($id,$nombre,$Imagen64);



    header("../listado/listado.php");

?>