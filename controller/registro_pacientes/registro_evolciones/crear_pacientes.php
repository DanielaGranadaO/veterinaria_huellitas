<?php
require("../../modelo/Dbconexion.php");
$objConexion= Conectarse();

$nombre = $_POST['Nombres'];
$nacimiento = $_POST['Nacimiento'];
$genero = $_POST['gender'];
$raza = $_POST['Raza'];
$color = $_POST['Color'];
$cliente = $_POST['Cliente'];

 if($genero = 'Masculino'){
	 $genero = "M";
 }
else{
	$genero ="F";
}

$Consulta = "INSERT INTO `pacientes`( `PacNombre`, `PacFechaNacimiento`, `PacSexo`, `PacRaza`, `PacColor`, `PacCliente`) VALUES ('$nombre','$nacimiento','$genero','$raza','$color','$cliente');";

$Verifica_Paciente = mysqli_query($objConexion," SELECT * FROM `pacientes` WHERE PacNombre = '$nombre'");
if(mysqli_num_rows($Verifica_Paciente)>0)
{
	echo '<script>
	alert ("El Cliente ya esta registrado");
	window.history.go(-1);
	</script>';
	exit;
}

$Resultado= mysqli_query($objConexion,$Consulta);

if ($Resultado == true){
	echo '<script>alert ("Registro Exitoso");
	window.history.go(-1);
	</script>';
	
} 

mysqli_close($objConexion);
?>