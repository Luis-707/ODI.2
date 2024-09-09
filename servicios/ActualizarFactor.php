<?php

$respuesta = "";
/* antes de actualizar debes verificar si existe para saber si actualizarás o no */
$sql_2 = sprintf("SELECT * from factores where fac_id = %d", $dataCliente['_post']['fac_id']);
$respuesta = $this->ejecutarConsultaBdds($sql_2);

if (count($respuesta) > 0) {
    /* si existe actualizas */
    $sql = sprintf("UPDATE factores SET codigo = '%s',nombre_factor = '%s', porcentaje = '%d', status = '%s', cargo_asig = '%s' WHERE fac_id = %d",
    $dataCliente['_post']['codigo'], 
    $dataCliente['_post']['nombre_factor'],
    $dataCliente['_post']['porcentaje'],
    $dataCliente['_post']['status'],
    $dataCliente['_post']['cargo_asig'],
    $dataCliente['_post']['fac_id']);
    $respuesta = $this->ejecutarConsultaBdds($sql);
    
    /* verificas si se actualizó */
    $respuesta = $this->ejecutarConsultaBdds($sql_2);
    if (count($respuesta) > 0) {
        $respuesta = true;
    } else {
        $respuesta = "Error al actualizar";
    }
} else {
    $respuesta = "factor no existe";
}

return $respuesta;
?>