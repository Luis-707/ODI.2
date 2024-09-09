<?php

$respuesta = "";
/* antes de actualizar debes verificar si existe para saber si actualizarás o no */
$sql_1 = sprintf("SELECT * from usuario where usuario_idp = %d", $dataCliente['_post']['usuario_idp']);
$respuesta = $this->ejecutarConsultaBdds($sql_1);

if (count($respuesta) > 0) {
    /* si existe actualizas */
    $sql = sprintf("UPDATE usuario SET persona_id = '%d', nombre_usuario = '%s', clave = '%s', rol = '%s' WHERE usuario_idp = %d", 
    $dataCliente['_post']['persona_id'],
    $dataCliente['_post']['nombre_usuario'],
    $dataCliente['_post']['clave'],
    $dataCliente['_post']['rol'],
    $dataCliente['_post']['usuario_idp']);
    $respuesta = $this->ejecutarConsultaBdds($sql);
    
    /* verificas si se actualizó */
    $respuesta = $this->ejecutarConsultaBdds($sql_1);
    if (count($respuesta) > 0) {
        $respuesta = true;
    } else {
        $respuesta = "Error al actualizar";
    }
} else {
    $respuesta = "usuario no existe";
}

return $respuesta;
?>