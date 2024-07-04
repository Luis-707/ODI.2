<?php

$sql = sprintf("UPDATE objetivos SET cd_obj = '%d', nombre_objetivo = '%s', area_objetivos = '%s', obj_peso = '%d', obj_rango = '%d', obj_peso_x_rango = '%d', calif_total_b = '%d'
WHERE cd_personal = '%d'", 
            $dataCliente['_get']['cd_obj'],
            $dataCliente['_get']['nombre_objetivo'],
            $dataCliente['_get']['area_objetivos '],
            $dataCliente['_get']['obj_peso'],
            $dataCliente['_get']['obj_rango'],
            $dataCliente['_get']['obj_peso_x_rango'],
            $dataCliente['_get']['calif_total_b']

            );
            $respuesta = $this->ejecutarConsultaBdds($sql);
            return $respuesta;





?>