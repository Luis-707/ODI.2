<?php


print_r($dataCliente);

$sql = sprintf("insert into planilla_desemp_exep  (codigo_nomina, cd_personal, id_usuario, id_planilla_administrativo, puntaje_total_obtenido, exposicion_de_motivos) 
values ('%d','%d','%d','%d','%s','%s')",
$dataCliente['_post']['codigo_nomina'],
$dataCliente['_post']['cd_personal'],
$dataCliente['_post']['id_usuario'],
$dataCliente['_post']['id_planilla_administrativo'],
$dataCliente['_post']['puntaje_total_obtenido'],
$dataCliente['_post']['exposicion_de_motivos']

);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;

?>