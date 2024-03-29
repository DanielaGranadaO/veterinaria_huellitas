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
        <title>Tables </title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
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
                                    <a class="nav-link" href="layout-static.php">Registrar Mascotas</a>
                                    <a class="nav-link" href="layout-sidenav-light.php">Registrar Clientes</a>
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
                                tablas
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                <div class="container text-center">
                        <div class="row">
                        <div class="tabla">
                            <h1> DATOS </h1>
                          <table class="table table-dark table-striped-columns">
                              <br>
                      <thead>
                        <tr>
                          <th scope="col">Identificacion</th>
                          <th scope="col">Nombres</th>
                          <th scope="col">Apellidos</th>
                          <th scope="col">Direccion</th>
                          <th scope="col">Telefono</th>
                          <th scope="col">Email</th>                          
                          <th colspan="2">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php
                          $sql= "SELECT * FROM clientes";
                          $result = mysqli_query($objConexion,$sql);
                          while($mostrar = mysqli_fetch_array($result)){
                          
                          ?>  
                          
                        <tr>
                          <td><?php echo $mostrar['CliIdentificacion']?></td>
                          <td><?php echo $mostrar['CliNombres']?></td>
                          <td><?php echo $mostrar['CliApellidos']?></td>
                          <td><?php echo $mostrar['CliDireccion']?></td>
                          <td><?php echo $mostrar['CliTelefono']?></td>
                          <td><?php echo $mostrar['CliEmail']?></td>                        
                          <td>
                            <!------ EDITAR------>
                          <a href="modificar_clientes.php?id=<?php echo $mostrar['CliIdentificacion']?>">Editar</a>
                            <!------ ELIMINAR------>
                          <form action="controller/registro_pacientes/registro_clientes/borrar_clientes.php" method="post">
                              <input type="hidden" value="<?php echo $mostrar['CliIdentificacion']?>" name="Id" readonly>
                              <td><input class="btn btn-danger" type="submit" value="Eliminar" name="btnEliminar"></td>
                              </form>
                          
                            </td>  
                        </tr>
                          <?php
                          }
                          ?>
                      </tbody>
                    </table>
                        </div>  
                                </div>
                                </div>
              <!-----fin tablas----->
                </main>
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
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
