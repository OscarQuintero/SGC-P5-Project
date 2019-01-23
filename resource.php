<?php
	$hostDB = 'localhost';
	$userDB = 'webapp';
	$passwordDB = '1234';
	$DB = 'sgc';
	$connection = new mysqli($hostDB, $userDB, $passwordDB, $DB);

	if ($connection->connect_error) {
		die("----> " . $connection->connect_error);
	}

	$IDProcesoMatrizActual = $_GET['IDProcesoMatriz'];
	$IDSubprocesoActual = $_GET['IDSubproceso'];
	$IDRecursoActual = $_GET['IDRecurso'];
	$NombreRecursoActual = '';

	$sqlQuery = "SELECT IDProcesoMatriz, 
						IDSubproceso, 
						IDRecurso, 
						Recurso.Nombre, 
						Codigo, 
						Recurso.IDTipoDeRecurso, 
						TipoDeRecurso.Nombre AS TipoDeRecurso FROM Recurso 
					INNER JOIN TipoDeRecurso
					WHERE IDProcesoMatriz = $IDProcesoMatrizActual
					AND Recurso.IDSubproceso = $IDSubprocesoActual 
					AND Recurso.IDRecurso = $IDRecursoActual
					AND Recurso.IDTipoDeRecurso = TipoDeRecurso.IDTipoDeRecurso;";
	$result = $connection->query($sqlQuery);
	if ($result->num_rows <= 0) {
		die("No se pudo completar la solicitud a la BD... :'(");
	}

	if($row = $result->fetch_assoc())
	{

	}else{
		echo "No hay resultados en la Base de Datos...";
	}
	$NombreRecursoActual = $row['Nombre'];
	$CodigoRecursoActual = $row['Codigo'];
	$IDTipoDeRecursoActual = $row['IDTipoDeRecurso'];
	$TipoDeRecursoActual = $row['TipoDeRecurso'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>SGC P5 - <?php echo $NombreRecursoActual;?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/lateral-bar.css">
</head>
<body>
	<header>
		
	</header>
	
	<main class="resource">
		<h1><?php echo $NombreRecursoActual;?></h1>

		<h2><?php echo $TipoDeRecursoActual;?>:  <?php echo $CodigoRecursoActual;?></h2>

		<section id="files-panel">
			<figure>
			<?php
			?>	
				<img src="img/file-regular.svg">
				<figcaption>
					<ul>
						<li>Versión: 1.0</li>
						<li>Revisión: Noviembre 2018</li>
						<li><a href="img/p5_logo.png">Abrir ›</a></li>
					</ul>
					
				</figcaption>		
			</figure>

			<figure>
			<?php
			?>	
				<img src="img/file-regular.svg">
				<figcaption>
					<ul>
						<li>Versión: 1.0</li>
						<li>Revisión: Noviembre 2018</li>
						<li><a href="img/p5_logo.png">Abrir ›</a></li>
					</ul>
					
				</figcaption>		
			</figure>
			<figure>
			<?php
			?>	
				<img src="img/file-regular.svg">
				<figcaption>
					<ul>
						<li>Versión: 1.0</li>
						<li>Revisión: Noviembre 2018</li>
						<li><a href="img/p5_logo.png">Abrir ›</a></li>
					</ul>
					
				</figcaption>		
			</figure>
			<figure>
			<?php
			?>	
				<img src="img/file-regular.svg">
				<figcaption>
					<ul>
						<li>Versión: 1.0</li>
						<li>Revisión: Noviembre 2018</li>
						<li><a href="img/p5_logo.png">Abrir ›</a></li>
					</ul>
					
				</figcaption>		
			</figure>
			

		</section>				
	</main>
	
	<footer>
		
	</footer>
</body>
</html>