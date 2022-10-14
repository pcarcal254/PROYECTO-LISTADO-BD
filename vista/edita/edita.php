<?php
    include("../../bd/accesoABD.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR PRODUCTO</title>
</head>
<body>
<div style="justify-content:center;display:flex;margin-top:150px;">
    <?php
    if(!isset($_GET["id"]))
    {
        header("../../listado.php");
    } else {
        $id=$_GET["id"];
    echo '<form action="../../control/procesaEdita/ProcesaEdita.php" method="post" enctype="multipart/form-data">';
    echo    '<label>ID : </label>';
    echo    '<input type="text" name="id" value="'.$id.'" disabled>';
    echo    '<br>';
    echo    '<br>';
    $registro=selectById($id);
    echo    '<label>Nombre : </label>';
    while($producto = $registro->fetch()) {
        echo    '<input type="text" name="nombre" value="'.$producto['nombre'].'">';
    };
    echo    '<br>';
    echo    '<br>';
    echo    '<label>Foto : </label>';
    echo    '<br>';
    echo    '<br>';
    echo    '<input type="file" name="imagen">';
    echo    '<br>';
    echo    '<br>';
    echo    '<input type="submit" value="Guardar">';
    echo '</form>';
    }

    ?>
</div>
</body>
</html>
