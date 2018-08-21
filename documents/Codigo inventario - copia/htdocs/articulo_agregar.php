<?php
	require("connect_db.php");

	$ubicacion=$_POST['UbicacionArticulo'];
	$idarticulo=$_POST['IdArticulo'];
	$clasificacion=$_POST['ClasificacionArticulo'];
	$partida=$_POST['PartidaArticulo'];
	$descripcion=$_POST['DescripcionArticulo'];
	$cantidad=$_POST['CantidadArticulo'];
	$adquisicion=$_POST['AdquisicionArticulo'];
	$inventario=$_POST['InventarioArticulo'];
	$marca=$_POST['MarcaArticulo'];
	$modelo=$_POST['ModeloArticulo'];
	$tipo=$_POST['TipoArticulo'];
	$observaciones=$_POST['ObservacionesArticulo'];
	$estado=$_POST['EstadoArticulo'];
	$resguardante=$_POST['ResguardanteArticulo'];
	$idresguardante=$_POST['IdResguardanteArticulo'];
	$cargoresguardante=$_POST['CResguardanteArticulo'];
	$numeroresguardo=$_POST['NResguardoArticulo'];
	$estado=$_POST['EstadoArticulo'];
	$ns=$_POST['NSArticulo'];


	$actualizacion= strftime("%d/%m/%Y");

	$ubicacion= strtoupper($ubicacion);
	$clasificacion= strtoupper($clasificacion);
	$descripcion= strtoupper($descripcion);
	$observaciones= strtoupper($observaciones);
	$marca= strtoupper($marca);
	$modelo= strtoupper($modelo);
	$resguardante= strtoupper($resguardante);
	$cargoresguardante= strtoupper($cargoresguardante);
	$observaciones= strtoupper($observaciones);
	$tipo= strtoupper($tipo);
	$partida= strtoupper($partida);
	$ns= strtoupper($ns);

	$peticion="INSERT INTO mobiliario (ubicacionArticulo, idArticulo, clasificacionArticulo, ".
	"tipoArticulo, partidaArticulo, descripcionArticulo, cantidadArticulo, valorAdquisicionArticulo,".
	"codigoResguardanteArticulo, marcaArticulo, modeloArticulo, nsArticulo, estadoArticulo, resguardanteArticulo,".
	"cargoResguardanteArticulo, observacionesArticulo, numeroResguardoArticulo, factualizacionArticulo, ".
	"inventarioArticulo) VALUES ('$ubicacion','$idarticulo','$clasificacion','$tipo','$partida','$descripcion','$cantidad',".
	"'$adquisicion','$idresguardante','$marca','$modelo','$ns','$estado','$resguardante','$cargoresguardante','$observaciones',".
	"'$numeroresguardo','$actualizacion','$inventario')";

	$sql=mysqli_query($mysqli,$peticion);

    if($sql)
    {
		echo '<script>alert("DATOS ALMACENADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='articulos.php' </script>";
	}
    else
    {
		echo '<script>alert("OCURRIÓ UN ERROR AL ALMACENAR DATOS")</script> ';
		echo "<script>location.href='articulos.php' </script>";
	}
?>
