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
    <title>Datos de Alumno</title>
    <!-- font icons -->
    <link href="assets/imgs/Icono.png" rel="icon">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
	<link rel="stylesheet" href="assets/css/johndoe.css">
    <?php include('assets/php/conexion.php'); ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
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
                </ul>
                <ul class="navbar-nav brand">
                    <img src="assets/imgs/icono.png" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title"><?php echo $_SESSION["usuario"]; ?></h5>
                        <div class="brand-subtitle">S<?php echo $_SESSION["id"]; ?></div>
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
                        <a href="logout2.php" class="nav-link">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="about" class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Información Personal</h3>
                <span class="line mb-5"></span>
                <ul class="mt40 info list-unstyled">
                    <li><span>Nombre</span> : <?php echo $_SESSION["usuario"]; ?></li>
                    <li><span>Edad</span> : <?php echo $_SESSION["edad"]; ?></li>
                    <li><span>Grupo</span> : <?php echo $_SESSION["grupo"]; ?></li>
                    <li><span>Carrera</span> : <?php echo $_SESSION["carrera"]; ?> </li>
                    <li><span>Tutor</span> :  <?php echo $_SESSION["tutor"]; ?></li>
                    <li><span>No. Control</span> :  S<?php echo $_SESSION["id"]; ?></li>                    
                </ul> 
            </div>
        </div>
    </div>

    <!-- Portfolio Section -->
    <div class="container-fluid">
        <div id="portafolio" class="row about-section">
            <div class="col-lg about-card">
            <h3 class="font-weight-light">Canalizaciones</h3>
                <span class="line mb-5"></span>
                <?php
                //invocar la funcion select y la tabla
                $result = select_id("cana","no",$_SESSION["id"]);
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
                <h3 class="font-weight-light">Canalizaciones Académicas</h3>
                <span class="line mb-5"></span>
                <?php
                //invocar la funcion select y la tabla
                $result = select_id("cana_aca","noc",$_SESSION["id"]);
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

    <div class="container-fluid">
        <div id="blog" class="row about-section">
            <div class="col-lg-8 about-card">
            <?php
                //invocar la funcion select y la tabla
                $result = select_id("tutorias","noctrl",$_SESSION["id"]);
                // Realizamos un bucle que muestre el resultado
                ?>
                <h3 class="font-weight-light">Tutorias</h3>
                <span class="line mb-5"></span>
                <div class="table-responsive">
                    <table class="table table-bordered reservation position-relative overlay-top overlay-bottom">
                        <thead>
                        <tr>
                            <th><b>Alumno</b></th>
                            <th><b>Instructor</b></th> 
                            <th><b>Tema</b></th>
                            <th><b>Fecha</b></th>
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
