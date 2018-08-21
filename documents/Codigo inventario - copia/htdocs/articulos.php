<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mobiliario y Otros Equipos</title>
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
				<a href="#tabNuevoRegistro" class="mdl-tabs__tab ">AGREGAR ARTICULO</a>
				<a href="#tabListaArticulos" class="mdl-tabs__tab is-active">LISTA DE MOBILIARIO Y EQUIPOS ELECTRONICOS</a>
			</div>
			<div class="mdl-tabs__panel " id="tabNuevoRegistro">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
						<div class="full-width panel mdl-shadow--2dp">
							<div class="full-width panel-tittle bg-primary text-center tittles">
								Agregar Nuevo Articulo
							</div>
							<div class="full-width panel-content">
								<form action= "Articulo_agregar.php" method= "post" onsubmit="return validacion()">
								<h5 class="text-center">Datos del Articulo</h5>
									<div class="mdl-grid">
										<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="UbicacionArticulo" name="UbicacionArticulo" >
												<label class="mdl-textfield__label" for="UbicacionArticulo">Ubicación del Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="IdArticulo" name="IdArticulo" >
												<label class="mdl-textfield__label" for="IdArticulo">Código del Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="ClasificacionArticulo" name="ClasificacionArticulo" >
												<label class="mdl-textfield__label" for="ClasificacionArticulo">Clasificación del Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="TipoArticulo" name="TipoArticulo" >
												<label class="mdl-textfield__label" for="TipoArticulo">Tipo de Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="PartidaArticulo" name="PartidaArticulo">
												<label class="mdl-textfield__label" for="PartidaArticulo">Partida Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text"  id="DescripcionArticulo" name="DescripcionArticulo">
												<label class="mdl-textfield__label" for="DescripcionArticulo">Descripción del Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" step="any" id="CantidadArticulo" name="CantidadArticulo">
												<label class="mdl-textfield__label" for="CantidadArticulo">Cantidad</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="" id="AdquisicionArticulo" name="AdquisicionArticulo">
												<label class="mdl-textfield__label" for="AdquisicionArticulo">Valor de adquisición del Articulo</label>
											</div>

											<div class="mdl-textfield mdl-js-textfield">
												<label class="mdl-textfield" >Inventario al que pertenece el Articulo:</label>
												<select class="mdl-textfield__input" name="InventarioArticulo" required>
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
												<input class="mdl-textfield__input" type="text" id="ResguardanteArticulo" name="ResguardanteArticulo">
												<label class="mdl-textfield__label" for="ResguardanteArticulo">Nombre de Resguardante del Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="IdResguardanteArticulo" name="IdResguardanteArticulo">
												<label class="mdl-textfield__label" for="IdResguardanteArticulo">Código de Resguardante del Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="CResguardanteArticulo" name="CResguardanteArticulo">
												<label class="mdl-textfield__label" for="CResguardanteArticulo">Cargo de Resguardante del Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="number" id="NResguardoArticulo" name="NResguardoArticulo">
												<label class="mdl-textfield__label" for="NResguardoArticulo">Número de Resguardo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="ObservacionesArticulo" name="ObservacionesArticulo">
												<label class="mdl-textfield__label" for="ObservacionesArticulo">Observaciones del Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="MarcaArticulo" name="MarcaArticulo">
												<label class="mdl-textfield__label" for="MarcaArticulo">Marca del Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="ModeloArticulo" name="ModeloArticulo">
												<label class="mdl-textfield__label" for="ModeloArticulo">Modelo del Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
												<input class="mdl-textfield__input" type="text" id="NSArticulo" name="NSArticulo">
												<label class="mdl-textfield__label" for="NSArticulo">Número de Serie del Articulo</label>
											</div>
											<div class="mdl-textfield mdl-js-textfield">
												<label class="mdl-textfield" >Estado del Articulo:</label>
												<select class="mdl-textfield__input" name="EstadoArticulo" required>
													<option value="" disabled="" selected="">Selecciona el Estado del Articulo</option>
													<option value="ASIGNADO">Asignado</option>
													<option value="EN ALMACÉN">En Almacén</option>
													<option value="DADO DE BAJA">Dado de Baja</option>
												</select>
											</div>
										</div>
									</div>
									<p class="text-center">
										<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-agregarArticulo" >
											<i class="zmdi zmdi-plus"></i>
										</button>
										<div class="mdl-tooltip" for="btn-agregarArticulo">Agregar Articulo</div>
									</p>

									<script type="text/javascript">
										 function validacion(){
												 if (UbicacionArticulo.value == null || UbicacionArticulo.value.length == 0 || /^\s*$/.test(UbicacionArticulo.value)) {
													 alert("El campo de Ubicación de Articulo no puede estar vacío.");
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
			<div class="mdl-tabs__panel is-active" id="tabListaArticulos">
				<div class="mdl-grid">
					<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
					<div class="full-width panel-content">
						<div class="full-width panel mdl-shadow--10dp">
							<div class="full-width panel-tittle bg-success text-center tittles">
								Lista de Articulos
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
											<span> Buscar por ubicación de Articulo</span>
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
											<span> Buscar por tipo de Articulo</span>
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
											$sql=mysqli_query($mysqli,"SELECT * FROM mobiliario ORDER BY tipoArticulo");//ORDER BY  tipoEquipo
										}
										else{

											if(isset($_GET["bus_ubicacion"])){
												$bus_ubicacion=$_GET["bus_ubicacion"];
												$sql=mysqli_query($mysqli,"SELECT * FROM mobiliario WHERE ubicacionArticulo LIKE '%$bus_ubicacion%' ORDER BY UbicacionArticulo ");
											}elseif(isset($_GET["bus_tipo"])){
												$bus_tipo=$_GET["bus_tipo"];
												$sql=mysqli_query($mysqli,"SELECT * FROM mobiliario WHERE tipoArticulo LIKE '%$bus_tipo%' ORDER BY tipoArticulo ");
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
														$tipo=$row[4];
										?>
									<div class="mdl-list__item mdl-list__item--two-line" style="width:100%;" >
										<span class="mdl-list__item-primary-content">
											<i class="zmdi zmdi-desktop-windows mdl-list__item-avatar"></i>
											<span><?=$conteo?>.<?=$tipo?></span>
											<span class="mdl-list__item-sub-title"><?=$ubicacion?></span>
										</span>
										<a class="mdl-list__item-secondary-action" href="Articulo.php?id=<?=$id?>" style="padding-right: 20px;"><i class="zmdi zmdi-eye"></i></a>
										<a class="mdl-list__item-secondary-action" style="padding-left: 20px;" onclick="borrarArticulo(<?=$id?>)"><i class="zmdi zmdi-close"></i></a>
										<script>
											function borrarArticulo(Articulo) {
											    if(confirm("¿Deseas dar de baja este articulo?")){
														location.href="Articulo_baja.php?id="+Articulo;
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
											echo '<script>alert("NO HAY ARTICULOS REGISTRADOS EN LA BASE DE DATOS.")</script>';
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
