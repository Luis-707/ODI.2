<?php

print_r($dataCliente);

$sql = sprintf("update permisos set tipos_permisos = '%s', descripcion_auditorias = '%s', accion_permitida = '%s' 
WHERE id_permisos = '%d'",
            $dataCliente['_put']['id_permisos'],
            $dataCliente['_put']['tipos_permisos'],
            $dataCliente['_put']['descripcion_auditorias'],
            $dataCliente['_put']['accion_permitida']);
            $respuesta = $this->ejecutarConsultaBdds($sql);
            return $respuesta;










            /*$sql = sprintf("UPDATE categoria SET Evaluador = '%s', Evaluado = '%s', Supervisor = '%s' WHERE id = '%s'", 
            $dataCliente['_get']['supervisor'],
            $dataCliente['_get']['evaluador'],
            $dataCliente['_get']['evaluado'],
            $dataCliente['_get']['codigo']);
            $respuesta = $this->ejecutarConsultaBdds($sql);
            return $respuesta;
*/



?>