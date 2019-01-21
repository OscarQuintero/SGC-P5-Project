<?php
	$IDProcesoMatrizActual = $_GET['IDProcesoMatriz'];
	$IDSubprocesoActual = $_GET['IDSubproceso'];
	$IDRecursoActual = $_GET['IDRecurso'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>SGC P5 - ###</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/lateral-bar.css">
</head>
<body>
	<header>
		
	</header>
	<div class="main-container">
	<aside>
		<h2>Menú lateral</h2>
		<ul>
			<li></li>
		</ul>
	</aside>
	<main class="process">
		<h1>Recurso</h1>

		<article>
			<?php
				echo $IDProcesoMatrizActual."<br />";
				echo $IDSubprocesoActual."<br />";
				echo $IDRecursoActual."<br />";

			?>
		</article>
				
	</main>
	</div>
	<footer>
		
	</footer>
</body>
</html>