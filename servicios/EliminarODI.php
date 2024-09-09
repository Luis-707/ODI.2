<?php

$respuesta = "";
/* antes de eliminar debes verificar si existe para saber si eliminarás o no */
$sql_1 = sprintf("SELECT * from odi where odi_id = %d", $dataCliente['_post']['odi_id']);
$respuesta = $this->ejecutarConsultaBdds($sql_1);

if (count($respuesta) > 0) {
    /* si existe eliminas */
    $sql = sprintf("DELETE FROM odi WHERE odi_id = %d", $dataCliente['_post']['odi_id']);
    $respuesta = $this->ejecutarConsultaBdds($sql);
    
    /* verificas si se eliminó */
    $sql_1 = sprintf("SELECT * from odi where odi_id = %d", $dataCliente['_post']['odi_id']);
    $respuesta = $this->ejecutarConsultaBdds($sql_1);
    if (count($respuesta) == 0) {
        $respuesta = true;
    } else {
        $respuesta = "Error al eliminar";
    }
} else {
    $respuesta = "odi no existe";
}

return $respuesta;

?>