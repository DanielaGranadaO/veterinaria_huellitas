<?php
require("../../../modelo/Dbconexion.php");
$objConexion= Conectarse();

$nombre = $_POST['Nombre'];
$cantidad = $_POST['Cantidad'];
$uso =$_POST['Uso'];
$id=$_POST['id'];


 

$Consulta = "INSERT INTO `medicamentos`(`MedNombre`, `MedUso`, `MedCantidad`, `MedPaciente`) VALUES ('$nombre','$uso','$cantidad','$id');";



$Resultado= mysqli_query($objConexion,$Consulta);

if ($Resultado == true){
	echo '<script>alert ("Registro Exitoso");
	window.history.go(-1);
	</script>';	
} 

mysqli_close($objConexion);
?>