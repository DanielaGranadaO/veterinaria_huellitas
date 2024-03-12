<?php
require("../../../modelo/Dbconexion.php");
$objConexion= Conectarse();
if (isset($_POST['Ingresar'])) {
    $Cita = $_POST['id'];
    $Paciente = $_POST['Paciente'];
    $Observacion = $_POST['Observacion'];
    
    
    $Consulta = "INSERT INTO `spas`( `SpaPaciente`, `SpaCita`, `SpaObservacion`) VALUES ('$Paciente','$Cita','$Observacion');";
    echo $Consulta;
    
 
    
    $Resultado= mysqli_query($objConexion,$Consulta);
    
    if ($Resultado == true){
        echo '<script>alert ("Registro Exitoso");
        window.history.go(-1);
        </script>';
        
    }  
}

mysqli_close($objConexion);
?>
	