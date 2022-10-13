<?php
if(!isset($_GET["id"]))
{
    header("../listado/listado.php");
}

$id=$_GET["id"];
include("../BD/accesoABD.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    
    <center>
    <form action="ProcesaEdita.php" method="post">
    <label>ID : </label>
    <input type="text" value="<?php echo($id) ?>" id="id"disabled>
    <br>
    <br>
    <label>Nombre : </label>
    <input type="text" >
    <br>
    <br>
    <label>Foto : </label>
    <br>
    <br>
    <input type="file" id="Imagen">
    <br>
    <br>
    <input type="button" value="Guardar" onclick =
      <?php
        header("ProcesaEdita.php");
        ?>>
    </form>
</center>
</body>
</html>
