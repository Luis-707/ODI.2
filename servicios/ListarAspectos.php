<?php
/* falta la documentacion esto es obligatorio OJO */

//print_r($dataCliente);

$sql = sprintf("select * from aspectos");
$respuesta = $this->ejecutarConsultaBdds($sql);
return $respuesta;


?>