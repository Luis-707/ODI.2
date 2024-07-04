<?php
include_once "config/configuracion.php";

class Seguridad {

    private $claveSecreta ='#Quantum_';
    private $listaNegra = "config/lista_negra_token.php";
    private $listaBlanca = "config/lista_blanca_token.php";

    /*
    public function __construct() {

    }
    */

    static public function identServicio($url){
        list($dir,$var) = explode("?",$url);
        $metodo = array();
        $metodo =  explode("&",$var);
        return $metodo[0];
    }


    public function siglasSistema(){
        return SISTEMA;
    }

    public function nombreSistema(){
        return DESCRIP_SISTEMA;
    }


}

?>