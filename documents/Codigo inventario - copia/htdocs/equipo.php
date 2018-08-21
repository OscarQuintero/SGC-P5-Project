<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Equipo</title>
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
				<a href="#tabInformacionEquipo" class="mdl-tabs__tab is-active">INFORMACIÓN DEL EQUIPO</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabInformacionEquipo">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Información del Equipo
							</div>
							<form action="equipo_editar.php" method="post">
							<div class="full-width panel-content">
									<div >
										<h5 class="text-center" >Datos del Equipo</h5>

										<?php
										require("connect_db.php");
										mysqli_query($mysqli,"SET NAMES 'utf8'");
										if(empty($_GET)){
											$id=0;
											$sql=null;
										}
										else{
											$id= $_GET['id'];
											$sql=mysqli_query($mysqli,"SELECT * FROM equipos_computo WHERE id=$id");//ORDER BY  nombreEquipo
										}
										if($sql!=null)
											{
													$row = mysqli_fetch_row($sql);
														$ubicacion= $row[1];
														$nombre=$row[2];
														$direccion=$row[3];
														$marca= $row[4];
														$modelo=$row[5];
														$procesador=$row[6];
														$ram= $row[7];
														$disco=$row[8];
														$ns=$row[9];
														$idEquipo= $row[10];
														$fAntivirus=$row[11];
														$soEquipo=$row[12];
														$utp= $row[13];
														$observacion=$row[14];
														$fAdquisicion=$row[15];
														$usuario= $row[16];
														$tipo=$row[17];
														$fActualizacion=$row[18];
														$encargado=$row[19];
														$estado=$row[20];
										?>
											<input type="hidden" name="id" value="<?php echo $id?>" />
											<input type="hidden" name="nombreEquipo" value="<?php echo $nombre?>" />
											<input type="hidden" name="ubicacionEquipo" value="<?php echo $ubicacion?>" />
											<input type="hidden" name="direccionEquipo" value="<?php echo $direccion?>" />
											<input type="hidden" name="marcaEquipo" value="<?php echo $marca?>" />
											<input type="hidden" name="modeloEquipo" value="<?php echo $modelo?>" />
											<input type="hidden" name="procesadorEquipo" value="<?php echo $procesador?>" />
											<input type="hidden" name="ramEquipo" value="<?php echo $ram?>" />
											<input type="hidden" name="discoEquipo" value="<?php echo $disco?>" />
											<input type="hidden" name="nsEquipo" value="<?php echo $ns?>" />
											<input type="hidden" name="idEquipo" value="<?php echo $idEquipo?>" />
											<input type="hidden" name="fAntivirus" value="<?php echo $fAntivirus?>" />
											<input type="hidden" name="soEquipo" value="<?php echo $soEquipo?>" />
											<input type="hidden" name="utpEquipo" value="<?php echo $utp?>" />
											<input type="hidden" name="observacionesEquipo" value="<?php echo $observacion?>" />
											<input type="hidden" name="fAdquisicion" value="<?php echo $fAdquisicion?>" />
											<input type="hidden" name="usuarioEquipo" value="<?php echo $usuario?>" />
											<input type="hidden" name="tipoEquipo" value="<?php echo $tipo?>" />
											<input type="hidden" name="fActualizacion" value="<?php echo $fActualizacion?>" />
											<input type="hidden" name="encargadoEquipo" value="<?php echo $encargado?>" />
											<input type="hidden" name="estadoEquipo" value="<?php echo $estado?>" />

											<?php
											if($ubicacion=="") $ubicacion= "SIN INFORMACIÓN";
											if($nombre=="") $nombre= "SIN INFORMACIÓN";
											if($direccion=="") $direccion= "SIN INFORMACIÓN";
											if($marca=="") $marca= "SIN INFORMACIÓN";
											if($modelo=="") $modelo= "SIN INFORMACIÓN";
											if($procesador=="") $procesador= "SIN INFORMACIÓN";
											if($ram=="") $ram= "SIN INFORMACIÓN";
											if($disco=="") $disco= "SIN INFORMACIÓN";
											if($ns=="") $ns= "SIN INFORMACIÓN";
											if($idEquipo=="") $idEquipo= "SIN INFORMACIÓN";
											if($fAntivirus=="") $fAntivirus= "SIN INFORMACIÓN";
											if($soEquipo=="") $soEquipo= "SIN INFORMACIÓN";
											if($utp=="") $utp= "SIN INFORMACIÓN";
											if($observacion=="") $observacion= "SIN INFORMACIÓN";
											if($fAdquisicion=="") $fAdquisicion= "SIN INFORMACIÓN";
											if($tipo=="") $tipo= "SIN INFORMACIÓN";
											if($usuario=="") $usuario= "SIN INFORMACIÓN";
											if($fActualizacion=="") $fActualizacion= "SIN INFORMACIÓN";
											if($encargado=="") $encargado= "SIN INFORMACIÓN";
											if($estado=="") $estado= "SIN INFORMACIÓN";
											 ?>
											<p class="text-center" ><b>Nombre del Equipo: </b><?php echo $nombre?></p>
											<p class="text-center" ><b>Ubicación del Equipo:</b> <?php echo $ubicacion?></p>
											<p class="text-center" ><b>Dirección del Equipo:</b> <?php echo $direccion?></p>
											<p class="text-center" ><b>Marca del Equipo:</b> <?php echo $marca?></p>
											<p class="text-center" ><b>Modelo del Equipo:</b> <?php echo $modelo?></p>
											<p class="text-center" ><b>Procesador: </b><?php echo $procesador?></p>
											<p class="text-center" ><b>Memoria RAM:</b> <?php echo $ram?></p>
											<p class="text-center" ><b>Disco Duro: </b><?php echo $disco?></p>
											<p class="text-center" ><b>Número de Serie del Equipo:</b> <?php echo $ns?></p>
											<p class="text-center" ><b>Identificador del Equipo:</b> <?php echo $idEquipo?></p>
											<p class="text-center" ><b>Fecha de Vencimiento de Antivirus: </b><?php echo $fAntivirus?></p>
											<p class="text-center" ><b>Sistema Operativo del Equipo:</b> <?php echo $soEquipo?></p>
											<p class="text-center" ><b>UTP del Equipo: </b><?php echo $utp?></p>
											<p class="text-center" ><b>Observaciones del Equipo: </b><?php echo $observacion?></p>
											<p class="text-center" ><b>Fecha de Adquisición del Equipo: </b><?php echo $fAdquisicion?></p>
											<p class="text-center" ><b>Usuario del Equipo: </b><?php echo $usuario?></p>
											<p class="text-center" ><b>Tipo de Equipo: </b><?php echo $tipo?></p>
											<p class="text-center" ><b>Fecha de Actualización de la información del Equipo: </b><?php echo $fActualizacion?></p>
											<p class="text-center" ><b>Encargado del Equipo: </b><?php echo $encargado?></p>
											<p class="text-center" ><b>Estado del Equipo: </b><?php echo $estado?></p>

										<?php
										}
										else
										{
											echo '<script>alert("OCURRIÓ UN ERROR AL OBTENER LA INFORMACIÓN DEL EQUIPO.")</script>';
											echo "<html><head></head>".
												"<body onload=\"javascript:history.back()\">".
												"</body></html>";
												exit;
										}
										?>


										<div class="mdl-grid">
											<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
											<div class="full-width panel-content">
												<div class="full-width panel mdl-shadow--10dp">
													<div class="full-width panel-tittle bg-success text-center tittles">
														Lista de Dispositivos Vinculados
													</div>
														<div class="mdl-list"  >
																<?php
																require("connect_db.php");
																mysqli_query($mysqli,"SET NAMES 'utf8'");
																$sql2=mysqli_query($mysqli,"SELECT * FROM dispositivos WHERE idEquipo = $id ");
																$conteo=1;
																if($sql2!=null)
																	{
																			$row = mysqli_fetch_row($sql2);
																			while ($row !=null)
																			{
																				$idDispositivo= $row[0];
																				$tipo=$row[3];
																				$ns=$row[8];
																				$descripcion= $row[4];
																?>
																<div class="mdl-list__item mdl-list__item--two-line" style="width:100%;" >
																	<span class="mdl-list__item-primary-content">
																		<i class="zmdi zmdi-desktop-windows mdl-list__item-avatar"></i>
																		<span><?=$conteo?>.<?=$tipo?></span>
																		<span class="mdl-list__item-sub-title"><?=$descripcion?>-<?=$ns?></span>
																	</span>
																	<a class="mdl-list__item-secondary-action" style="padding-left: 20px;" onclick="borrarEquipo('<?php echo $idDispositivo?>','<?php echo $id?>')"><i class="zmdi zmdi-close"></i></a>
																	<script>
																		function borrarEquipo(dispositivo,equipo) {
																		    if(confirm("¿Deseas desvincular este dispositivo?")){
																					location.href="dispositivo_desvincular.php?id="+dispositivo+"&idequipo="+equipo;
																				}
																		}
																		</script>
																</div>
																<li class="full-width divider-menu-h"></li>
																	<?php
																					$row = mysqli_fetch_row($sql2);
																					$conteo++;
																				}
																	}
																	?>
														</div>
													</div>
												</div>
											</div>
										</div>



										<div>
											<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-regresar" onclick="this.form.action='equipos_de_computo.php'" style="width:24%;" >
												<i class="zmdi zmdi-arrow-left"></i>
												<div class="mdl-tooltip" for="btn-regresar" >Regresar</div>
											</button>
											<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-editarEquipo" style="width:24%;">
												<i class="zmdi zmdi-edit"></i>
												<div class="mdl-tooltip" for="btn-editarEquipo">Editar Equipo</div>
											</button>
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" onclick ="this.form.action ='equipo_agregar_dispositivo.php?idEquipo=<?php echo $id?>'" id="btn-agregarDispositivo" style="width:24%;">
											<i class="zmdi zmdi-plus"></i>
											<div class="mdl-tooltip" for="btn-agregarDispositivo" >Agregar Dispositivo</div>
										</button>
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" onclick ="this.form.action ='equipo_baja.php?id=<?php echo $id?>'" id="btn-bajaEquipo" style="width:24%;">
											<i class="zmdi zmdi-close"></i>
											<div class="mdl-tooltip" for="btn-bajaEquipo">Dar de Baja Equipo</div>
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
