<?php
/**
 *  opciones para poder agregar, buscar, modificar o actualizar, eliminar datos en la tabla 
 *  de discacapasidades en la base de datos
 *  @author Deriek, Luis
 * 
 */
/* para ejecutar sqls: $respuesta = $this->ejecutarConsultaBdds($sql); */
/* array  $dataCliente: contiene los datos enviados desde las vista o interfaz*/

        $sql = sprintf("insert into personal(cd_personal, datos_personales, p_cedula, ubicacion_administrativa, cargo)  values ('%d','%s','%d','%s', '%s')",
            $dataCliente['_post']['cd_personal'],
            $dataCliente['_post']['datos_personales'],
            $dataCliente['_post']['p_cedula'],
            $dataCliente['_post']['ubicacion_administrativa'],
            $dataCliente['_post']['cargo']);
        $respuesta = $this->ejecutarConsultaBdds($sql);
        return $respuesta;
    



?>