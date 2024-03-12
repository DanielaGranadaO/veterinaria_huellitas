<?php
require("../../../modelo/Dbconexion.php");
$objConexion= Conectarse();
if (isset($_POST['Ingresar'])) {
    $Fecha = $_POST['Fecha'];
    $Hora = $_POST['Hora'];
    $Cliente = $_POST['Cliente'];
    $Paciente = $_POST['Paciente'];
    $Opcion = $_POST['opcion'];
    
    
    $Consulta = "INSERT INTO `citas`( `CitFecha`, `CitHora`, `CitCliente`, `CitPaciente`, `CitAsignacion`) VALUES ('$Fecha','$Hora','$Cliente','$Paciente','$Opcion');";
    echo $Consulta;
    $Verifica_Cita = mysqli_query($objConexion," SELECT * FROM `citas` WHERE CitHora = '$Hora'");
    if(mysqli_num_rows($Verifica_Cita)>0)
    {
        echo '<script>alert ("la cita ya esta asignada");
        window.history.go(-1);
        </script>';
        exit;
    }
    
    $Resultado= mysqli_query($objConexion,$Consulta);
    
    if ($Resultado == true){
        echo '<script>alert ("Registro Exitoso");
        </script>';
        
    }  
}

header('location:../../../principal.php');

mysqli_close($objConexion);
?>
	



