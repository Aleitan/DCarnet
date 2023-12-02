<!DOCTYPE html>
<html>

<head>
  <title>Borrar usuario</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

      </style>

  <?php include('assets/php/conexion.php'); ?>
</head>

<body>
  <div id="container">
    <div id="header">
    </div>
    <div id="content">
      <div id="section">
        <?php
        echo 'this is the received variable = ' . $_GET['id'];
        //invocar la funcion select y la tabla
        $result = select_id("tutorias", "id", $_GET['id']);
        // Realizamos un bucle que muestre el resultado
        if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_object($result)) {
        ?>
        <?php

          }
          $result = delete("tutorias", "id", $_GET['id']);
        } else {
          echo "record does not exist";
        }
        ?>
        </table>

        <meta http-equiv="refresh" content="3;URL=tutor.php">
      </div>
    </div>
    <!-- footer ******************** -->
  </div>
</body>

</html>