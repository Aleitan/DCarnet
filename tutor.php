<?php session_start();
    if(!isset($_SESSION['usuario'])){
        echo "Usuario no Logueado";
        header('Location: index.php'); 
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JohnDoe landing page.">
    <meta name="author" content="Devcrud">
    <title>Tutor</title>
    <!-- font icons -->
    <link href="assets/imgs/Icono.png" rel="icon">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="assets/css/johndoe.css">
    <?php include('assets/php/conexion.php'); ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>
    <header class="header header-mini" style="background-image: url(assets/imgs/fondo10.png); background-repeat: no-repeat; background-size: cover;">
        <div class="container">
            <a href="https://www.cdhidalgo.tecnm.mx/"><img src="assets/imgs/itsch.png" alt="icon-itsch" width="50" style="float: inline-start; margin-right: 10px;"></a>
        <a href="https://www.facebook.com/TecNM.Campus.Ciudad.Hidalgo/"><img src="assets/imgs/face.png" alt="icon-itsch" width="59" style="float: inline-start; margin-right: 10px;"></a>
            <div class="header-content">
                <h1 class="header-title" style="float: left;"><?php echo $_SESSION["usuario"]; ?></h1>
            </div>
        </div>
    </header>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">Información Personal</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Alumnos</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="assets/imgs/icono.png" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title"><?php echo $_SESSION["usuario"]; ?></h5>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portafolio" class="nav-link">Canalizaciones</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Tutorias</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Registros</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="logout.php" class="nav-link">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <br>
                <h3 class="font-weight-light">Información Personal</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Nombre</span> : <?php echo $_SESSION["usuario"]; ?></li>
                    <li><span>Grupo</span> : <?php echo $_SESSION["grupo"]; ?></li>
                    <li><span>Carrera</span> : <?php echo $_SESSION["carrera"]; ?> </li>                   
                </ul> 
            </div>
        </div>
    </div>

    <!-- Tutorias -->
    <div class="container-fluid">
        <div id="resume" class="row about-section">
            <div class="col-lg-6 about-card">
                <br>
                <h3 class="font-weight-light">Alumnos</h3>
                <span class="line mb-12"></span>
                <br>
                <?php
                //invocar la funcion select y la tabla
                $result = select("usuarios","*","*");
                // Realizamos un bucle que muestre el resultado
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered reservation position-relative overlay-top overlay-bottom">
                        <thead>
                        <tr>
                            <th><b>Alumno</b></th>
                            <th><b>Grupo</b></th> 
                            <th><b>Carrera</b></th>
                            <th><b>No. Control</b></th>
                            <th><b>Funciones</b></th>
                        </tr> 
                        </thead >
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_object($result)) {
                        ?>
                        <tbody>
                        <tr>
                            <td><b><?php echo $row->Nom; ?></b></td>
                            <td><b><?php echo $row->grupo; ?></b></td>
                            <td><b><?php echo $row->carrera; ?></b></td>
                            <td><b>S<?php echo $row->id; ?></b></td>
                            <td class="numeric">
                                <a style="color: #001253" href="modificar.php?id=<?php echo $row->id; ?>" class="button"><b>Modificar</b> </a>
                                <a style="color: #001253" href="delete.php?id=<?php echo $row->id; ?>" class="buttonDelete"><b>Eliminar</b> </a>
                            </td>
                        </tr>
                        </tbody>
                        <?php
                        }
                            } else {
                                echo "no hay ningun registro";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Tutorias -->

    <!-- Portfolio Section -->
    <div class="container-fluid">
        <div id="portafolio" class="row about-section">
            <div class="col-lg about-card">
                <br>
                <h3 class="font-weight-light">Canalizaciones</h3>
                <span class="line mb-5"></span>
                <?php
                //invocar la funcion select y la tabla
                $result = select("cana","*","*");
                // Realizamos un bucle que muestre el resultado
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered reservation position-relative overlay-top overlay-bottom">
                        <thead>
                        <tr>
                            <th><b>Alumno</b></th> 
                            <th><b>Departamento</b></th> 
                            <th><b>Observación</b></th>
                            <th><b>Fecha de Solicitud</b></th>
                            <th><b>Fecha de Atención</b></th>
                            <th><b>Funciones</b></th>
                        </tr> 
                        </thead>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_object($result)) {
                        ?>
                        <tbody>
                        <tr>
                            <td><b><?php echo $row->nomb; ?></b></td>
                            <td><b><?php echo $row->depa; ?></b></td>
                            <td><b><?php echo $row->observacion; ?></b></td>
                            <td><b><?php echo $row->fecha_sol; ?></b></td>
                            <td><b><?php echo $row->fecha_att; ?></b></td>
                            <td class="numeric">
                                <a style="color: #001253" href="modificar_cana.php?id=<?php echo $row->id; ?>" class="button"><b>Modificar</b> </a>
                                <a style="color: #001253" href="delete_cana.php?id=<?php echo $row->id; ?>" class="buttonDelete"><b>Eliminar</b> </a>
                            </td>
                        </tr>
                        </tbody>
                        <?php
                        }
                            } else {
                                echo "no hay ningun registro";
                            }
                        ?>
                    </table>
                </div>
            </div>
            <div class="col-lg about-card">
                <br>
                <h3 class="font-weight-light">Canalizaciones Académicas</h3>
                <span class="line mb-5"></span>
                <?php
                //invocar la funcion select y la tabla
                $result = select("cana_aca","*","*");
                // Realizamos un bucle que muestre el resultado
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered reservation position-relative overlay-top overlay-bottom">
                        <thead>
                        <tr>
                            <th><b>Alumno</b></th>
                            <th><b>Asesor</b></th> 
                            <th><b>Asignatura</b></th>
                            <th><b>Fecha de Solicitud</b></th>
                            <th><b>Fecha de Atención</b></th>
                            <th><b>Funciones</b></th>
                        </tr> 
                        </thead >
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_object($result)) {
                        ?>
                        <tbody>
                        <tr>
                            <td><b><?php echo $row->nombr; ?></b></td>
                            <td><b><?php echo $row->asesor; ?></b></td>
                            <td><b><?php echo $row->asignatura; ?></b></td>
                            <td><b><?php echo $row->fecha_s; ?></b></td>
                            <td><b><?php echo $row->fecha_a; ?></b></td>
                            <td class="numeric">
                                <a style="color: #001253" href="modificar_canaa.php?id=<?php echo $row->id; ?>" class="button"><b>Modificar</b> </a>
                                <a style="color: #001253" href="delete_canaa.php?id=<?php echo $row->id; ?>" class="buttonDelete"><b>Eliminar</b> </a>
                            </td>
                        </tr>
                        </tbody>
                        <?php
                        }
                            } else {
                                echo "no hay ningun registro";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End of portfolio section -->

    <!-- Tutorias -->
    <div class="container-fluid">
        <div id="blog" class="row about-section">
            <div class="col-lg-6 about-card">
                <br>
                <h3 class="font-weight-light">Tutorias</h3>
                <span class="line mb-5"></span>
                <?php
                //invocar la funcion select y la tabla
                $result = select("tutorias","*","*");
                // Realizamos un bucle que muestre el resultado
                ?>
                <div class="table-responsive">
                    <table class="table table-bordered reservation position-relative overlay-top overlay-bottom">
                        <thead>
                        <tr>
                            <th><b>Alumno</b></th>
                            <th><b>Instructor</b></th> 
                            <th><b>Tema</b></th>
                            <th><b>Fecha</b></th>
                            <th><b>Funciones</b></th>
                        </tr> 
                        </thead >
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_object($result)) {
                        ?>
                        <tbody>
                        <tr>
                            <td><b><?php echo $row->nombre; ?></b></td>
                            <td><b><?php echo $row->instructor; ?></b></td>
                            <td><b><?php echo $row->tema; ?></b></td>
                            <td><b><?php echo $row->fecha; ?></b></td>
                            <td class="numeric">
                                <a style="color: #001253" href="modificar_tuto.php?id=<?php echo $row->id; ?>" class="button"><b>Modificar</b> </a>
                                <a style="color: #001253" href="delete_tuto.php?id=<?php echo $row->id; ?>" class="buttonDelete"><b>Eliminar</b> </a>
                            </td>
                        </tr>
                        </tbody>
                        <?php
                        }
                            } else {
                                echo "no hay ningun registro";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Tutorias -->

    <!-- Log in -->
    <div class="container-fluid">
        <div id="contact" class="row about-section">
            <div class="col-lg-4 about-card">
                <br>
                <h3 class="font-weight-light">Registrar Canalización</h3>
                <br>
                <span class="line mb-5" style="background-color: #001253;"></span>
                <form id="form" name="form" action="registro_cana.php" method="post" onsubmit="return validarForm(this);">
                    
                    <div>
                        <label for="txt_N">Alumno: </label><br>
                        <input type="text" name="txt_N" id="txt_N" placeholder="inserte un nombre" required>
                    </div>

                    <div>
                        <label for="txt_ctr">Numero de Control: </label><br>
                        <input type="text" name="txt_ctr" id="txt_ctr" placeholder="inserte un numero de control" required>
                    </div>
                   
                    <div>
                    <label for="txt_D">Departamento: </label><br>
                    <input type="text" name="txt_D" id="txt_D" placeholder="ingrese el nombre del departamento" required>
                    </div>
                   
                    <div>
                    <label for="txt_O">Observación: </label><br>
                    <input type="text" name="txt_O" id="txt_O" placeholder="ingrese las observaciones" required>
                    </div>

                    <div>
                    <label for="date_s">Fecha de Solicitud: </label><br>
                    <input type="date" name="date_s" id="date_s" placeholder="ingrese la fecha de solicitud" required>
                    </div>

                    <div>
                    <label for="date_a">Fecha de Atención: </label><br>
                    <input type="date" name="date_a" id="date_a" placeholder="ingrese la fecha acordada" required>
                    </div>
                   
                    <div class="mt-2">
                        <button class="btn btn-outline-info" type="submit" name="registrar">Registrar</button>
                    </div>
               </form>
            </div>
            <div class="col-lg-4 about-card">
                <br>
                <h3 class="font-weight-light">Registrar Canalización Académica</h3>
                <span class="line mb-5" style="background-color: #001253;"></span>
                <form action="registro_cana_aca.php" method="post">
                    <div>
                        <label for="txt_N">Alumno: </label><br>
                        <input type="text" name="txt_N" id="txt_N" placeholder="inserte un nombre" required>
                    </div>

                    <div>
                        <label for="txt_ctr">Numero de Control: </label><br>
                        <input type="text" name="txt_ctr" id="txt_ctr" placeholder="inserte un numero de control" required>
                    </div>

                   <div>
                   <label for="txt_a">Asesor: </label><br>
                   <input type="text" name="txt_a" id="txt_a" placeholder="inserte un asesor" required>
                   </div>
                   
                   <div>
                   <label for="txt_as">Asignatura: </label><br>
                   <input type="text" name="txt_as" id="txt_as" placeholder="inserte una asignatura" required>
                   </div>

                    <div>
                    <label for="date_s">Fecha de Solicitud: </label><br>
                   <input type="date" name="date_s" id="date_s" placeholder="ingrese la fecha de solicitud" required>
                   </div>

                   <div>
                   <label for="date_a">Fecha de Atención: </label><br>
                   <input type="date" name="date_a" id="date_a" placeholder="ingrese la fecha acordada" required>
                   </div>
                   
                   <div class="mt-2">
                       <button class="btn btn-outline-info" type="submit" name="iniciar">Registrar</button>
                   </div>
               </form>
            </div>
            <div class="col-lg-4 about-card">
                <br>
                <h3 class="font-weight-light">Registrar Tutoria</h3>
                <br>
                <span class="line mb-5" style="background-color: #001253;"></span>
                <form action="registro_tuto.php" method="post">
                   <div>
                   <label for="txt_N">Alumno: </label><br>
                   <input type="text" name="txt_N" id="txt_N" placeholder="inserte un nombre" required>
                   </div>

                   <div>
                        <label for="txt_ctr">Numero de Control: </label><br>
                        <input type="text" name="txt_ctr" id="txt_ctr" placeholder="inserte un numero de control" required>
                    </div>
                   
                    <div>
                   <label for="txt_i">Instructor: </label><br>
                   <input type="text" name="txt_i" id="txt_i" placeholder="inserte el nombre del instructor" required>
                   </div>
                   
                    <div>
                   <label for="txt_t">Tema: </label><br>
                   <input type="text" name="txt_t" id="txt_t" placeholder="inserte un tema" required>
                   </div>

                   <div>
                   <label for="date">Fecha: </label><br>
                   <input type="date" name="date" id="date" placeholder="inserte una fecha" required>
                   </div>
                   
                   <div class="mt-2">
                       <button class="btn btn-outline-info" type="submit" name="iniciar">Registrar</button>
                   </div>
               </form>
            </div> 
        </div>
    </div>
    <div class="container-fluid">
        <div class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Registrar Alumno</h3>
                <span class="line mb-5" style="background-color: #001253;"></span>
                <form id="form" name="form" method="post" action="registro_usuario.php">
                    <div>
                        <label for="txt_ctr">Numero de Control: </label><br>
                        <input type="text" name="txt_ctr" id="txt_ctr" placeholder="inserte un numero de control" required>
                    </div>
                
                    <div>
                        <label for="txt_N">Nombre: </label><br>
                        <input type="text" name="txt_N" id="txt_N" placeholder="inserte un nombre" required>
                    </div>

                    <div>
                        <label for="txt_A">Edad: </label><br>
                        <input name="txt_A" id="txt_A" placeholder="inserte un edad"  required>
                    </div>

                    <div>
                        <label for="txt_G">Grupo: </label><br>
                        <input name="txt_G" id="txt_G" placeholder="inserte un grupo" required>
                    </div>

                    <div class="form-group">
                        <label for="lst_Ca">carrera: </label><br>
                        <select class="form-control" id="lst_Ca" name="lst_Ca">
                           <option>Seleccione su carrera...</option>
                           <option>Sistemas Computacionales</option>
                           <option>Bioquimica</option>
                           <option>Mecatronica</option>
                           <option>Industrial</option>
                        </select>
                    </div>

                    <div>
                        <label for="txt_T">Tutor: </label><br>
                        <input type="text" name="txt_T" id="txt_T" value="<?php echo $_SESSION["usuario"]; ?>"  required>
                    </div>

                    <div>
                        <label for="txt_E">Email: </label><br>
                        <input type="email" name="txt_E" id="txt_E" placeholder="inserte un email"  required>
                    </div>
                    
                    <div>
                        <label for="txt_C">Contraseña: </label><br>
                        <input type="password" name="txt_C" id="txt_C" placeholder="inserte una contraseña"  required>
                    </div>
                    
                    <div class="mt-2">
                        <button class="btn btn-outline-info" type="submit" name="iniciar">Registrar</button>
                    </div>
               </form>
            </div>
        </div>
    <!-- Fin Log In -->

    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 " style="color: #f5ca7c;">
                &copy;  Created By BEANS Team</a> 
            </p>
        </div>
    </footer>

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>

</body>
</html>
