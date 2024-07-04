<?php
/**
 *  lista de servicios disponible para categoria
 * 
 *  @author grupo evaluacio y desepeño
 * 
 */

/* para ejecutar sqls: $respuesta=$this->ejecutarConsultaBdds($sql); 
/* array  $dataCliente: contiene los datos enviados desde las vista o interfaz*/


//$dataCliente = array(); // Initialize an empty array
 
            $sql = sprintf("insert into Usuario (id_usuario, Contrasena) VALUES ('%d', '%s')", 
            $dataCliente['_post']['id_usuario'],
            $dataCliente['_post']['Contrasena']);
            $respuesta = $this->ejecutarConsultaBdds($sql);
            return $respuesta;

?>
