<?php
/**
 *  listade servicios disponible
 * 
 *  @author grupo evaluacio y desepeño
 * 
 */

/* para ejecutar sqls: $respuesta = $this->ejecutarConsultaBdds($sql); */
/* array  $dataCliente: contiene los datos enviados desde las vista o interfaz*/

            $sql = sprintf("Select * from personal ");
            $respuesta = $this->ejecutarConsultaBdds($sql);
            return $respuesta;
       

?>


