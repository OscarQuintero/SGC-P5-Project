<?php
	require("connect_db.php");

	$id=$_GET['id'];

	$peticion="UPDATE dispositivos SET estadoDispositivo='DADO DE BAJA' WHERE id='$id'";

	$sql=mysqli_query($mysqli,$peticion);

    if($sql)
    {
		echo '<script>alert("ARTICULO DADO DE BAJA")</script> ';
		echo "<script>location.href='dispositivos.php' </script>";
	}
    else
    {
		echo '<script>alert("OCURRIÓ UN ERROR AL DAR DE BAJA EL ARTICULO")</script> ';
		echo "<script>location.href='dispositivos.php' </script>";
	}
?>
