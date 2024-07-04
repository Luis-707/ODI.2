<?php
/* falta la documentacion esto es obligatorio OJO */

//print_r($dataCliente);

$sql = sprintf("select * from usuario");
$respuesta = $this->ejecutarConsultaBdds($sql);
return $respuesta;


?>