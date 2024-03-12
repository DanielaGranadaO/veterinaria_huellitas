<?php
require("../../../modelo/Dbconexion.php");
$objConexion= Conectarse();

$Id= $_POST['Id'];
$sql="DELETE FROM clientes WHERE CliIdentificacion=$Id";

//mysqli_query($objConexion,"DELETE FROM clientes WHERE CliIdentificacion=$Id") or die("Error al eliminar");
$mysqli=$objConexion->query($sql);
//mysqli_close($objConexion);
//header("../../tabla_clientes.php");
header('location:../../../tablas_clientes.php');
?>