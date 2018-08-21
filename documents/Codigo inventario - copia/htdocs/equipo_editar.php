<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Información de Equipo</title>
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
				<a href="#tabInformacionEquipo" class="mdl-tabs__tab is-active">ACTUALIZAR INFORMACIÓN DEL EQUIPO</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabInformacionEquipo">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Actualizar Información del Equipo
							</div>
							<div class="full-width panel-content">
									<div >
										<form action= "equipo_actualizar.php" method= "post" onsubmit="return validacion()">
										<h5 class="text-center" >Datos del Equipo</h5>
										<?php
														$id= $_POST['id'];
														$ubicacion= $_POST['ubicacionEquipo'];
														$nombre=$_POST['nombreEquipo'];
														$direccion=$_POST['direccionEquipo'];
														$marca= $_POST['marcaEquipo'];
														$modelo=$_POST['modeloEquipo'];
														$procesador=$_POST['procesadorEquipo'];
														$ram= $_POST['ramEquipo'];
														$disco=$_POST['discoEquipo'];
														$ns=$_POST['nsEquipo'];
														$idEquipo= $_POST['idEquipo'];
														$fAntivirus=$_POST['fAntivirus'];
														$soEquipo=$_POST['soEquipo'];
														$utp= $_POST['utpEquipo'];
														$observacion=$_POST['observacionesEquipo'];
														$fAdquisicion=$_POST['fAdquisicion'];
														$usuario= $_POST['usuarioEquipo'];
														$tipo=$_POST['tipoEquipo'];
														$fActualizacion=$_POST['fActualizacion'];
														$encargado=$_POST['encargadoEquipo'];
														$estado=$_POST['estadoEquipo'];
														$fAntivirus = str_replace('/', '-', $fAntivirus);
														$fAdquisicion = str_replace('/', '-', $fAdquisicion);
														if($fAntivirus!=""){
															$fAntivirus= date("Y-m-d", strtotime($fAntivirus));
														}
														if ($fAdquisicion!="") {
															$fAdquisicion=date("Y-m-d", strtotime($fAdquisicion));
														}
										?>
										<div class="mdl-grid">
											<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
												<input type="hidden" name="id" value="<?php echo $id?>" />
												<input type="hidden" name="ubicacionAnterior" value="<?php echo $ubicacion?>" />
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $nombre?>" id="NombreEquipo" name="NombreEquipo" >
													<label class="mdl-textfield__label" for="NombreEquipo">Nombre del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $ubicacion?>" id="UbicacionEquipo" name="UbicacionEquipo" >
													<label class="mdl-textfield__label" for="UbicacionEquipo">Ubicación del Equipo</label>
												</div>

												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $direccion?>"  id="IpEquipo" name="IpEquipo">
													<label class="mdl-textfield__label" for="IpEquipo">Dirección IP del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $marca?>" id="MarcaEquipo" name="MarcaEquipo">
													<label class="mdl-textfield__label" for="MarcaEquipo">Marca del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text"  value="<?php echo $modelo?>" id="ModeloEquipo" name="ModeloEquipo">
													<label class="mdl-textfield__label" for="ModeloEquipo">Modelo del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $procesador?>" id="ProcesadorEquipo" name="ProcesadorEquipo">
													<label class="mdl-textfield__label" for="ProcesadorEquipo">Procesador del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $ram?>" id="RamEquipo" name="RamEquipo">
													<label class="mdl-textfield__label" for="RamEquipo">RAM del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $disco?>" id="DiscoEquipo"  name="DiscoEquipo">
													<label class="mdl-textfield__label" for="DiscoEquipo">Disco Duro del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $ns?>" id="NSEquipo" name="NSEquipo">
													<label class="mdl-textfield__label" for="NSEquipo">Número de Serie del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $idEquipo?>" id="IdEquipo" name="IdEquipo">
													<label class="mdl-textfield__label" for="IdEquipo">Id del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $soEquipo?>" id="SOEquipo" name="SOEquipo">
													<label class="mdl-textfield__label" for="SOEquipo">Sistema Operativo del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text"  value="<?php echo $utp?>" id="UtpEquipo" name="UtpEquipo">
													<label class="mdl-textfield__label" for="UtpEquipo">UTP del Equipo</label>
												</div>
											</div>
											<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $encargado?>"  id="EncargadoEquipo" name="EncargadoEquipo">
													<label class="mdl-textfield__label" for="EncargadoEquipo">Encargado del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $observacion?>" id="ObservacionesEquipo" name="ObservacionesEquipo">
													<label class="mdl-textfield__label" for="ObservacionesEquipo">Observaciones del Equipo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield">
													<label class="mdl-textfield" >Usuario del Equipo:</label>
													<select class="mdl-textfield__input" name="UsuarioEquipo" id="UsuarioEquipo"  >
														<option value="" disabled="" selected="">Usuario del Equipo </option>
														<option value="Alumno">Alumno</option>
														<option value="Administrativo">Administrativo</option>
														<option value="Docente">Docente</option>
													</select>
												</div>
												<div class="mdl-textfield mdl-js-textfield">
													<label class="mdl-textfield" >Vencimiento de Licencia de Antivirus:</label>
													<input type="date" class="mdl-textfield__input" name="LicenciaEquipo" value="<?php echo $fAntivirus?>">
												</div>
												<div class="mdl-textfield mdl-js-textfield">
													<label class="mdl-textfield" >Fecha de Adquisición del Equipo:</label>
													<input type="date" class="mdl-textfield__input" name="FAdquisicionEquipo" value="<?php echo $fAdquisicion?>">
												</div>
												<div class="mdl-textfield mdl-js-textfield">
													<label class="mdl-textfield" >Estado Actual del Equipo:</label>
													<select class="mdl-textfield__input" name="EstadoEquipo" id="EstadoEquipo" >
														<option value="" disabled="" selected="">Selecciona el Estado del Equipo</option>
														<option value="ASIGNADO">Asignado</option>
														<option value="EN ALMACÉN">En Almacén</option>
														<option value="DADO DE BAJA">Dado de Baja</option>
													</select>
												</div>
												<div class="mdl-textfield mdl-js-textfield">
													<label class="mdl-textfield" >Tipo de Equipo:</label>
													<select class="mdl-textfield__input" name="TipoEquipo" id="TipoEquipo" >
														<option value="" disabled="" selected="">Selecciona el Tipo de Equipo</option>
														<option value="PC">PC</option>
														<option value="Portatil">Portatil</option>
														<option value="DVR">DVR</option>
														<option value="Servidor">Servidor</option>
														<option value="Disco Duro">Disco Duro</option>
														<option value="Impresora">Impresora</option>
														<option value="Enrutador">Enrutador</option>
														<option value="Otro">Otro</option>
													</select>
												</div>
											</div>
										</div>
										<div>
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-actualizarEquipo" style="width:10%; float:right;">
											<i class="zmdi zmdi-floppy" href="equipo_actualizar.php"></i>
											<div class="mdl-tooltip" for="btn-actualizarEquipo">Guardar Cambios</div>
										</button>
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-regresar" onclick="history.back()" style="width:10%;" >
											<i class="zmdi zmdi-arrow-left" href="javascript:history.back()"></i>
											<div class="mdl-tooltip" for="btn-regresar" >Regresar</div>
										</button>
										</div>

										<script type="text/javascript">
											 function validacion(){
												 if ((NombreEquipo.value == null) || (NombreEquipo.value.length == 0) || /^\s*$/.test(NombreEquipo.value)) {
													 alert("El campo de Nombre de Equipo no puede estar vacío.");
												 	 return false;
												 }else {
													 if (UbicacionEquipo.value == null || UbicacionEquipo.value.length == 0 || /^\s*$/.test(UbicacionEquipo.value)) {
														 alert("El campo de Ubicación de Equipo no puede estar vacío.");
													 	 return false;
													 }else {
																return true;
		 												}
													}
												}

												window.onload =function cargarSelects(){
													if("<?php echo $usuario; ?>"=="Alumno"){
														UsuarioEquipo.selectedIndex="1";
													}else if("<?php echo $usuario; ?>"=="Administrativo"){
														UsuarioEquipo.selectedIndex="2";
													} else if("<?php echo $usuario; ?>"=="Docente"){
														UsuarioEquipo.selectedIndex="3";
													}

													if("<?php echo $estado; ?>"=="ASIGNADO"){
														EstadoEquipo.selectedIndex="1";
													}else if("<?php echo $estado; ?>"=="EN ALMACÉN"){
														EstadoEquipo.selectedIndex="2";
													} else if("<?php echo $estado; ?>"=="DADO DE BAJA"){
														EstadoEquipo.selectedIndex="3";
													}

													if("<?php echo $tipo; ?>"=="PC"){
														TipoEquipo.selectedIndex="1";
													}else if("<?php echo $tipo; ?>"=="Portatil"){
														TipoEquipo.selectedIndex="2";
													} else if("<?php echo $tipo; ?>"=="DVR"){
														TipoEquipo.selectedIndex="3";
													}else if("<?php echo $tipo; ?>"=="Servidor"){
														TipoEquipo.selectedIndex="4";
													}else if("<?php echo $tipo; ?>"=="Disco Duro"){
														TipoEquipo.selectedIndex="5";
													} else if("<?php echo $tipo; ?>"=="Impresora"){
														TipoEquipo.selectedIndex="6";
													} else if("<?php echo $tipo; ?>"=="Enrutador"){
														TipoEquipo.selectedIndex="7";
													}else if("<?php echo $tipo; ?>"=="Otro"){
														TipoEquipo.selectedIndex="8";
													}
												}
										</script>
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
