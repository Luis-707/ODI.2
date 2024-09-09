<?php

$Persona_id = $_POST["Persona_id"];

    $sql_1 = sprintf("SELECT Persona_id, Cedula, Nombre_y_apellido, genero FROM Persona where Persona_id = %d",$dataCliente['_post']['Persona_id']);
    $respuesta=$this->ejecutarConsultaBdds($sql_1);



    ?>



