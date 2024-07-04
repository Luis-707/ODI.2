<?php
print_r($dataCliente);

$sql = sprintf("insert into planilla_obrero 
(cd_personal, id_usuario, id_planilla_obrero, encabezado, titulo_pa, ubicacion_fisica, ubicacion_administrativo, pie_de_pagina, fecha_firma_pa, comentario_sup, comentario_evaluado)
 values ('%d','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s','%s')",

$dataCliente['_post']['cd_personal'],
$dataCliente['_post']['id_usuario'],
$dataCliente['_post']['id_planilla_obrero'],
$dataCliente['_post']['encabezado'],
$dataCliente['_post']['titulo_pa'],
$dataCliente['_post']['ubicacion_fisica'],
$dataCliente['_post']['ubicacion_administrativa'],
$dataCliente['_post']['pie_de_pagina'],
$dataCliente['_post']['fecha_firma_pa'],
$dataCliente['_post']['comentario_sup'],
$dataCliente['_post']['comentario_evaluado']

);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;

?>