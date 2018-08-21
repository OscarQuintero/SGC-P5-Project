<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dispositivo</title>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/sweetalert2.css">
	<link rel="stylesheet" href="css/material.min.css">
	<link rel="stylesheet" href="css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="js/material.min.js" ></script>
	<script src="js/sweetalert2.min.js" ></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js" ></script>
	<script src="js/main.js" ></script>
</head>
<body>

	<?php include 'dashboard.html';?>
	<!-- pageContent -->
	<section class="full-width pageContent">
		<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
			<div class="mdl-tabs__tab-bar">
				<a href="#tabInformacionDispositivo" class="mdl-tabs__tab is-active">INFORMACIÓN DEL DISPOSITIVO</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabInformacionDispositivo">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Información del Dispositivo
							</div>
							<form action="Dispositivo_editar.php" method="post">
							<div class="full-width panel-content">
									<div >
										<h5 class="text-center" >Datos del Dispositivo</h5>

										<?php
										require("connect_db.php");
										mysqli_query($mysqli,"SET NAMES 'utf8'");
										if(empty($_GET)){
											$id=0;
											$sql=null;
										}
										else{
											$id= $_GET['id'];
											$sql=mysqli_query($mysqli,"SELECT * FROM dispositivos WHERE id=$id");
										}
										if($sql!=null)
											{
													$row = mysqli_fetch_row($sql);
														$ubicacion= $row[1];
														$idDispositivo=$row[2];
														$tipo= $row[3];
														$descripcion=$row[4];
														$observaciones= $row[5];
														$marca= $row[6];
														$modelo=$row[7];
														$ns=$row[8];
														$estado= $row[9];
														$fActualizacion=$row[10];
										?>
											<input type="hidden" name="id" value="<?php echo $id?>" />
											<input type="hidden" name="UbicacionDispositivo" value="<?php echo $ubicacion?>" />
											<input type="hidden" name="IdDispositivo" value="<?php echo $idDispositivo?>" />
											<input type="hidden" name="TipoDispositivo" value="<?php echo $tipo?>" />
											<input type="hidden" name="DescripcionDispositivo" value="<?php echo $descripcion?>" />
											<input type="hidden" name="MarcaDispositivo" value="<?php echo $marca?>" />
											<input type="hidden" name="ModeloDispositivo" value="<?php echo $modelo?>" />
											<input type="hidden" name="NSDispositivo" value="<?php echo $ns?>" />
											<input type="hidden" name="EstadoDispositivo" value="<?php echo $estado?>" />
											<input type="hidden" name="ObservacionesDispositivo" value="<?php echo $observaciones?>" />
											<input type="hidden" name="fActualizacion" value="<?php echo $fActualizacion?>" />

											<?php
											if($ubicacion=="") $ubicacion= "SIN INFORMACIÓN";
											if($idDispositivo=="") $idDispositivo= "SIN INFORMACIÓN";
											if($tipo=="") $tipo= "SIN INFORMACIÓN";
											if($descripcion=="") $descripcion= "SIN INFORMACIÓN";
											if($marca=="") $marca= "SIN INFORMACIÓN";
											if($modelo=="") $modelo= "SIN INFORMACIÓN";
											if($ns=="") $ns= "SIN INFORMACIÓN";
											if($estado=="") $estado= "SIN INFORMACIÓN";
											if($observaciones=="") $observaciones= "SIN INFORMACIÓN";
											if($fActualizacion=="") $fActualizacion= "SIN INFORMACIÓN";
											 ?>
											<p class="text-center" ><b>Ubicación del Dispositivo: </b><?php echo $ubicacion?></p>
											<p class="text-center" ><b>Código del Dispositivo:</b> <?php echo $idDispositivo?></p>
											<p class="text-center" ><b>Tipo de Dispositivo:</b> <?php echo $tipo?></p>
											<p class="text-center" ><b>Descripción: </b><?php echo $descripcion?></p>
											<p class="text-center" ><b>Marca del Dispositivo: </b><?php echo $marca?></p>
											<p class="text-center" ><b>Modelo del Dispositivo: </b><?php echo $modelo?></p>
											<p class="text-center" ><b>Número de Serie del Dispositivo: </b><?php echo $ns?></p>
											<p class="text-center" ><b>Estado del Dispositivo: </b><?php echo $estado?></p>
											<p class="text-center" ><b>Observaciones del Dispositivo: </b><?php echo $observaciones?></p>
											<p class="text-center" ><b>Fecha de Actualización de la información del Dispositivo: </b><?php echo $fActualizacion?></p>

										<?php
										}
										else
										{
											echo '<script>alert("OCURRIÓ UN ERROR AL OBTENER LA INFORMACIÓN DEL DISPOSITIVO.")</script>';
											echo "<html><head></head>".
												"<body onload=\"javascript:history.back()\">".
												"</body></html>";
												exit;
										}
										?>


										<div>
											<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-regresar" onclick="this.form.action ='dispositivos.php'" style="width:33%;" >
												<i class="zmdi zmdi-arrow-left" ></i>
												<div class="mdl-tooltip" for="btn-regresar" >Regresar</div>
											</button>
											<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-editarDispositivo" style="width:33%;">
												<i class="zmdi zmdi-edit"></i>
												<div class="mdl-tooltip" for="btn-editarDispositivo">Editar Dispositivo</div>
											</button>
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" onclick ="this.form.action ='Dispositivo_baja.php?id=<?php echo $id?>'" id="btn-bajaDispositivo" style="width:33%;">
											<i class="zmdi zmdi-close"></i>
											<div class="mdl-tooltip" for="btn-bajaDispositivo">Dar de Baja Dispositivo</div>
										</button>
										</div>
									</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
