<?php session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <title>Modificar</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

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

    <?php
        echo 'esta es variable recibida = ' . $_GET['id'];
        //invocar la funcion select y la tabla
        $result = select_id("usuarios", "id", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>

    <div class="container-fluid">
        <div class="row about-section">
            <div class="col-lg-4 about-card">
                <h3 class="font-weight-light">Registrar Alumno</h3>
                <span class="line mb-5" style="background-color: #001253;"></span>
                <form id="form" name="form" method="post" action="actualizar_usuario.php">
                    <div>
                        <label for="txt_ctr">Numero de Control: </label><br>
                        <input type="text" name="txt_ctr" id="txt_ctr" value="<?php echo $row->id; ?>" required>
                    </div>
                
                    <div>
                        <label for="txt_N">Nombre: </label><br>
                        <input type="text" name="txt_N" id="txt_N" value="<?php echo $row->Nom; ?>" required>
                    </div>

                    <div>
                        <label for="txt_A">Edad: </label><br>
                        <input name="txt_A" id="txt_A" value="<?php echo $row->edad; ?>"  required>
                    </div>

                    <div>
                        <label for="txt_G">Grupo: </label><br>
                        <input name="txt_G" id="txt_G" value="<?php echo $row->grupo; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="lst_Ca">carrera: </label><br>
                        <select class="form-control" id="lst_Ca" name="lst_Ca">
                           <option><?php echo $row->carrera; ?></option>
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
                        <input type="email" name="txt_E" id="txt_E" value="<?php echo $row->Correo; ?>"  required>
                    </div>
                    
                    <div>
                        <label for="txt_C">Contraseña: </label><br>
                        <input type="password" name="txt_C" id="txt_C" value="<?php echo $row->Contra; ?>"  required>
                    </div>
                    
                    <div class="mt-2">
                        <button class="btn btn-outline-info" type="submit" name="iniciar">Registrar</button>
                    </div>
               </form>
            </div>
        </div>
        <?php

          }
        } else {
          echo "no hay ningun registro";
        }
        ?>
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