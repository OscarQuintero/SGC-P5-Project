<?php
	// establecer conexión
	$hostDB = 'localhost';
	$userDB = 'webapp';
	$passwordDB = '1234';
	$DB = 'sgc';
	$connection = new mysqli($hostDB, $userDB, $passwordDB, $DB);

	if ($connection->connect_error) {
		die("----> " . $connection->connect_error);
	}
	
	// variables par incrustar en el documento
	$IDProcesoMatrizActual = "";
	$NombreProcesoMatrizActual = "";

	// procesar la peticion por GET 
	$IDProcesoMatrizActual = $_GET['IDProcesoMatriz'];

	// Solicitar nombre de Proceso
	$sqlQuery = "SELECT Nombre FROM ProcesoMatriz WHERE IDProcesoMatriz = $IDProcesoMatrizActual;";
	$result = $connection->query($sqlQuery);
	if ($result->num_rows <= 0) {
		die("No se pudo completar la solicitud a la BD... :'(");
	}
	$firstRow = $result->fetch_assoc();
	$NombreProcesoMatrizActual = $firstRow['Nombre'];

	//Obtener subprocesos
	$sqlQuery = "SELECT IDSubproceso, Nombre FROM Subproceso WHERE IDProcesoMatriz = $IDProcesoMatrizActual;";
	$result = $connection->query($sqlQuery);
	if ($result->num_rows <= 0) {
		die("No se pudo completar la solicitud a la BD... :'(");
	}
//
	$CantidadDeSubprocesos = 0;
	$ListaDeSubprocesos = array();
	while ($row = $result->fetch_assoc()) {
		$ListaDeSubprocesos[$CantidadDeSubprocesos]['IDSubproceso'] = $row['IDSubproceso'];
		$ListaDeSubprocesos[$CantidadDeSubprocesos]['Nombre'] = $row['Nombre'];
		$CantidadDeSubprocesos++;
	}

	//**********************************************
	//Obtener tipos de Recurso
	$sqlQuery = "SELECT IDTipoDeRecurso, Nombre FROM TipoDeRecurso;";
	$result = $connection->query($sqlQuery);
	if ($result->num_rows <= 0) {
		die("No se pudo completar la solicitud a la BD... :'(");
	}
	$CantidadDeTiposDeRecurso = 0;
	$ListaDeTiposDeRecurso = array();
	while ($row = $result->fetch_assoc()) {
		$ListaDeTiposDeRecurso[$CantidadDeTiposDeRecurso]['IDTipoDeRecurso'] = $row['IDTipoDeRecurso'];

		$ListaDeTiposDeRecurso[$CantidadDeTiposDeRecurso]['Nombre'] = $row['Nombre'];

		$CantidadDeTiposDeRecurso++;
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>SGC P5 - <?php echo $IDProcesoMatrizActual;?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/lateral-bar.css">
</head>
<body>
	<header>
		
	</header>
	<div class="main-container">
	<aside>
		<h2><?php echo $NombreProcesoMatrizActual;?></h2>
		<ul>
		<?php
			for($k =0; $k < $CantidadDeSubprocesos; $k++) 
			{
			?>
			<li><?php echo $ListaDeSubprocesos[$k]['Nombre'];?></li>
			<?php					
			}
		?>
			
		</ul>
	</aside>
	<main class="process">
		<h1>Proceso <?php echo $IDProcesoMatrizActual;?>: <?php echo $NombreProcesoMatrizActual;?></h1>

		<?php
			for($k =0; $k < $CantidadDeSubprocesos; $k++) 
			{
			?>
			<article>
				<h2><?php echo $ListaDeSubprocesos[$k]['Nombre'];?></h2>
				<?php 
					// for ($i=0; $i < $CantidadDeTiposDeRecurso; $i++) { 
						//echo $ListaDeTiposDeRecurso[$i]['Nombre'];
						?>
						<div>
							<h3><?php /*echo $ListaDeTiposDeRecurso[$i]['Nombre']*/;?></h3>
							<ul>
								
								<?php 
									//Obtener Lista de Recursos de Mapeo de este Subproceso
									$sqlQuery = "SELECT IDRecurso, Nombre FROM Recurso 
													WHERE 
														IDProcesoMatriz = ".$IDProcesoMatrizActual.	
														" AND IDSubproceso = ".$ListaDeSubprocesos[$k]['IDSubproceso']." AND "./*$ListaDeTiposDeRecurso[$i]['IDTipoDeRecurso']*/"1=1".";";
									$result = $connection->query($sqlQuery);
									if ($result->num_rows <= 0) {
										echo ("No hay recursos disponobles -".$connection->connect_error);
									}
									$CantidadDeRecursos = 0;
									$ListaDeRecursos = array();
									while ($row = $result->fetch_assoc()) {
										$ListaDeRecursos[$CantidadDeRecursos]['IDRecurso'] = $row['IDRecurso'];
										$ListaDeRecursos[$CantidadDeRecursos]['Nombre'] = $row['Nombre'];

										$CantidadDeRecursos++;
									}
								?>
								<?php
									for ($i=0; $i < $CantidadDeRecursos; $i++) { 
										?>
										<li>
											<a href="resource.php?IDProcesoMatriz=<?php echo $IDProcesoMatrizActual;?>&IDSubproceso=<?php echo $ListaDeSubprocesos[$k]['IDSubproceso'];?>&IDRecurso=<?php echo $ListaDeRecursos[$i]['IDRecurso'];?>">
												<?php echo $ListaDeRecursos[$i]['Nombre'];?>	
											</a>
										</li>
										<?php
									}												
								?>
							</ul>
						</div>
						<?php
					// }
				?>
			</article>
			<?php					
			}
		?>				
	</main>

	</div>
	<footer>
		
	</footer>
</body>
</html>
<?php
	$connection->close();
?>
