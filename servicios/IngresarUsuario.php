<?php
/**
 *  lista de servicios disponible para Login
 * 
 *  @author grupo evaluacio y desepeño
 * 
 */

/* para ejecutar sqls: $respuesta=$this->ejecutarConsultaBdds($sql); 
/* array  $dataCliente: contiene los datos enviados desde las vista o interfaz*/

 $respuesta = "";
 /* antes de guardar debes verificar si existe para saber si guardaras o no */
 $sql_1 = sprintf("SELECT * from usuario where id_usuario = %d",$dataCliente['_post']['id_usuario']);
 $respuesta=$this->ejecutarConsultaBdds($sql_1);
 
 if (count($respuesta) > 0) {
    $respuesta = "usuario ya existe";
 }else{ /* si no existe lo guardo */
    $sql = sprintf("INSERT INTO usuario (id_usuario, nombre_usuario, contrasena, categoria_usuario, tipos_permisos_) VALUES (%d, '%s', '%s', '%s', '%s')", 
    $dataCliente['_post']['id_usuario'],
    $dataCliente['_post']['nombre_usuario'],
    $dataCliente['_post']['contrasena'],
    $dataCliente['_post']['categoria_usuario'],
    $dataCliente['_post']['tipos_permisos_']);
    $respuesta = $this->ejecutarConsultaBdds($sql);

    /* cosulto si se guardo */
    $respuesta = $this->ejecutarConsultaBdds($sql_1);
    if (!count($respuesta) > 0) {
        $respuesta = false;
    }
 }

 return $respuesta;

 ?>















 
 
 

 

 
 
 
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
