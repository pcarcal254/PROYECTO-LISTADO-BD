<?php include('./bd/accesoADatos.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTAS ALUMNOS 2 DAW</title>
</head>
<body> 
    <form name="formulario" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td><label>ID</label></td>
                <td><input type="number" name="id" min="0" max="99"></td>
            </tr>
            <tr>
                <td><label>NOMBRE</label></td>
                <td><input type="text" name="nombre"></td>
            </tr>
                <td><label>NOTA</label></td>
                <td><input type="number" name="nota" min="0" max="10"></td>       
            </tr>
        </table>
        <input type="submit" value="Guardar" name="guardar"/>
        <input type="submit" value="Mostrar" name="mostrar"/>
    </form>
    <?php

        if (isset($_POST['guardar'])) {
            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $nota = $_POST['nota'];

            $alumno[] = array ($_POST['id'],$_POST['nombre'],$_POST['nota']);

            $registros = $con->exec('INSERT INTO prueba(id,nombre,nota) VALUES('.$id.',"'.$nombre.'",'.$nota.')');

            echo "<h2>Se ha añadido correcto la nota nueva del alumno</h2>";

        } else if (isset($_POST['mostrar'])) {
            $resultado = $con->query('SELECT nombre,nota FROM prueba');
            while ($registro = $resultado->fetch()) {
                echo "NOMBRE: ".$registro['nombre']." || NOTA: ".$registro['nota'];
                echo "<br>";
            }
        }

    ?>
</body>
</html>