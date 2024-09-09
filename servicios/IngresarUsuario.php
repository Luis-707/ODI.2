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
 $sql_1 = sprintf("SELECT * from usuarios where usuario_idp = %d",$dataCliente['_post']['usuario_idp']);
 $respuesta=$this->ejecutarConsultaBdds($sql_1);
 
 if (count($respuesta) > 0) {
    $respuesta = "usuario ya existe";
 }else{ /* si no existe lo guardo */
    $sql = sprintf("INSERT INTO usuarios(usuario_idp,
	nombre_usuario, clave, rol)VALUES (%d, '%s', '%d', '%s')", 
   
   $dataCliente['_post']['usuario_idp'],
    $dataCliente['_post']['nombre_usuario'],
    $dataCliente['_post']['clave'],
    $dataCliente['_post']['rol']);
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
