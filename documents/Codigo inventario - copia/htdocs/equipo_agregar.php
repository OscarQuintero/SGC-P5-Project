<?php
	require("connect_db.php");

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
	$tipo=$_POST['TipoEquipo'];
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

	$peticion="INSERT INTO equipos_computo (ubicacionEquipo, nombreEquipo, direccionEquipo, marcaEquipo, modeloEquipo, procesadorEquipo, ramEquipo,discoEquipo,".
		"nsEquipo, idEquipo, fantivirusEquipo, soEquipo,utpEquipo, observacionesEquipo, fadquisicionEquipo, usuarioEquipo, tipoEquipo,factualizacionEquipo, encargadoEquipo, estadoEquipo)" .
		"VALUES ('$ubicacion','$nombre','$ip','$marca','$modelo','$procesador','$ram','$disco','$ns','$idequipo','$licencia','$so','$utp','$observaciones',".
		"'$adquisicion','$usuario','$tipo','$actualizacion','$encargado','$estado')";

	$sql=mysqli_query($mysqli,$peticion);

    if($sql)
    {
		echo '<script>alert("DATOS ALMACENADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='equipos_de_computo.php' </script>";
	}
    else
    {
		echo '<script>alert("OCURRIÓ UN ERROR AL ALMACENAR DATOS")</script> ';
		echo "<script>location.href='equipos_de_computo.php' </script>";
	}
?>
