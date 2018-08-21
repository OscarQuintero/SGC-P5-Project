<?php
	require("connect_db.php");

	$id=$_GET['id'];

	$peticion="UPDATE equipos_computo SET estadoEquipo='DADO DE BAJA' WHERE id='$id'";

	$sql=mysqli_query($mysqli,$peticion);

    if($sql)
    {
		echo '<script>alert("EQUIPO DADO DE BAJA")</script> ';
		echo "<script>location.href='equipos_de_computo.php' </script>";
	}
    else
    {
		echo '<script>alert("OCURRIÓ UN ERROR AL DAR DE BAJA EL EQUIPO")</script> ';
		echo "<script>location.href='equipos_de_computo.php' </script>";
	}
?>
