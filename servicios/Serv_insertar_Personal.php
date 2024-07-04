<?php

print_r($dataCliente);

$sql = sprintf("insert into personal  (cd_personal, datos_personales, 
p_cedula, ubicacion_administrativa, cargo)  values ('%d','%s','%d','%s','%s')",
$dataCliente['_post']['cd_personal'],
$dataCliente['_post']['datos_personales'],
$dataCliente['_post']['p_cedula'],
$dataCliente['_post']['ubicacion_administrativa'],
$dataCliente['_post']['cargo'],
);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;

?>