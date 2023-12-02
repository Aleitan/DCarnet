<!DOCTYPE html>
<html>

<head>
      <title>Actualizar Usuarios</title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <?php include('assets/php/conexion.php'); ?>
</head>

<body>
      <div id="container">
      <div>
            <div>
            <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Actualizar</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white">Se actualizaron los datos</p>
            </div>
        </div>
    </div>
            <div id="content">
                  <div id="section">
                  <h1>Actualizar usuarios</h1>
                        <h1>Muestra la inserción de datos</h1>
                        <?php
                        //obtener las variables
                        $id = $_POST['txt_id'];
                        $nombre = $_POST['txt_N'];
                        $control = $_POST['txt_ctr'];
                        $asesor = $_POST['txt_a'];
                        $asignatura = $_POST['txt_as'];
                        $sol = $_POST['date_s'];
                        $atte = $_POST['date_a'];
                        ?>
                        <h2>Datos recibidos</h2>
                        <p>Usted ingreso los siguientes datos:</p>
                        <?php
                        //mostrar los datos recibidos

                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable

                        $campos = " id = '$id'";
                        $campos .= ", nombr = '$nombre'";
                        $campos .= ", noc = '$control'";
                        $campos .= ", asesor = '$asesor'";
                        $campos .= ", asignatura = '$asignatura'";
                        $campos .= ", fecha_s = '$sol'";
                        $campos .= ", fecha_a = '$atte'";

                        echo $campos;
                        $where = "id = $id";

                        $cons = update('cana_aca', $campos, $where);

                        if ($cons) {
                        ?>
                              <p style="font-size:30px";>Se actualizaron correctamente los datos de usuario.</p>

                        <?php
                        } else {
                        ?>
                              <p style="font-size:30px";>Hubo un error en la actualización de los datos de usuario.</p>
                        <?php
                        }
                        ?>

                        <meta http-equiv="refresh" content="3;URL=tutor.php">

                  </div>
            </div>
            
      </div>
</body>

</html>