<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Editar Información sobre Mobiliario</title>
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
				<a href="#tabInformacionArticulo" class="mdl-tabs__tab is-active">ACTUALIZAR INFORMACIÓN DEL ARTICULO</a>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabInformacion">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Actualizar Información del Articulo
							</div>
							<div class="full-width panel-content">
										<form  method= "post" action="articulo_actualizar.php" onsubmit="return validacion()">
										<h5 class="text-center" >Datos del Articulo</h5>
										<?php
												$id=$_POST['id'];
												$ubicacion=$_POST['UbicacionArticulo'];
												$idarticulo=$_POST['IdArticulo'];
												$clasificacion=$_POST['ClasificacionArticulo'];
												$partida=$_POST['PartidaArticulo'];
												$descripcion=$_POST['DescripcionArticulo'];
												$cantidad=$_POST['CantidadArticulo'];
												$adquisicion=$_POST['AdquisicionArticulo'];
												$inventario=$_POST['InventarioArticulo'];
												$marca=$_POST['MarcaArticulo'];
												$modelo=$_POST['ModeloArticulo'];
												$tipo=$_POST['TipoArticulo'];
												$observaciones=$_POST['ObservacionesArticulo'];
												$estado=$_POST['EstadoArticulo'];
												$resguardante=$_POST['ResguardanteArticulo'];
												$idresguardante=$_POST['IdResguardanteArticulo'];
												$cargoresguardante=$_POST['CResguardanteArticulo'];
												$numeroresguardo=$_POST['NResguardoArticulo'];
												$ns=$_POST['NSArticulo'];
												echo $inventario."   ".$estado;

										?>
										<div class="mdl-grid">
											<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">

												<input type="hidden" name="id" value="<?php echo $id?>" />
												<input type="hidden" name="ubicacionAnterior" value="<?php echo $ubicacion?>" />

												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $ubicacion?>" id="UbicacionArticulo" name="UbicacionArticulo" >
													<label class="mdl-textfield__label" for="UbicacionArticulo">Ubicación del Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text"  value="<?php echo $idarticulo?>" id="IdArticulo" name="IdArticulo" >
													<label class="mdl-textfield__label" for="IdArticulo">Código del Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $clasificacion?>" id="ClasificacionArticulo" name="ClasificacionArticulo" >
													<label class="mdl-textfield__label" for="ClasificacionArticulo">Clasificación del Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $tipo?>" id="TipoArticulo" name="TipoArticulo" >
													<label class="mdl-textfield__label" for="TipoArticulo">Tipo de Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text"  value="<?php echo $partida?>" id="PartidaArticulo" name="PartidaArticulo">
													<label class="mdl-textfield__label" for="PartidaArticulo">Partida Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text"  value="<?php echo $descripcion?>" id="DescripcionArticulo" name="DescripcionArticulo">
													<label class="mdl-textfield__label" for="DescripcionArticulo">Descripción del Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="number" step="any" value="<?php echo $cantidad?>" id="CantidadArticulo" name="CantidadArticulo">
													<label class="mdl-textfield__label" for="CantidadArticulo">Cantidad</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="" value="<?php echo $adquisicion?>" id="AdquisicionArticulo" name="AdquisicionArticulo">
													<label class="mdl-textfield__label" for="AdquisicionArticulo">Valor de adquisición del Articulo</label>
												</div>

												<div class="mdl-textfield mdl-js-textfield">
													<label class="mdl-textfield" >Inventario al que pertenece el Articulo:</label>
													<select class="mdl-textfield__input" id="InventarioArticulo" name="InventarioArticulo" >
														<option value="" disabled="" selected="">Selecciona el Tipo de Inventario</option>
														<option value="PATME II">PATME II</option>
														<option value="HISTORICO">HISTORICO</option>
														<option value="DONACIONES">DONACIONES</option>
														<option value="MOB. EXTRA">MOB. EXTRA</option>
													</select>
												</div>
											</div>
											<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $resguardante?>" id="ResguardanteArticulo" name="ResguardanteArticulo">
													<label class="mdl-textfield__label" for="ResguardanteArticulo">Nombre de Resguardante del Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $idresguardante?>" id="IdResguardanteArticulo" name="IdResguardanteArticulo">
													<label class="mdl-textfield__label" for="IdResguardanteArticulo">Código de Resguardante del Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $cargoresguardante?>" id="CResguardanteArticulo" name="CResguardanteArticulo">
													<label class="mdl-textfield__label" for="CResguardanteArticulo">Cargo de Resguardante del Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="number" value="<?php echo $numeroresguardo?>" id="NResguardoArticulo" name="NResguardoArticulo">
													<label class="mdl-textfield__label" for="NResguardoArticulo">Número de Resguardo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $observaciones?>" id="ObservacionesArticulo" name="ObservacionesArticulo">
													<label class="mdl-textfield__label" for="ObservacionesArticulo">Observaciones del Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $marca?>" id="MarcaArticulo" name="MarcaArticulo">
													<label class="mdl-textfield__label" for="MarcaArticulo">Marca del Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $modelo?>" id="ModeloArticulo" name="ModeloArticulo">
													<label class="mdl-textfield__label" for="ModeloArticulo">Modelo del Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
													<input class="mdl-textfield__input" type="text" value="<?php echo $ns?>" id="NSArticulo" name="NSArticulo">
													<label class="mdl-textfield__label" for="NSArticulo">Número de Serie del Articulo</label>
												</div>
												<div class="mdl-textfield mdl-js-textfield">
													<label class="mdl-textfield" >Estado del Articulo:</label>
													<select class="mdl-textfield__input" id="EstadoArticulo" name="EstadoArticulo">
														<option value="" disabled="" selected="">Selecciona el Estado del Articulo</option>
														<option value="ASIGNADO">Asignado</option>
														<option value="EN ALMACÉN">En Almacén</option>
														<option value="DADO DE BAJA">Dado de Baja</option>
													</select>
												</div>
											</div>
										</div>
										<div>
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-actualizarEquipo" style="width:10%; float:right;">
											<i class="zmdi zmdi-floppy" href="articulo_actualizar.php"></i>
											<div class="mdl-tooltip" for="btn-actualizarEquipo">Guardar Cambios</div>
										</button>
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-regresar" onclick="history.back()" style="width:10%;" >
											<i class="zmdi zmdi-arrow-left" href="javascript:history.back()"></i>
											<div class="mdl-tooltip" for="btn-regresar" >Regresar</div>
										</button>
										</div>

										<script type="text/javascript">
											 function validacion(){
													 if (UbicacionArticulo.value == null || UbicacionArticulo.value.length == 0 || /^\s*$/.test(UbicacionEquipo.value)) {
														 alert("El campo de Ubicación del Articulo no puede estar vacío.");
													 	 return false;
													 }else {
															return true;
		 												}
												}

												window.onload =function cargarSelect(){

													if("<?php echo $inventario; ?>"=="PATME II"){
														InventarioArticulo.selectedIndex="1";
													}else if("<?php echo $inventario; ?>"=="HISTORICO"){
														InventarioArticulo.selectedIndex="2";
													} else if("<?php echo $inventario; ?>"=="DONACIONES"){
														InventarioArticulo.selectedIndex="3";
													}else if("<?php echo $inventario; ?>"=="MOB. EXTRA"){
														InventarioArticulo.selectedIndex="4";
													}

													if("<?php echo $estado; ?>"=="ASIGNADO"){
														EstadoArticulo.selectedIndex="1";
													}else if("<?php echo $estado; ?>"=="EN ALMACÉN"){
														EstadoArticulo.selectedIndex="2";
													} else if("<?php echo $estado; ?>"=="DADO DE BAJA"){
														EstadoArticulo.selectedIndex="3";
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
