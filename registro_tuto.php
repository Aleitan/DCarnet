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
                        $nombre = $_POST['txt_N'];
                        $control = $_POST['txt_ctr'];
                        $inst = $_POST['txt_i'];
                        $tema = $_POST['txt_t'];
                        $fec = $_POST['date'];
                        ?>

                        
                        <?php
                        //mostrar los datos recibidos

                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable
                        $cons = insert( 
                              'tutorias',
                              "NULL, '$nombre', '$control', '$inst', '$tema', '$fec' ");
                        if ($cons) {
                        ?>
                              <p>Se ha canalizado correctamente</p>
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