<?php

$sql = sprintf("UPDATE ODI SET ODI_ID = '%d', Nombre_ODI = '%s', Peso = '%d', Rango = '%d', Status = '%s' , PesoxRango = '%d'
WHERE ODI_ID = '%d'", 
            $dataCliente['_post']['ODI_ID'],
            $dataCliente['_post']['Nombre_ODI'],
            $dataCliente['_post']['Peso'],
            $dataCliente['_post']['Rango'],
            $dataCliente['_post']['Status'],
            $dataCliente['_post']['PesoxRango']

            );
            $respuesta = $this->ejecutarConsultaBdds($sql);
            return $respuesta;





?>