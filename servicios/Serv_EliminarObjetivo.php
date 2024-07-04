<?php

print_r($dataCliente);

$sql = sprintf("delet from objetivos WHERE cd_obj = '%d'", $cd_obj);
$respuesta = $this->ejecutarConsultaBdds($sql);
return $respuesta;









?>