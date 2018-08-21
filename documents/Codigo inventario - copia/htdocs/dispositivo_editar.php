<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Información de Dispositivo</title>
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
				<a href="#tabInformacionDispositivo" class="mdl-tabs__tab is-active">ACTUALIZAR INFORMACIÓN DEL DISPOSITIVO</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabInformacion">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Actualizar Información del Dispositivo
							</div>
							<div class="full-width panel-content">
										<form  method= "post" action="dispositivo_actualizar.php" onsubmit="return validacion()">
										<h5 class="text-center" >Datos del Dispositivo</h5>
										<?php
												$id=$_POST['id'];
												$ubicacion=$_POST['UbicacionDispositivo'];
												$idDispositivo=$_POST['IdDispositivo'];
												$descripcion=$_POST['DescripcionDispositivo'];
												$marca=$_POST['MarcaDispositivo'];
												$modelo=$_POST['ModeloDispositivo'];
												$tipo=$_POST['TipoDispositivo'];
												$observaciones=$_POST['ObservacionesDispositivo'];
												$estado=$_POST['EstadoDispositivo'];
												$ns=$_POST['NSDispositivo'];

										?>
										<div class="mdl-grid">
											<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">

												<input type="hidden" name="id" value="<?php echo $id?>" />
												<input type="hidden" name="ubicacionAnterior" value="<?php echo $ubicacion?>" />

												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $ubicacion?>" id="UbicacionDispositivo" name="UbicacionDispositivo" >
													<label class="mdl-textfield__label" for="UbicacionDispositivo">Ubicación del Dispositivo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text"  value="<?php echo $idDispositivo?>" id="IdDispositivo" name="IdDispositivo" >
													<label class="mdl-textfield__label" for="IdDispositivo">Código del Dispositivo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $tipo?>" id="TipoDispositivo" name="TipoDispositivo" >
													<label class="mdl-textfield__label" for="TipoDispositivo">Tipo de Dispositivo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text"  value="<?php echo $descripcion?>" id="DescripcionDispositivo" name="DescripcionDispositivo">
													<label class="mdl-textfield__label" for="DescripcionDispositivo">Descripción del Dispositivo</label>
												</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $observaciones?>" id="ObservacionesDispositivo" name="ObservacionesDispositivo">
													<label class="mdl-textfield__label" for="ObservacionesDispositivo">Observaciones del Dispositivo</label>
												</div>
											</div>
											<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $marca?>" id="MarcaDispositivo" name="MarcaDispositivo">
													<label class="mdl-textfield__label" for="MarcaDispositivo">Marca del Dispositivo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $modelo?>" id="ModeloDispositivo" name="ModeloDispositivo">
													<label class="mdl-textfield__label" for="ModeloDispositivo">Modelo del Dispositivo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $ns?>" id="NSDispositivo" name="NSDispositivo">
													<label class="mdl-textfield__label" for="NSDispositivo">Número de Serie del Dispositivo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield">
													<label class="mdl-textfield" >Estado del Dispositivo:</label>
													<select class="mdl-textfield__input" id="EstadoDispositivo" name="EstadoDispositivo">
														<option value="" disabled="" selected="">Selecciona el Estado del Dispositivo</option>
														<option value="ASIGNADO">Asignado</option>
														<option value="EN ALMACÉN">En Almacén</option>
														<option value="DADO DE BAJA">Dado de Baja</option>
													</select>
												</div>
											</div>
										</div>
										<div>
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-actualizarDispositivo" style="width:10%; float:right;">
											<i class="zmdi zmdi-floppy" href="dispositivo_actualizar.php"></i>
											<div class="mdl-tooltip" for="btn-actualizarDispositivo">Guardar Cambios</div>
										</button>
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-regresar" onclick="history.back()" style="width:10%;" >
											<i class="zmdi zmdi-arrow-left" href="javascript:history.back()"></i>
											<div class="mdl-tooltip" for="btn-regresar" >Regresar</div>
										</button>
										</div>

										<script type="text/javascript">
											 function validacion(){
													 if (UbicacionDispositivo.value == null || UbicacionDispositivo.value.length == 0 || /^\s*$/.test(UbicacionEquipo.value)) {
														 alert("El campo de Ubicación del Dispositivo no puede estar vacío.");
													 	 return false;
													 }else {
															return true;
		 												}
												}

												window.onload =function cargarSelect(){
													if("<?php echo $estado; ?>"=="ASIGNADO"){
														EstadoDispositivo.selectedIndex="1";
													}else if("<?php echo $estado; ?>"=="EN ALMACÉN"){
														EstadoDispositivo.selectedIndex="2";
													} else if("<?php echo $estado; ?>"=="DADO DE BAJA"){
														EstadoDispositivo.selectedIndex="3";
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
