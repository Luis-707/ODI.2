<?php
/* falta la documentacion esto es obligatorio OJO */

//print_r($dataCliente);

$sql = sprintf("select * from odi");
$respuesta = $this->ejecutarConsultaBdds($sql);
return $respuesta;


?>