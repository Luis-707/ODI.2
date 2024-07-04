<?php

$sql = sprintf("UPDATE Usuario SET Nombre_usuario = '%s', contrasena = '%s'  WHERE id_usuario = '%s'", 
$dataCliente['_post']['Nombre_usuario']);
$respuesta = $this->ejecutarConsultaBdds($sql);
return $respuesta;

?>