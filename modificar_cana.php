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
        $result = select_id("cana", "id", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>

    <div class="container-fluid">
        <div class="row about-section">
        <div class="col-lg-4 about-card">
                <br>
                <h3 class="font-weight-light">Registrar Canalización</h3>
                <br>
                <span class="line mb-5" style="background-color: #001253;"></span>
                <form id="form" name="form" action="actualizar_cana.php" method="post">
                    
                    <div>
                        <label for="txt_id">id: </label><br>
                        <input type="text" name="txt_id" id="txt_id" value="<?php echo $row->id; ?>" required>
                    </div>
                
                    <div>
                        <label for="txt_N">Alumno: </label><br>
                        <input type="text" name="txt_N" id="txt_N" value="<?php echo $row->nomb; ?>" required>
                    </div>

                    <div>
                        <label for="txt_ctr">Numero de Control: </label><br>
                        <input type="text" name="txt_ctr" id="txt_ctr" value="<?php echo $row->no; ?>" required>
                    </div>
                   
                    <div>
                    <label for="txt_D">Departamento: </label><br>
                    <input type="text" name="txt_D" id="txt_D" value="<?php echo $row->depa; ?>" required>
                    </div>
                   
                    <div>
                    <label for="txt_O">Observación: </label><br>
                    <input type="text" name="txt_O" id="txt_O" value="<?php echo $row->observacion; ?>" required>
                    </div>

                    <div>
                    <label for="date_s">Fecha de Solicitud: </label><br>
                    <input type="date" name="date_s" id="date_s" value="<?php echo $row->fecha_sol; ?>" required>
                    </div>

                    <div>
                    <label for="date_a">Fecha de Atención: </label><br>
                    <input type="date" name="date_a" id="date_a" value="<?php echo $row->fecha_att; ?>" required>
                    </div>
                   
                    <div class="mt-2">
                        <button class="btn btn-outline-info" type="submit" name="registrar">Registrar</button>
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