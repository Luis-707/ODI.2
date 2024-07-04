<?php
require 'conexion.php';
//convierte el json a array
$objetivos=json_decode($_POST['json'],true);
//recorrer el arreglo
foreach ($objetivos as $objetivo){
     $nombre_obj=$objetivo['nombre_obj'];
     $rango=$objetivo['rango'];
     $peso=$objetivo['peso'];
     $total_obj=$objetivo['total_obj'];
     $guardar=mysqli_query($con,"INSERT INTO objetivos (nombre_obj, rango, peso, total_obj) VALUES ('$nombre_obj', '$rango', '$peso', '$total_obj')");
}