<?php
$conexion = new mysqli("localhost","root","","dog_martinez");

if($conexion->connect_error){
die("Error de conexión");
}
?>