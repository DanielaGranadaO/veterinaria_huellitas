<?php
require("../../modelo/Dbconexion.php");
$objConexion= Conectarse();

$Id= $_POST['Id'];

mysqli_query($objConexion,"DELETE FROM pacientes WHERE IdPaciente=$Id") or die("Error al eliminar");

header('location:../../tables.php');
mysqli_close($objConexion);

?>