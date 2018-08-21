<?php
	require("connect_db.php");

	$ubicacion=$_POST['UbicacionDispositivo'];
	$idDispositivo=$_POST['IdDispositivo'];
	$descripcion=$_POST['DescripcionDispositivo'];
	$marca=$_POST['MarcaDispositivo'];
	$modelo=$_POST['ModeloDispositivo'];
	$tipo=$_POST['TipoDispositivo'];
	$observaciones=$_POST['ObservacionesDispositivo'];
	$estado=$_POST['EstadoDispositivo'];
	$ns=$_POST['NSDispositivo'];


	$actualizacion= strftime("%d/%m/%Y");

	$ubicacion= strtoupper($ubicacion);
	$descripcion= strtoupper($descripcion);
	$marca= strtoupper($marca);
	$modelo= strtoupper($modelo);
	$observaciones= strtoupper($observaciones);
	$tipo= strtoupper($tipo);
	$ns= strtoupper($ns);

	$peticion="INSERT INTO dispositivos (ubicacionDispositivo, idDispositivo, ".
	"tipoDispositivo, descripcionDispositivo,".
	" nsDispositivo,marcaDispositivo,modeloDispositivo, estadoDispositivo,".
	" observacionesDispositivo, factualizacionDispositivo) ".
	" VALUES ('$ubicacion','$idDispositivo','$tipo','$descripcion',".
	"'$ns','$marca','$modelo','$estado','$observaciones',".
	"'$actualizacion')";
	
	$sql=mysqli_query($mysqli,$peticion);

    if($sql)
    {
		echo '<script>alert("DATOS ALMACENADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='dispositivos.php' </script>";
	}
    else
    {
		echo '<script>alert("OCURRIÓ UN ERROR AL ALMACENAR DATOS")</script> ';
		echo "<script>location.href='dispositivos.php' </script>";
	}
?>
