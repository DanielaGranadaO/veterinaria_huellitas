<?php
require("../../modelo/Dbconexion.php");
$objConexion= Conectarse();

$id =$_POST['ID'];
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
$Consulta = "UPDATE `pacientes` SET `IdPaciente`='$id',`PacNombre`='$nombre',`PacFechaNacimiento`='$nacimiento',`PacSexo`='$genero',`PacRaza`='$raza',`PacColor`='$color',`PacCliente`='$cliente ' WHERE IdPaciente ='$id'";

echo "El cliente se actualizo con exito";

$Resultado= mysqli_query($objConexion,$Consulta);

header('location:../../tables.php');

?>