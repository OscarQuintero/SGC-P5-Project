<?php
	require("connect_db.php");
	$id=$_POST['id'];
	$ubicacionAnterior=$_POST['ubicacionAnterior'];
	$nombre=$_POST['NombreEquipo'];
	$ubicacion=$_POST['UbicacionEquipo'];
	$ip=$_POST['IpEquipo'];
	$marca=$_POST['MarcaEquipo'];
	$modelo=$_POST['ModeloEquipo'];
	$procesador=$_POST['ProcesadorEquipo'];
	$ram=$_POST['RamEquipo'];
	$disco=$_POST['DiscoEquipo'];
	$ns=$_POST['NSEquipo'];
	$idequipo=$_POST['IdEquipo'];
	$so=$_POST['SOEquipo'];
	$utp=$_POST['UtpEquipo'];
	$encargado=$_POST['EncargadoEquipo'];
	$observaciones=$_POST['ObservacionesEquipo'];
	$usuario=$_POST['UsuarioEquipo'];
	$licencia=$_POST['LicenciaEquipo'];
	$adquisicion=$_POST['FAdquisicionEquipo'];
	$estado=$_POST['EstadoEquipo'];
	$tipo=$_POST['TipoEquipo'];
	$actualizacion= strftime("%d/%m/%Y");
	$ubicacion= strtoupper($ubicacion);
	$observaciones= strtoupper($observaciones);
	if($licencia!=""){
		$licencia= date("d/m/Y", strtotime($licencia));
	}
	if($adquisicion!=""){
		$adquisicion= date("d/m/Y", strtotime($adquisicion));
	}

	$peticion="UPDATE equipos_computo SET ubicacionEquipo='$ubicacion', nombreEquipo='$nombre', direccionEquipo='$ip',".
			"marcaEquipo='$marca',modeloEquipo='$modelo', procesadorEquipo='$procesador', ramEquipo='$ram',discoEquipo='$disco',".
			"nsEquipo='$ns', idEquipo='$idequipo', fantivirusEquipo='$licencia', soEquipo='$so',utpEquipo='$utp', observacionesEquipo='$observaciones',".
			" fadquisicionEquipo='$adquisicion', usuarioEquipo='$usuario', tipoEquipo='$tipo',factualizacionEquipo='$actualizacion',".
			"encargadoEquipo='$encargado', estadoEquipo='$estado' WHERE id='$id';";

			$peticion2="INSERT INTO cambios_ubicacion_computo (id_equipo, ubicacionAnterior, ubicacionActual, fechaCambio)".
			" VALUES ('$id','$ubicacionAnterior','$ubicacion','$actualizacion');" ;

	mysqli_autocommit($mysqli, false);
	$sql=mysqli_query($mysqli,$peticion);
	if($ubicacionAnterior!=$ubicacion){
		$sql2=mysqli_query($mysqli,$peticion2);
	}
	  if($sql)
	  {
		mysqli_commit($mysqli);
		echo '<script>alert("DATOS ACTUALIZADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='equipos_de_computo.php' </script>";
	}
	  else
	  {
		mysqli_rollback($mysqli);
		echo '<script>alert("OCURRIÓ UN ERROR AL ACTUALIZAR DATOS")</script> ';
		echo "<script>location.href='equipos_de_computo.php' </script>";
	}
?>
