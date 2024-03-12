<?php
require("../../../modelo/Dbconexion.php");
$objConexion= Conectarse();

$nombre = $_POST['Nombre'];
$tipo = $_POST['Tippo'];
$recomendaciones = $_POST['Recomendaciones'];


 

$Consulta = "INSERT INTO `cirugias`( `CirNombre`, `CirTipo`, `CirRecomendaciones`)  VALUES ('$nombre','$tipo','$recomendaciones');";



$Resultado= mysqli_query($objConexion,$Consulta);

if ($Resultado == true){
	echo '<script>alert ("Registro Exitoso");
	window.history.go(-1);
	</script>';	
}


mysqli_close($objConexion);
?>