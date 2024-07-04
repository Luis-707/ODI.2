<?php

$sql = sprintf("UPDATE formula SET fecha_creacion = '%s', tipo_operacion = '%s', valor_peso = '%d' WHERE id_formula = '%d'", 
$dataCliente['_post']['fecha_creacion'],
$dataCliente['_post']['tipo_operacion'],
$dataCliente['_post']['valor_peso']

);
$respuesta = $this->ejecutarConsultaBdds($sql);
return $respuesta;



?>