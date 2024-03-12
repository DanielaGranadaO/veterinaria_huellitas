<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require("../../../modelo/Dbconexion.php");
$objConexion= Conectarse();

$nombre = $_POST['Nombres'];
$apellido = $_POST['Apellidos'];
$direccion = $_POST['Direccion'];
$telefono = $_POST['Telefono'];
$correo = $_POST['Email'];
$identificacion = $_POST['Identificacion'];

$Consulta = " INSERT INTO `clientes`(`CliIdentificacion`, `CliNombres`, `CliApellidos`, `CliDireccion`, `CliTelefono`, `CliEmail`) VALUES ('$identificacion','$nombre','$apellido','$direccion','$telefono','$correo');";



$Resultado= mysqli_query($objConexion,$Consulta);

if ($Resultado == true){
	echo '<script>alert ("Registro Exitoso");
	</script>';

} 
header('location:../../../tablas_clientes.php');
mysqli_close($objConexion);

?>