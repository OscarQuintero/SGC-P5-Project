<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Equipos de Cómputo</title>
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
				<a href="#tabNuevoRegistro" class="mdl-tabs__tab ">AGREGAR EQUIPO</a>
				<a href="#tabListaEquipos" class="mdl-tabs__tab is-active">LISTA DE EQUIPOS</a>
			</div>
			<div class="mdl-tabs__panel " id="tabNuevoRegistro">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Agregar Nuevo Equipo
							</div>
							<div class="full-width panel-content">
								<form action= "equipo_agregar.php" method= "post" onsubmit="return validacion()">
								<h5 class="text-center">Datos de Equipo</h5>
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="NombreEquipo" name="NombreEquipo" >
												<label class="mdl-textfield__label" for="NombreEquipo">Nombre del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="UbicacionEquipo" name="UbicacionEquipo" >
												<label class="mdl-textfield__label" for="UbicacionEquipo">Ubicación del Equipo</label>
											</div>

											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="IpEquipo" name="IpEquipo">
												<label class="mdl-textfield__label" for="IpEquipo">Dirección IP del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="MarcaEquipo" name="MarcaEquipo">
												<label class="mdl-textfield__label" for="MarcaEquipo">Marca del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="ModeloEquipo" name="ModeloEquipo">
												<label class="mdl-textfield__label" for="ModeloEquipo">Modelo del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="ProcesadorEquipo" name="ProcesadorEquipo">
												<label class="mdl-textfield__label" for="ProcesadorEquipo">Procesador del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="RamEquipo" name="RamEquipo">
												<label class="mdl-textfield__label" for="RamEquipo">RAM del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="DiscoEquipo" name="DiscoEquipo">
												<label class="mdl-textfield__label" for="DiscoEquipo">Disco Duro del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="NSEquipo" name="NSEquipo">
												<label class="mdl-textfield__label" for="NSEquipo">Número de Serie del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="IdEquipo" name="IdEquipo">
												<label class="mdl-textfield__label" for="IdEquipo">Id del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="SOEquipo" name="SOEquipo">
												<label class="mdl-textfield__label" for="SOEquipo">Sistema Operativo del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="UtpEquipo" name="UtpEquipo">
												<label class="mdl-textfield__label" for="UtpEquipo">UTP del Equipo</label>
											</div>
										</div>
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="EncargadoEquipo" name="EncargadoEquipo">
												<label class="mdl-textfield__label" for="EncargadoEquipo">Encargado del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="ObservacionesEquipo" name="ObservacionesEquipo">
												<label class="mdl-textfield__label" for="ObservacionesEquipo">Observaciones del Equipo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield">
												<label class="mdl-textfield" >Usuario del Equipo:</label>
												<select class="mdl-textfield__input" name="UsuarioEquipo" required >
													<option value="" disabled="" selected="">Usuario del Equipo </option>
													<option value="Alumno">Alumno</option>
													<option value="Administrativo">Administrativo</option>
													<option value="Docente">Docente</option>
												</select>
											</div>
											<div class="mdl-textfield mdl-js-textfield">
												<label class="mdl-textfield" >Vencimiento de Licencia de Antivirus:</label>
												<input type="date" class="mdl-textfield__input" name="LicenciaEquipo">
											</div>
											<div class="mdl-textfield mdl-js-textfield">
												<label class="mdl-textfield" >Fecha de Adquisición:</label>
												<input type="date" class="mdl-textfield__input" name="FAdquisicionEquipo">
											</div>
											<div class="mdl-textfield mdl-js-textfield">
												<label class="mdl-textfield" >Estado del Equipo:</label>
												<select class="mdl-textfield__input" name="EstadoEquipo" required>
													<option value="" disabled="" selected="">Selecciona el Estado del Equipo</option>
													<option value="ASIGNADO">Asignado</option>
													<option value="EN ALMACÉN">En Almacén</option>
													<option value="DADO DE BAJA">Dado de Baja</option>
												</select>
											</div>
											<div class="mdl-textfield mdl-js-textfield">
												<label class="mdl-textfield" >Tipo del Equipo:</label>
												<select class="mdl-textfield__input" name="TipoEquipo" required>
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
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-agregarEquipo" >
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-agregarEquipo">Agregar Equipo</div>
									</p>

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
									</script>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mdl-tabs__panel is-active" id="tabListaEquipos">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
					<div class="full-width panel-content">
						<div class="full-width panel mdl-shadow--10dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista de Equipos
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
											<span> Buscar por ubicación de Equipo</span>
										</div>
									</div>
								</form>
								</a>
								<a style="width:50%; float:right;">
								<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
									<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable" >
										<label class="mdl-button mdl-js-button mdl-button--icon" for="searchByName">
											<i class="zmdi zmdi-search"></i>
										</label>
										<div class="mdl-textfield__expandable-holder">
											<input class="mdl-textfield__input" type="text" id="searchByName" name="bus_nombre">
											<label class="mdl-textfield__label" for="searchByName"></label>
											<span> Buscar por nombre del Equipo</span>
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
												$sql=mysqli_query($mysqli,"SELECT * FROM equipos_computo ORDER BY nombreEquipo");//ORDER BY  nombreEquipo
											}
											else{

												if(isset($_GET["bus_ubicacion"])){
													$bus_ubicacion=$_GET["bus_ubicacion"];
													$sql=mysqli_query($mysqli,"SELECT * FROM equipos_computo WHERE UbicacionEquipo LIKE '%$bus_ubicacion%' ORDER BY UbicacionEquipo ");
												}elseif(isset($_GET["bus_nombre"])){
													$bus_nombre=$_GET["bus_nombre"];
													$sql=mysqli_query($mysqli,"SELECT * FROM equipos_computo WHERE nombreEquipo LIKE '%$bus_nombre%' ORDER BY nombreEquipo ");
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
															$nombre=$row[2];
											?>
										<div class="mdl-list__item mdl-list__item--two-line" style="width:100%;" >
											<span class="mdl-list__item-primary-content">
												<i class="zmdi zmdi-desktop-windows mdl-list__item-avatar"></i>
												<span><?=$conteo?>.<?=$nombre?></span>
												<span class="mdl-list__item-sub-title"><?=$ubicacion?></span>
											</span>
											<a class="mdl-list__item-secondary-action" href="equipo.php?id=<?=$id?>" style="padding-right: 20px;"><i class="zmdi zmdi-eye"></i></a>
											<a class="mdl-list__item-secondary-action" style="padding-left: 20px;" onclick="borrarEquipo(<?=$id?>)"><i class="zmdi zmdi-close"></i></a>
											<script>
												function borrarEquipo(equipo) {
												    if(confirm("¿Deseas dar de baja este équipo?")){
															location.href="equipo_baja.php?id="+equipo;
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
												echo '<script>alert("NO HAY EQUIPOS DE COMPUTO REGISTRADOS EN LA BASE DE DATOS.")</script>';
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
