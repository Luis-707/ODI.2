<?php

$sql = sprintf("UPDATE competencias SET cd_comp = '%d', nombre_comp = '%s', comp_peso = '%d', comp_rango = '%d', comp_peso_x_rango = '%d', calif_total_a = '%d'
WHERE cd_personal = '%d'", 
            $dataCliente['_get']['cd_comp'],
            $dataCliente['_get']['nombre_comp'],
            $dataCliente['_get']['comp_peso'],
            $dataCliente['_get']['comp_rango'],
            $dataCliente['_get']['comp_peso_x_rango'],
            $dataCliente['_get']['calif_total_a']

            );
            $respuesta = $this->ejecutarConsultaBdds($sql);
            return $respuesta;





?>