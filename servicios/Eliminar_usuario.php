<?php

$respuesta = "";
/* antes de eliminar debes verificar si existe para saber si eliminarás o no */
$sql_1 = sprintf("SELECT * from usuario where usuario_idp = %d", $dataCliente['_post']['usuario_idp']);
$respuesta = $this->ejecutarConsultaBdds($sql_1);

if (count($respuesta) > 0) {
    /* si existe eliminas */
    $sql = sprintf("DELETE FROM usuario WHERE usuario_idp = %d", $dataCliente['_post']['usuario_idp']);
    $respuesta = $this->ejecutarConsultaBdds($sql);
    
    /* verificas si se eliminó */
    $sql_1 = sprintf("SELECT * from usuario where usuario_idp = %d", $dataCliente['_post']['usuario_idp']);
    $respuesta = $this->ejecutarConsultaBdds($sql_1);
    if (count($respuesta) == 0) {
        $respuesta = true;
    } else {
        $respuesta = "Error al eliminar";
    }
} else {
    $respuesta = "usuario no existe";
}

return $respuesta;

?>


