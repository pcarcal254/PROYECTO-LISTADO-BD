<?php 
include ("bd/accesoABD.php");
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
    <div><h1>Listado</h1><a href="vista/nuevo/Nuevo.php">Nuevo</a>
</div>
<div class='div-cen'>
<table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody id="body">
                <?php 
                $registro=selectAll();
                if($registro==null){
                    echo "<tr><td colspan=5>No se ha encontrado ningún elemento</td></tr>";
                }else{
                    while($producto = $registro->fetch()){
                        echo "<tr><td>".$producto['id']."</td><td>".$producto['nombre']."</td><td><img class='fotoProducto' src='data:image/png;base64,".$producto['foto']."'><td><a href='/EJERCICIOS_PHP/vista/edita/Edita.php?id=".$producto['id']."'><img class='simbolo' src='img/editar.png'></a></td>
                        <td><a><img class='simbolo' src='img/borrar.png'></a></td></tr>";
                    }
                }
                
                ?>
            </tbody>
        </table>
</div>
        
</body>
</html>