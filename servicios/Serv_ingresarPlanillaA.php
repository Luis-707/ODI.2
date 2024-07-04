<?php


print_r($dataCliente);

$sql = sprintf("insert into planilla_administrativo  (cd_obj, id_planilla_administrativo, nombre_objetivo, 
encabezado, periodo_de_evaluado, titulo_pa, datos_personales, p_cedula, pie_de_pagina, fecha_firma, comentario_spv)  values ('%d','%d','%s','%s','%s','%s','%d','%s','%s','%s')",
$dataCliente['_post']['cd_obj'],
$dataCliente['_post']['id_planilla_administrativo'],
$dataCliente['_post']['encabezado'],
$dataCliente['_post']['periodo_de_evaluado'],
$dataCliente['_post']['titulo_pa'],
$dataCliente['_post']['datos_personales'],
$dataCliente['_post']['p_cedula'],
$dataCliente['_post']['pie_de_pagina'],
$dataCliente['_post']['fecha_firma'],
$dataCliente['_post']['comentario_spv'],
);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;

?>