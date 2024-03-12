<?php
require("../../../modelo/Dbconexion.php");
$objConexion= Conectarse();

$id =$_POST['Identificacion'];
$nombre = $_POST['Nombres'];
$apellido = $_POST['Apellidos'];
$direccion = $_POST['Direccion'];
$telefono = $_POST['Telefono'];
$email = $_POST['Email'];



$Consulta = "UPDATE `clientes` SET `CliIdentificacion`='$id',`CliNombres`='$nombre',`CliApellidos`='$apellido',`CliDireccion`='$direccion',`CliTelefono`='$telefono',`CliEmail`='$email' WHERE CliIdentificacion ='$id'";

$Resultado= mysqli_query($objConexion,$Consulta);

header('location:../../../tablas_clientes.php');

?>