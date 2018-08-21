<?php
	require("connect_db.php");
	$id=$_POST['id'];
	$ubicacionAnterior=$_POST['ubicacionAnterior'];
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
	$observaciones= strtoupper($observaciones);
	$marca= strtoupper($marca);
	$modelo= strtoupper($modelo);
	$observaciones= strtoupper($observaciones);
	$tipo= strtoupper($tipo);
	$ns= strtoupper($ns);

	$peticion="UPDATE dispositivos SET ubicacionDispositivo='$ubicacion', idDispositivo='$idDispositivo', ".
			"tipoDispositivo='$tipo',descripcionDispositivo='$descripcion', ".
			"marcaDispositivo='$marca', modeloDispositivo='$modelo', nsDispositivo='$ns',estadoDispositivo='$estado',".
			"observacionesDispositivo='$observaciones', factualizacionDispositivo='$actualizacion'".
 			"WHERE id='$id'";

	$peticion2="INSERT INTO cambios_ubicacion_dispositivo (id_dispositivo, ubicacionAnterior, ubicacionActual, fechaCambio)".
	" VALUES ('$id','$ubicacionAnterior','$ubicacion','$actualizacion')" ;

	$sql=mysqli_query($mysqli,$peticion);
		if($ubicacionAnterior!=$ubicacion){
			$sql2=mysqli_query($mysqli,$peticion2);
		}

    if($sql)
    {
		echo '<script>alert("DATOS ACTUALIZADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='dispositivos.php' </script>";
	}
    else
    {
		echo '<script>alert("OCURRIÓ UN ERROR AL ACTUALIZAR DATOS")</script> ';
		echo "<script>location.href='dispositivos.php' </script>";
	}
?>
