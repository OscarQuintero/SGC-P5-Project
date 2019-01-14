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

	// cerrar conexión
	$connection->close();
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
			<li>Mejora continua</li>
			<li>No conformidad</li>
			<li>Acciones correctivas</li>
		</ul>
	</aside>
	<main class="process">
		<h1>Proceso <?php echo $IDProcesoMatrizActual;?>: <?php echo $NombreProcesoMatrizActual;?></h1>

		<article>
			<h2>Mejora continua</h2>
			
			<div>
				<h3>Mapeos</h3>
				<ul>
					
				</ul>
			</div>
			<div>
				<h3>Documentos</h3>
				<ul>
					<li>Proyecto de mejora</li>
					<li>Control de estatus de proyectos de mejora</li>
				</ul>	
			</div>
			<div>
				<h3>Formatos</h3>
				<ul>
					
				</ul>

			</div>
			<div>
				<h3>Especificaciones</h3>
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
		<article>
			<h2>No conformidad</h2>
			
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
					<li>Producto No Conforme</li>
					<li>Control de estatus de PNC o Queja</li>
					<li>Queja, PNC, Sugerencia</li>
					<li>Respuesta al usuario de queja o sugerencia</li>
					<li>Matriz de criterio de producto no conforme</li>
				</ul>

			</div>
			<div>
				<h3>Especificaciones</h3>
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
		<article>
			<h2>Acciones correctivas</h2>
			
			<div>
				<h3>Mapeos</h3>
				<ul>
					
				</ul>
			</div>
			<div>
				<h3>Documentos</h3>
				<ul>
					<li>Accion correctiva</li>
					<li>Acción correctiva</li>
					<li>Análisis de causa raíz</li>
					<li>Control de estatus de no conformidades</li>
				</ul>
			</div>
			<div>
				<h3>Formatos</h3>
				<ul>
					
				</ul>

			</div>
			<div>
				<h3>Especificaciones</h3>
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
	</main>

	</div>
	<footer>
		
	</footer>
</body>
</html>