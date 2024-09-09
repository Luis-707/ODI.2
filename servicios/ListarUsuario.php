<?php
/* falta la documentacion esto es obligatorio OJO */

//print_r($dataCliente);

$sql = sprintf("select usuario_idp, nombre_usuario, clave, rol from usuarios");
$respuesta = $this->ejecutarConsultaBdds($sql);
return $respuesta;


?>