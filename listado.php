<?php 
include ("accesoABD.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Document</title>
</head>
<body>
    <div><h1>Listado</h1><a href="nuevo.php">Nuevo</a>
</div>

        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Foto</th>
                    <th><img src="img/editar.png" href="Edita.php"></th>
                    <th><img src="img/borrar.png" href="Nuevo.php"></th>
                </tr>
            </thead>
            <tbody id="body">
                <?php 
                $registro=selectAll();
                if($registro==0){
                    echo "<tr><td colspan=5>No se ha encontrado ningún elemento</td></tr>";
                }else{
                    while($registro=$producto->fetch()){
                        echo "<tr><td>".$registro['id']."</td><td>".$registro['nombre']."</td><td><img src='data:image/png;base64,".$registro['foto']."'></tr>";
                    }
                }
                
                ?>
            </tbody>
        </table>
</body>
</html>