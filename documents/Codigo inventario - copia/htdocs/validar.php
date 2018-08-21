<?php
    session_start();
	$usuario=$_GET['userName'];
	$contrasena=$_GET['password'];
            if($usuario=="admin" && $contrasena=="admin")
            {
                echo "<script>location.href='inicio.php'</script>";
            }
            else
            {
                echo '<script>alert("LOS DATOS PROPORCIONADOS SON ERRONEOS")</script> ';
                echo "<script>location.href='index.html'</script>";
            }
?>
