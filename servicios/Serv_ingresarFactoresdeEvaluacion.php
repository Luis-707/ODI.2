<?php

print_r($dataCliente);

$sql = sprintf("insert into factores_de_evaluacion (id_fe, cd_personal, id_usuario, 
id_planilla_obrero, aspectos_evaluados, puntaje, puntaje_final)  values ('%d','%s','%d','%d','%d','%d', '%d')",
$dataCliente['_post']['id_fe'],
$dataCliente['_post']['cd_personal'],
$dataCliente['_post']['id_usuario'],
$dataCliente['_post']['id_planilla_obrero'],
$dataCliente['_post']['aspectos_evaluados'],
$dataCliente['_post']['puntaje'],
$dataCliente['_post']['puntaje_final']
);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>