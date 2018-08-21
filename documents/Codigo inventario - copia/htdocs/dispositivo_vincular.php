<?php
	require("connect_db.php");

	$id=$_GET['id'];
	$id_equipo= $_GET['idequipo'];

	$peticion="UPDATE dispositivos SET idEquipo='$id_equipo' WHERE id='$id'";
	$sql=mysqli_query($mysqli,$peticion);

    if($sql)
    {
		echo '<script>alert("DISPOSITIVO VINCULADO")</script> ';
		echo "<script>location.href='equipo.php?id=$id_equipo' </script>";
	}
    else
    {
		echo '<script>alert("OCURRIÓ UN ERROR AL DAR DE BAJA EL ARTICULO")</script> ';
		echo "<script>location.href='equipo.php?id=$id_equipo' </script>";
	}
?>
