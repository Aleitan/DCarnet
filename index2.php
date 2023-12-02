<?php session_start(); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="Start your development with JohnDoe landing page.">
   <meta name="author" content="Devcrud">
   <title>Log In - Alumno</title>
   <link rel="icon" href="assets/imgs/favicon.png" type="image/png">
   <!-- font icons -->
   <link href="assets/imgs/Icono.png" rel="icon">
   <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
   <!-- Bootstrap + Steller  -->
   <link rel="stylesheet" href="assets/css/johndoe.css">
</head>
<body>

   <!-- Header -->
   <header class="header header-mini" style="background-image: url(assets/imgs/fondo10.png); background-repeat: no-repeat; background-size: cover;"> 
    <div class="container">
        <a href="https://www.cdhidalgo.tecnm.mx/"><img src="assets/imgs/itsch.png" alt="icon-itsch" width="50" style="float: inline-start; margin-right: 10px;"></a>
        <a href="https://www.facebook.com/TecNM.Campus.Ciudad.Hidalgo/"><img src="assets/imgs/face.png" alt="icon-itsch" width="59" style="float: inline-start; margin-right: 10px;"></a>
    </div>
   </header> <!-- End Of Page Header -->

   <!-- Nav -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="index2.php" class="nav-link">Alumno</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Tutor</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End-Nav -->
   <!-- main content -->
   <div class="container">
    <br>
      <!-- Log in -->
      <div class="container-fluid">
         <div id="about" class="row about-section">
             <div class="col-lg-4 about-card">
                 <h3 class="font-weight-light"></h3>
                 <span class="mb-5"></span>
                 
                 
             </div>
             <div class="col-lg-4 about-card">
                 <h3 class="font-weight-light">Iniciar Sesión</h3>
                 <span class="line mb-5" style="background-color: #001253;"></span>
                 <form action="validar_usuario.php" method="post">
                    <div>
                    <label for="ema_email">Email: </label><br>
                    <input type="email" name="ema_email" value="S20030182@itsch.edu.mx" required>
                    </div>
                    
                    <div>
                    <label for="pas_password">Contraseña: </label><br>
                    <input type="password" name="pas_password" value="123" required>
                    </div>
                    
                    <div class="mt-2">
                        <button class="btn btn-outline-info" type="submit" name="iniciar">Iniciar sesión</button>
                    </div>
                </form>
             </div>
             <div class="col-lg-4 about-card">
                 <h3 class="font-weight-light"></h3>
                 <span class=" mb-5"></span>
                 
             </div>
         </div>
     </div>
     <!-- Fin Log In -->

   <!-- Page Footer -->
   <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 " style="color: #f5ca7c;">
                &copy;  Created By BEANS Team</a> 
            </p>
        </div>
    </footer>
   <!-- End of Page Footer -->  
   
   <!-- core  -->
   <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
   <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

</body>
</html>
