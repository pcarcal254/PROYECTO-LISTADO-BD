
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo</title>
</head>
<body>
    <div style="justify-content:center;display:flex;margin-top:150px;">
        <form action="../../control/procesaNuevo/ProcesaNuevo.php" method="post" enctype="multipart/form-data">
            <label>Nombre : </label>
            <input type="text" name="nombre" >
            <br>
            <br>
            <label>Foto : </label>
            <br>
            <br>
            <input type="file" name="imagen">
            <br>
            <br>
            <input type="submit" value="Guardar">
        </form>
    </div>

</body>
</html>