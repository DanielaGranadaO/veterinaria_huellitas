<?php
session_start();
$nombre = $_SESSION['usuario'];
require("modelo/Dbconexion.php");
$objConexion= Conectarse();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/stylesheet_Pacientes.css">
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="principal.php">Sistema</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            
            <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo $nombre;?>
                    <i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        
                        <li><a class="dropdown-item" href="logout.php">Cerrar Sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="principal.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                               Sistema
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                               Registros
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.php">Registro Mascotas</a>
                                    <a class="nav-link" href="layout-sidenav-light.php">Registo Clientes</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Procedimientos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link" href="historia_clinica.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               Historia Clinica
                            </a>  
                            <a class="nav-link" href="citas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                             Citas
                            </a> 
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Tablas De Evoluciones
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="tablas_spa.php">Spa</a>
                                            <a class="nav-link" href="tablas_medicamentos.php">Medicamentos</a>
                                            <a class="nav-link" href="tablas_diagnostico.php">Diagnostico</a>
                                            <a class="nav-link" href="tablas_consulta.php">Consultas</a>
                                            <a class="nav-link" href="tablas_cirugias.php">Cirugias</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading"></div>
                           
                            <a class="nav-link" href="tables.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tablas
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <nav class="nav   bg-dark">
  <a class="nav-link active text-white " aria-current="page" href="spa.php">Spa</a>
  <a class="nav-link text-white" href="consulta_veterinaria.php">Consulta Veterinaria</a>
  <a class="nav-link text-white" href="medicamentos.php">Medicamento</a>
  <a class="nav-link text-white"  href="cirugias.php">Cirugias</a>
  <a class="nav-link text-white"  href="diagnostico.php">Diagnostico</a>
  

            </nav>
            <!-----FORMULARIO BUSCAR------->
            <br><br>
 
  <div class="container  text=center align-content-center justify-content-center">			
                                <br><br>
                      <div class="row ">
                        <div class="col ">
                        <form action="" method="post" id="form">
                                <div class="form">                                
				<div class="grupo">
					<input type="text" name="Identificacion"  required><span class="barra"></span>
					<label for="">Identificacion del Cliente</label>
				</div>
                <button type="submit" name="buscar">Buscar</button><span class="barra"></span>
                                </div>
                            </form>	
                        </div>
                      </div>
                    </div>		
                    <br><br>

                    <?php
if (isset($_POST['buscar'])) {
    $Id= $_POST['Identificacion'];
  //$sql= "SELECT consultasveterinarias.IdConsultaVeterinaria,consultasveterinarias.ConCita,consultasveterinarias.ConObservacion,citas.IdCita,citas.CitCliente FROM consultasveterinarias INNER JOIN citas on consultasveterinarias.ConCita=citas.IdCita where CitCliente=$Id";
  $sql = "SELECT * FROM consultasveterinarias INNER JOIN pacientes ON consultasveterinarias.ConPaciente=pacientes.IdPaciente where PacCliente=$Id";
  $result = mysqli_query($objConexion,$sql);
  while($mostrar = mysqli_fetch_array($result)){
  
  
?>
                            <!-----inicia formulario-->
                            <div class="container  text=center align-content-center justify-content-center">			
                                <br><br>
                      <div class="row ">
                        <div class="col ">
                        <form action="controller/registro_pacientes/diasnosticos/crear_diagnostico.php" method="post" id="form">
                                <div class="form">
                                <h1>Diagnostico</h1>
                                
				<div class="grupo">
					<input type="hidden" name="id" value="<?php echo $mostrar['IdConsultaVeterinaria']?>"  required><span class="barra"></span>
					<!--<label for="">Id Consulta Veterinaria</label>-->
				</div>
                <div class="grupo">
					<input type="text" name="Nombre" value="<?php echo $mostrar['PacNombre']?>"  required><span class="barra"></span>
					<label for="">Nombre Mascota</label>
				</div>
                <div class="grupo">
                <label for="exampleFormControlTextarea1" class="form-label">observacion Cita</label>
  <textarea class="form-control"  name="Observacion_Cita" id="exampleFormControlTextarea1" rows="10"><?php echo $mostrar['ConObservacion']?></textarea>
					
				</div>
                <div class="grupo">
                <label for="exampleFormControlTextarea1" class="form-label">Observacion</label>
  <textarea class="form-control"  name="Observacion"  id="exampleFormControlTextarea1" rows="10"></textarea>
					
				</div>
				
				
		
			
                        
                                    <button type="submit" name="Ingresar">Ingresar</button><span class="barra"></span>
                                </div>
                            </form>	
                        </div>
                      </div>
                    </div>	
                    <?php
  }
}
                    ?>
    	
                            
                
                   <!--termina formulario----> 
                            
                
                </main>
                <br><br>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>