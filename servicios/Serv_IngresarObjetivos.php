<?php

print_r($dataCliente);

$sql = sprintf("insert into objetivos (cd_obj, nombre_objetivo, area_objetivos, obj_peso, 
obj_rango, obj_peso_x_rango, calif_total_b)  values ('%d','%s','%s','%d','%d','%d', '%d' )",
$dataCliente['_post']['cd_obj'],
$dataCliente['_post']['nombre_objetivo'],
$dataCliente['_post']['area_objetivos'],
$dataCliente['_post']['obj_peso'],
$dataCliente['_post']['obj_rango'],
$dataCliente['_post']['obj_peso_x_rango'],
$dataCliente['_post']['calif_total_b']
);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>