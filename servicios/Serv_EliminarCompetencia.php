<?php

print_r($dataCliente);

$sql = sprintf("delete from competencias WHERE cd_comp = '%d'");
$respuesta = $this->ejecutarConsultaBdds($sql);
return $respuesta;


?>