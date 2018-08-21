<?php
	require("connect_db.php");
	$id=$_POST['id'];
	$ubicacionAnterior=$_POST['ubicacionAnterior'];
	$ubicacion=$_POST['UbicacionArticulo'];
	$idarticulo=$_POST['IdArticulo'];
	$descripcion=$_POST['DescripcionArticulo'];
	$marca=$_POST['MarcaArticulo'];
	$modelo=$_POST['ModeloArticulo'];
	$tipo=$_POST['TipoArticulo'];
	$observaciones=$_POST['ObservacionesArticulo'];
	$estado=$_POST['EstadoArticulo'];
	$ns=$_POST['NSArticulo'];


	$actualizacion= strftime("%d/%m/%Y");

	$ubicacion= strtoupper($ubicacion);
	$descripcion= strtoupper($descripcion);
	$observaciones= strtoupper($observaciones);
	$marca= strtoupper($marca);
	$modelo= strtoupper($modelo);
	$observaciones= strtoupper($observaciones);
	$tipo= strtoupper($tipo);
	$ns= strtoupper($ns);

	$peticion="UPDATE mobiliario SET ubicacionArticulo='$ubicacion', idArticulo='$idarticulo', clasificacionArticulo='$clasificacion',".
			"tipoArticulo='$tipo',partidaArticulo='$partida', descripcionArticulo='$descripcion', cantidadArticulo='$cantidad',valorAdquisicionArticulo='$adquisicion',".
			"codigoResguardanteArticulo='$idresguardante', marcaArticulo='$marca', modeloArticulo='$modelo', nsArticulo='$ns',estadoArticulo='$estado', resguardanteArticulo='$resguardante',".
			" cargoResguardanteArticulo='$cargoresguardante', observacionesArticulo='$observaciones', numeroResguardoArticulo='$numeroresguardo',factualizacionArticulo='$actualizacion',".
			"inventarioArticulo='$inventario' WHERE id='$id'";

	$peticion2="INSERT INTO cambios_ubicacion_mobiliario (id_articulo, ubicacionAnterior, ubicacionActual, fechaCambio)".
	" VALUES ('$id','$ubicacionAnterior','$ubicacion','$actualizacion')" ;


	$sql=mysqli_query($mysqli,$peticion);
	if($ubicacionAnterior!=$ubicacion){
		$sql2=mysqli_query($mysqli,$peticion2);
	}
    if($sql)
    {
		echo '<script>alert("DATOS ACTUALIZADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='articulos.php' </script>";
	}
    else
    {
		echo '<script>alert("OCURRIÓ UN ERROR AL ACTUALIZAR DATOS")</script> ';
		echo "<script>location.href='articulos.php' </script>";
	}
?>
