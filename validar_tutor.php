<?php session_start();  
include('assets/php/conexion.php'); 
/*obtenemos las variables*/
$email = $_POST['ema_email'];   
$password = $_POST['pas_password'];
/*imprimir las variables */
echo "$email, $password";

//Select para verificar si existe el usuario 
$result = select_id("profesores","Correo","'$email'");

if(mysqli_num_rows($result) > 0){ // compara si existe el usuario 
	 while($row = mysqli_fetch_object($result)){ // Realizamos un bucle utilizando while.
		if($row->Contra == $password){ //compara el pass
            //Almacenamos el nombre de usuario en una variable de sesión usuario
            
            $_SESSION['usuario'] = $row->Nom;
            $_SESSION['grupo'] = $row->grupo;
            $_SESSION['carrera'] = $row->carrera;
            //echo $_SESSION['usuario'].$_SESSION['tipo'];
            ?>
            
            <script languaje="javascript" >alert("<?php echo "Bienvenido ".$row->Nom; ?>");</script>
            <h1>S<?php echo $_SESSION["id"]; ?></h1>
            <meta http-equiv="refresh" content="0;URL=tutor.php" >
            <?php 

            

		    } else{
                ?> 
                <script languaje="javascript" >alert("Contraseña Incorrecta");</script> 
                <meta http-equiv="refresh" content="0;URL=index.php" >
                <?php 
                //exit();<!-- -->
		    }
	    }
} else{
    ?>  <script languaje="javascript" >alert("Usuario o Contraseña incorrecto!");</script> 
        <meta http-equiv="refresh" content="0;URL=index.php" >
    <?php 
    //exit();
}
?>