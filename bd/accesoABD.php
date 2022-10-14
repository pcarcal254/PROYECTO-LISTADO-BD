<?php

    function conDB(){
        return new PDO('mysql:host=localhost;dbname=supermercado', 'root');
    }

    /* @param $newData -> ARRAY CON LOS DATOS NUEVOS
       @return $registros -> - TRUE SI SE HA EJECUTADO CORRECTAMENTE
                             - FALSE SI DA ERROR*/
    function insertIntoTable($newData) {
        $con = conDB();
        $registros = $con ->exec('INSERT INTO producto(nombre,foto) VALUES("'.$newData[0].'","'.$newData[1].'")');
        $con = null;
        if ($registros >= 0 ){
            return true;
        } else {
            return false;
        }
    }

    /* @return $registros -> - OBJ SI HAY ROWS (PERO PUEDE SER 0 EN EL CASO DE NO HABER NINGUN DATO)
                             - SI NO DEVUELVE FALSE EN CASO DE FALLO*/
    function selectAll() {
        $con = conDB();
        $registros = $con -> query('SELECT * FROM producto');
        return $registros;
    }

    /* @param $id -> VALOR DE LA ID
       @return $registros -> - TRUE SI SE HA EJECUTADO CORRECTAMENTE Y HA BORRADO
                             - FALSE SI DA ERROR*/
    function deleteById($id) {
        $con = conDB();
        $registros = $con ->exec('DELETE FROM producto WHERE id = '.$id.');');
        if ($registros >= 0){
            return true;
        } else {
            return false;
        }
    }

    /* @param $id -> VALOR DE LA ID
       @return $registros -> - TRUE SI SE HA EJECUTADO CORRECTAMENTE (PERO PUEDE SER 0 EN EL CASO DE NO HABER NINGUN DATO) 
                             - FALSE SI DA ERROR*/
    function selectById($id) {
        $con = conDB();
        $registros = $con -> query("SELECT nombre,foto FROM producto WHERE id = $id");
        return $registros;
    }

    /* @param $arrayEditData -> ARRAY CON LOS DATOS DEL PRODUCTO A EDITAR: id,nombre,foto
       @return $registros -> - TRUE SI SE HA EJECUTADO CORRECTAMENTE (PERO PUEDE SER 0 EN EL CASO DE NO HABER NINGUN DATO)
                             - FALSE SI DA ERROR*/
    function editElement($arrayEditData) {
        $con = conDB();
        $registros = $con -> exec('UPDATE producto SET nombre ="'.$arrayEditData[1].'", foto = "'.$arrayEditData[2].'" WHERE id = '.$arrayEditData[0].');');
        if ($registros >= 0){
            return true;
        } else {
            return false;
        }
    }

?>