<?php

//$mysql = new mysqli("localhost","root","","veterinaria_huellitas");
function Conectarse()
{
	$Conexion= new MySQLi("localhost","root","","veterinaria_huellitas");
	
	if ($Conexion->connect_errno)
		echo "problemas en la conexion". $Conexion->connect_error;
	
	else
		return $Conexion;
}
?>