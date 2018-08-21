<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mobiliario</title>
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
				<a href="#tabInformacionArticulo" class="mdl-tabs__tab is-active">INFORMACIÓN DEL ARTICULO</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabInformacionArticulo">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Información del Articulo
							</div>
							<form action="articulo_editar.php" method="post">
							<div class="full-width panel-content">
									<div >
										<h5 class="text-center" >Datos del Articulo</h5>

										<?php
										require("connect_db.php");
										mysqli_query($mysqli,"SET NAMES 'utf8'");
										if(empty($_GET)){
											$id=0;
											$sql=null;
										}
										else{
											$id= $_GET['id'];
											$sql=mysqli_query($mysqli,"SELECT * FROM mobiliario WHERE id=$id");
										}
										if($sql!=null)
											{
													$row = mysqli_fetch_row($sql);
														$ubicacion= $row[1];
														$idarticulo=$row[2];
														$clasificacion=$row[3];
														$tipo= $row[4];
														$partida=$row[5];
														$descripcion=$row[6];
														$cantidad= $row[7];
														$adquisicion=$row[8];
														$idresguardante=$row[9];
														$marca= $row[10];
														$modelo=$row[11];
														$ns=$row[12];
														$estado= $row[13];
														$resguardante=$row[14];
														$cargoresguardante=$row[15];
														$observaciones= $row[16];
														$numeroresguardo=$row[17];
														$fActualizacion=$row[18];
														$inventario=$row[19];
										?>
											<input type="hidden" name="id" value="<?php echo $id?>" />
											<input type="hidden" name="UbicacionArticulo" value="<?php echo $ubicacion?>" />
											<input type="hidden" name="IdArticulo" value="<?php echo $idarticulo?>" />
											<input type="hidden" name="ClasificacionArticulo" value="<?php echo $clasificacion?>" />
											<input type="hidden" name="TipoArticulo" value="<?php echo $tipo?>" />
											<input type="hidden" name="PartidaArticulo" value="<?php echo $partida?>" />
											<input type="hidden" name="DescripcionArticulo" value="<?php echo $descripcion?>" />
											<input type="hidden" name="CantidadArticulo" value="<?php echo $cantidad?>" />
											<input type="hidden" name="AdquisicionArticulo" value="<?php echo $adquisicion?>" />
											<input type="hidden" name="IdResguardanteArticulo" value="<?php echo $idresguardante?>" />
											<input type="hidden" name="MarcaArticulo" value="<?php echo $marca?>" />
											<input type="hidden" name="ModeloArticulo" value="<?php echo $modelo?>" />
											<input type="hidden" name="NSArticulo" value="<?php echo $ns?>" />
											<input type="hidden" name="EstadoArticulo" value="<?php echo $estado?>" />
											<input type="hidden" name="ResguardanteArticulo" value="<?php echo $resguardante?>" />
											<input type="hidden" name="CResguardanteArticulo" value="<?php echo $cargoresguardante?>" />
											<input type="hidden" name="ObservacionesArticulo" value="<?php echo $observaciones?>" />
											<input type="hidden" name="NResguardoArticulo" value="<?php echo $numeroresguardo?>" />
											<input type="hidden" name="fActualizacion" value="<?php echo $fActualizacion?>" />
											<input type="hidden" name="InventarioArticulo" value="<?php echo $inventario?>" />

											<?php
											if($ubicacion=="") $ubicacion= "SIN INFORMACIÓN";
											if($idarticulo=="") $idarticulo= "SIN INFORMACIÓN";
											if($clasificacion=="") $clasificacion= "SIN INFORMACIÓN";
											if($tipo=="") $tipo= "SIN INFORMACIÓN";
											if($partida=="") $partida= "SIN INFORMACIÓN";
											if($descripcion=="") $descripcion= "SIN INFORMACIÓN";
											if($cantidad=="") $cantidad= "SIN INFORMACIÓN";
											if($adquisicion=="") $adquisicion= "SIN INFORMACIÓN";
											if($resguardante=="") $resguardante= "SIN INFORMACIÓN";
											if($idresguardante=="") $idresguardante= "SIN INFORMACIÓN";
											if($cargoresguardante=="") $cargoresguardante= "SIN INFORMACIÓN";
											if($numeroresguardo=="") $numeroresguardo= "SIN INFORMACIÓN";
											if($marca=="") $marca= "SIN INFORMACIÓN";
											if($modelo=="") $modelo= "SIN INFORMACIÓN";
											if($ns=="") $ns= "SIN INFORMACIÓN";
											if($estado=="") $estado= "SIN INFORMACIÓN";
											if($observaciones=="") $observaciones= "SIN INFORMACIÓN";
											if($fActualizacion=="") $fActualizacion= "SIN INFORMACIÓN";
											if($inventario=="") $inventario= "SIN INFORMACIÓN";
											 ?>
											<p class="text-center" ><b>Ubicación del Articulo: </b><?php echo $ubicacion?></p>
											<p class="text-center" ><b>Código del Articulo:</b> <?php echo $idarticulo?></p>
											<p class="text-center" ><b>Clasificación del Articulo:</b> <?php echo $clasificacion?></p>
											<p class="text-center" ><b>Tipo del Articulo:</b> <?php echo $tipo?></p>
											<p class="text-center" ><b>Partida del Articulo:</b> <?php echo $partida?></p>
											<p class="text-center" ><b>Descripción: </b><?php echo $descripcion?></p>
											<p class="text-center" ><b>Cantidad:</b> <?php echo $cantidad?></p>
											<p class="text-center" ><b>Costo de Adquisición: </b><?php echo $adquisicion?></p>
											<p class="text-center" ><b>Nombre del Resguardante:</b> <?php echo $resguardante?></p>
											<p class="text-center" ><b>Código del Resguardante:</b> <?php echo $idresguardante?></p>
											<p class="text-center" ><b>Cargo del Resguardante:: </b><?php echo $cargoresguardante?></p>
											<p class="text-center" ><b>Número de Resguardo:</b> <?php echo $numeroresguardo?></p>
											<p class="text-center" ><b>Marca del Articulo: </b><?php echo $marca?></p>
											<p class="text-center" ><b>Modelo del Articulo: </b><?php echo $modelo?></p>
											<p class="text-center" ><b>Número de Serie del Articulo: </b><?php echo $ns?></p>
											<p class="text-center" ><b>Estado del Articulo: </b><?php echo $estado?></p>
											<p class="text-center" ><b>Observaciones del Articulo: </b><?php echo $observaciones?></p>
											<p class="text-center" ><b>Fecha de Actualización de la información del Articulo: </b><?php echo $fActualizacion?></p>
											<p class="text-center" ><b>Inventario: </b><?php echo $inventario?></p>

										<?php
										}
										else
										{
											echo '<script>alert("OCURRIÓ UN ERROR AL OBTENER LA INFORMACIÓN DEL ARTICULO.")</script>';
											echo "<html><head></head>".
												"<body onload=\"javascript:history.back()\">".
												"</body></html>";
												exit;
										}
										?>


										<div>
											<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-regresar" onclick="this.form.action ='articulos.php'" style="width:33%;" >
												<i class="zmdi zmdi-arrow-left" ></i>
												<div class="mdl-tooltip" for="btn-regresar" >Regresar</div>
											</button>
											<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-editarArticulo" style="width:33%;">
												<i class="zmdi zmdi-edit"></i>
												<div class="mdl-tooltip" for="btn-editarArticulo">Editar Articulo</div>
											</button>
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" onclick ="this.form.action ='articulo_baja.php?id=<?php echo $id?>'" id="btn-bajaArticulo" style="width:33%;">
											<i class="zmdi zmdi-close"></i>
											<div class="mdl-tooltip" for="btn-bajaArticulo">Dar de Baja Articulo</div>
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
