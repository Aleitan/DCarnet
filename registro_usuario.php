<!DOCTYPE html>
<html>

<head>
      <title>Crear usuario</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <meta name="description" content="Sistemas computacionales">
      <meta name="keywords" content="MySql, conexión, Wamp">
      <meta name="author" content="Ramirez Erik, Sistemas">
      
      <?php include('assets/php/conexion.php'); ?>
</head>

<body>
      <div>
            <div>
            <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Usuario Creado</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white">Usuario Registrado</p>
            </div>
        </div>
    </div>
            </div>
            <div>
                  <div>
                        <h2>Muestra la inserción de datos</h2>
                        <hr>
                        <?php

                        //obtener las variables
                        $id = $_POST['txt_ctr'];
                        $nombre = $_POST['txt_N'];
                        $edad = $_POST['txt_A'];
                        $grupo = $_POST['txt_G'];
                        $carrera = $_POST['lst_Ca'];
                        $tutor = $_POST['txt_T'];
                        $mail = $_POST['txt_E'];
                        $pss = $_POST['txt_C'];
                        ?>

                        <h2>Datos recibidos</h2>
                        <hr>
                        <p>Usted ingreso los siguientes datos:</p>
                        <?php
                        //mostrar los datos recibidos
                        echo "<h3>$id</h3>
                              <h3>$nombre</h3>
                              <h3>$edad</h3>
                              <h3>$grupo</h3>
                              <h3>$carrera</h3>
                              <h3>$tutor</h3>
                              <h3>$mail</h3>
                              <h3>$pss</h3>";

                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable
                        $cons = insert( 
                              'usuarios',
                              "'$id', '$nombre', '$edad', '$grupo', '$carrera', '$tutor', '$mail', '$pss', 'NULL' ");
                        if ($cons) {
                        ?>
                              <p>El Usuario SE AÑADIO CORRECTAMENTE a la base de datos.</p>
                              <meta http-equiv="refresh" content ="3, URL=tutor.php">
                        <?php
                        } else {
                        ?>
                              <p>El usuario no pudo ser insertada en la base de datos.</p>
                        <?php
                        }
                        ?>
                  </div>
                  
            </div>
            <!-- Footer Start -->
    <!-- Footer End -->
            
      </div>
</body>

</html>