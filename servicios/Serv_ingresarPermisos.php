<?php

print_r($dataCliente);

$sql = sprintf("insert into permisos (id_permisos, tipos_permisos, descripcion_auditorias, accion_permitidas)  values ('%d','%s','%s','%s')",
$dataCliente['_post']['id_permisos'],
$dataCliente['_post']['tipos_permisos'],
$dataCliente['_post']['descripcion_auditorias'],
$dataCliente['_post']['accion_permitida']

);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>