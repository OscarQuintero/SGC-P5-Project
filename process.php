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
	$sqlQuery = "SELECT Nombre FROM Subproceso WHERE IDProcesoMatriz = $IDProcesoMatrizActual;";
	$result = $connection->query($sqlQuery);
	if ($result->num_rows <= 0) {
		die("No se pudo completar la solicitud a la BD... :'(");
	}
///***********************************************

	$CantidadDeSubprocesos = 0;
	$ListaDeSubprocesos = array();
	while ($row = $result->fetch_assoc()) {
		$ListaDeSubprocesos[$CantidadDeSubprocesos] = $row['Nombre'];
		$CantidadDeSubprocesos++;
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
			<li><?php echo $ListaDeSubprocesos[$k];?></li>
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
				<h2><?php echo $ListaDeSubprocesos[$k];?></h2>
				<div>
					<h3>Mapeos</h3>
					<ul>						
					</ul>
				</div>
				<div>
					<h3>Documentos</h3>
					<ul>
						
					</ul>	
				</div>
				<div>
					<h3>Formatos</h3>
					<ul>
						
					</ul>

				</div>
				<div>
					<h3>Instructivos</h3>
					<ul>
						
					</ul>
				</div>
				<div>
					<h3>Guías</h3>
					<ul>
						
					</ul>
				</div>		

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
