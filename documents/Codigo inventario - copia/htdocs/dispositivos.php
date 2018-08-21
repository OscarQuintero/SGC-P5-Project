<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dispositivos </title>
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
				<a href="#tabNuevoRegistro" class="mdl-tabs__tab ">AGREGAR DISPOSITIVOS</a>
				<a href="#tabListaDispositivos" class="mdl-tabs__tab is-active">LISTA DE DISPOSITIVOS</a>
			</div>
			<div class="mdl-tabs__panel " id="tabNuevoRegistro">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Agregar Nuevo Dispositivo
							</div>
							<div class="full-width panel-content">
								<form action= "Dispositivo_agregar.php" method= "post" onsubmit="return validacion()">
								<h5 class="text-center">Datos del Dispositivo</h5>
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="UbicacionDispositivo" name="UbicacionDispositivo" >
												<label class="mdl-textfield__label" for="UbicacionDispositivo">Ubicación del Dispositivo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="IdDispositivo" name="IdDispositivo" >
												<label class="mdl-textfield__label" for="IdDispositivo">Código del Dispositivo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="TipoDispositivo" name="TipoDispositivo" >
												<label class="mdl-textfield__label" for="TipoDispositivo">Tipo de Dispositivo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="DescripcionDispositivo" name="DescripcionDispositivo">
												<label class="mdl-textfield__label" for="DescripcionDispositivo">Descripción del Dispositivo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="ObservacionesDispositivo" name="ObservacionesDispositivo">
												<label class="mdl-textfield__label" for="ObservacionesDispositivo">Observaciones del Dispositivo</label>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="MarcaDispositivo" name="MarcaDispositivo">
												<label class="mdl-textfield__label" for="MarcaDispositivo">Marca del Dispositivo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="ModeloDispositivo" name="ModeloDispositivo">
												<label class="mdl-textfield__label" for="ModeloDispositivo">Modelo del Dispositivo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="NSDispositivo" name="NSDispositivo">
												<label class="mdl-textfield__label" for="NSDispositivo">Número de Serie del Dispositivo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield">
												<label class="mdl-textfield" >Estado del Dispositivo:</label>
												<select class="mdl-textfield__input" name="EstadoDispositivo" required>
													<option value="" disabled="" selected="">Selecciona el Estado del Dispositivo</option>
													<option value="ASIGNADO">Asignado</option>
													<option value="EN ALMACÉN">En Almacén</option>
													<option value="DADO DE BAJA">Dado de Baja</option>
												</select>
											</div>
										</div>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-agregarDispositivo" >
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-agregarDispositivo">Agregar Dispositivo</div>
									</p>

									<script type="text/javascript">
										 function validacion(){
												 if (UbicacionDispositivo.value == null || UbicacionDispositivo.value.length == 0 || /^\s*$/.test(UbicacionDispositivo.value)) {
													 alert("El campo de Ubicación de Dispositivo no puede estar vacío.");
												 	 return false;
												 }else {
															return true;
	 												}
												}
											}
									</script>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabListaDispositivos">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
					<div class="full-width panel-content">
						<div class="full-width panel mdl-shadow--10dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista de Dispositivos
							</div>
							<div >
								<a style="width:50%; float:left;">
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>" >
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable" >
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchByUbication">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchByUbication" name="bus_ubicacion">
											<label class="mdl-textfield__label" for="searchByUbication"></label>
											<span> Buscar por ubicación de Dispositivo</span>
										</div>
									</div>
								</form>
								</a>
								<a style="width:50%; float:right;">
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable" >
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchByType">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchByType" name="bus_tipo">
											<label class="mdl-textfield__label" for="searchByType"></label>
											<span> Buscar por tipo de Dispositivo</span>
										</div>
									</div>
								</form>
								</a>
								</div>
								<div class="mdl-list"  >
										<?php
										require("connect_db.php");
										mysqli_query($mysqli,"SET NAMES 'utf8'");


										if(empty($_GET)){
											$sql=mysqli_query($mysqli,"SELECT * FROM dispositivos ORDER BY tipoDispositivo");//ORDER BY  tipoDispositivo
										}
										else{

											if(isset($_GET["bus_ubicacion"])){
												$bus_ubicacion=$_GET["bus_ubicacion"];
												$sql=mysqli_query($mysqli,"SELECT * FROM dispositivos WHERE ubicacionDispositivo LIKE '%$bus_ubicacion%' ORDER BY UbicacionDispositivo ");
											}elseif(isset($_GET["bus_tipo"])){
												$bus_tipo=$_GET["bus_tipo"];
												$sql=mysqli_query($mysqli,"SELECT * FROM dispositivos WHERE tipoDispositivo LIKE '%$bus_tipo%' ORDER BY tipoDispositivo ");
											}else{
												$sql=null;
											}

										}
										$conteo=1;
										if($sql!=null)
											{
													$row = mysqli_fetch_row($sql);
													while ($row !=null)
													{
														$id= $row[0];
														$ubicacion=$row[1];
														$tipo=$row[3];
										?>
									<div class="mdl-list__item mdl-list__item--two-line" style="width:100%;" >
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-desktop-windows mdl-list__item-avatar"></i>
											<span><?=$conteo?>.<?=$tipo?></span>
											<span class="mdl-list__item-sub-title"><?=$ubicacion?></span>
										</span>
										<a class="mdl-list__item-secondary-action" href="dispositivo.php?id=<?=$id?>" style="padding-right: 20px;"><i class="zmdi zmdi-eye"></i></a>
										<a class="mdl-list__item-secondary-action" style="padding-left: 20px;" onclick="borrarDispositivo(<?=$id?>)"><i class="zmdi zmdi-close"></i></a>
										<script>
											function borrarDispositivo(Dispositivo) {
											    if(confirm("¿Deseas dar de baja este Dispositivo?")){
														location.href="dispositivo_baja.php?id="+Dispositivo;
													}
											}
											</script>
									</div>
									<li class="full-width divider-menu-h"></li>
										<?php
														$row = mysqli_fetch_row($sql);
														$conteo++;
													}
										}
										else
										{
											echo '<script>alert("NO HAY DISPOSITIVOS REGISTRADOS EN LA BASE DE DATOS.")</script>';
										}
										?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
