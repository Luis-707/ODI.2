<?php

print_r($dataCliente);

$sql = sprintf("insert into odi(ua_id, ja_id, nombre_odi, peso,status)  values ('%d', '%d', '%s','%d','%s')",

$dataCliente['_post']['ua_id'],
$dataCliente['_post']['ja_id'],
$dataCliente['_post']['nombre_odi'],
$dataCliente['_post']['peso'],
$dataCliente['_post']['status']

);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>