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
 // Get the option from the URL

 print_r($dataCliente);
 
 $sql = sprintf("insert into usuario (nombre_usuario, 
 categoria_usuario, contrasena, tipos_permisos_) values ('%s','%s','%d','%s')", 
        
            
            $dataCliente['_post']['nombre_usuario'],
            $dataCliente['_post']['categoria_usuario'],
            $dataCliente['_post']['contrasena'],
            $dataCliente['_post']['tipos_permisos_']);
            $respuesta = $this->ejecutarConsultaBdds($sql);
            return $respuesta;
 
 
 
 
 
 /*switch ($dataCliente['_get']['accion']) {
       
        case 'actualizar':
            $sql = sprintf("UPDATE Usuario SET Nombre_usuario = '%s' WHERE id_usuario = '%s'", 
            $dataCliente['_get']['Nombre_usuario']);
            $respuesta = $this->ejecutarConsultaBdds($sql);
            return $respuesta;
            break;
        case 'ingresar':
            $sql = sprintf("INSERT INTO Usuario (id_usuario, Nombre_usuario) VALUES ('%s', '%s')", 
            $dataCliente['_get']['id_usuario'],$dataCliente['_get']['Nombre_usuario']);
            $respuesta = $this->ejecutarConsultaBdds($sql);
            return $respuesta;
            break;
        default:
            // Handle invalid option
            return 'Invalid option';
    }

?>*/
