<?php
require("../../../modelo/Dbconexion.php");
$objConexion= Conectarse();
if (isset($_POST['Ingresar'])) {
    $name = $_POST['id'];
    $observacion = $_POST['Observacion'];
    
    
    
    $Consulta = "INSERT INTO `diagnosticos`(`DiaObservacion`, `DiaConsultaVeterinaria`)  VALUES ('$observacion','$name');";
  
    
 
    
    $Resultado= mysqli_query($objConexion,$Consulta);
    
    if ($Resultado == true){
        echo '<script>alert ("Registro Exitoso");
        window.history.go(-1);
        </script>';
        
    }  
}

mysqli_close($objConexion);
?>