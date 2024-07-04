<?php

print_r($dataCliente);

$sql = sprintf("insert into rango_de_evaluacion 
(id_rango_evaluacion, cd_personal, id_usuario, calif_total_a, calif_total_b, calif_calificacion_final, rango_actuacion')  values ('%d','%s','%d','%d','%d','%d','%s')",
$dataCliente['_post']['id_rango_evaluacion'],
$dataCliente['_post']['cd_personal'],
$dataCliente['_post']['id_usuario'],
$dataCliente['_post']['calif_total_a'],
$dataCliente['_post']['calif_total_b'],
$dataCliente['_post']['calif_calificacion_final'],
$dataCliente['_post']['rango_actuacion']
);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>