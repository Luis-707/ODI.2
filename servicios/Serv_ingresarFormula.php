<?php
/**
 *  opciones para poder agregar, buscar, modificar o actualizar, eliminar datos en la tabla 
 *  de discacapasidades en la base de datos
 *  @author Nicole, Monica
 * 
 */
/* para ejecutar sqls: $respuesta = $this->ejecutarConsultaBdds($sql); */
/* array  $dataCliente: contiene los datos enviados desde las vista o interfaz*/


print_r($dataCliente);

$sql = sprintf("insert into formulas (id_formula, cd_personal, id_usuario, fecha_creacion, tipo_operacion, valor_peso)  values ('%d','%d','%d','%s', '%s', '%d')",
$dataCliente['_post']['id_formula'],
$dataCliente['_post']['cd_personal'],
$dataCliente['_post']['id_usuario'],
$dataCliente['_post']['fecha_creacion'],
$dataCliente['_post']['tipo_operacion'],
$dataCliente['_post']['valor_peso']);

$respuesta = $this->ejecutarConsultaBdds($sql);


return $respuesta;
?>