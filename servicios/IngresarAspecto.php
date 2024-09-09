<?php

print_r($dataCliente);

$sql = sprintf("insert into aspectos(codigo, fac_id, nombre_aspecto, status, puntaje) values ('%s','%d','%s','%s','%d')",
$dataCliente['_post']['codigo'],
$dataCliente['_post']['fac_id'],
$dataCliente['_post']['nombre_aspecto'],
$dataCliente['_post']['status'],
$dataCliente['_post']['puntaje']

);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>