<?php

$respuesta = "";
/* antes de actualizar debes verificar si existe para saber si actualizarás o no */
$sql_1 = sprintf("SELECT * from odi where odi_id = %d", $dataCliente['_post']['odi_id']);
$respuesta = $this->ejecutarConsultaBdds($sql_1);

if (count($respuesta) > 0) {
    /* si existe actualizas */
    $sql = sprintf("UPDATE odi SET nombre_odi = '%s', peso = '%s', status = '%s' WHERE odi_id = %d", 
    $dataCliente['_post']['nombre_odi'],
    $dataCliente['_post']['peso'],
    $dataCliente['_post']['status'],
    $dataCliente['_post']['odi_id']);
    $respuesta = $this->ejecutarConsultaBdds($sql);
    
    /* verificas si se actualizó */
    $respuesta = $this->ejecutarConsultaBdds($sql_1);
    if (count($respuesta) > 0) {
        $respuesta = true;
    } else {
        $respuesta = "Error al actualizar";
    }
} else {
    $respuesta = "odi no existe";
}

return $respuesta;
?>