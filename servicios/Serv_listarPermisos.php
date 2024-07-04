<?php
/**
 *  listade servicios disponible
 * 
 *  @author grupo evaluacio y desepeño
 * 
 */

/* para ejecutar sqls: $respuesta = $this->ejecutarConsultaBdds($sql); */
/* array  $dataCliente: contiene los datos enviados desde las vista o interfaz*/

print_r($dataCliente);

$sql = sprintf("select * from permisos");
$respuesta = $this->ejecutarConsultaBdds($sql);
return $respuesta;


/*print_r($dataCliente);

$sql = sprintf("select * from permisos");
$respuesta = $this->ejecutarConsultaBdds($sql);
return $respuesta;
*/
?>