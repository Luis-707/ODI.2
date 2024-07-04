<?php

print_r($dataCliente);

$sql = sprintf("insert into competencias (cd_comp, nombre_comp, comp_peso, 
comp_rango, comp_peso_x_rango, calif_total_a)  values ('%d','%s','%d','%d','%d','%d')",
$dataCliente['_post']['cd_comp'],
$dataCliente['_post']['nombre_comp'],
$dataCliente['_post']['comp_peso'],
$dataCliente['_post']['comp_rango'],
$dataCliente['_post']['comp_peso_x_rango'],
$dataCliente['_post']['calif_total_a'],
);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;


?>