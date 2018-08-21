<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Vincular Dispositivo</title>
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
			<div class="mdl-grid">
				<div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--8-col-desktop mdl-cell--2-offset-desktop">
				<div class="full-width panel-content">
					<div class="full-width panel mdl-shadow--10dp">
						<div class="full-width panel-tittle bg-success text-center tittles">
							Lista de Dispositivos
						</div>
							<div class="mdl-list"  >
									<?php
									require("connect_db.php");
									mysqli_query($mysqli,"SET NAMES 'utf8'");
									$sql2=mysqli_query($mysqli,"SELECT * FROM dispositivos WHERE idEquipo='0'");
									$conteo=1;
									$idequipo= $_GET['idEquipo'];

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
										<a class="mdl-list__item-secondary-action" style="padding-left: 20px;" onclick="vincularDispositivo('<?php echo $idDispositivo?>','<?php echo $idequipo?>')"><i class="zmdi zmdi-plus"></i></a>
										<script>
											function vincularDispositivo(dispositivo , equipo) {
													if(confirm("¿Deseas vincular este dispositivo?")){
														location.href="dispositivo_vincular.php?id="+dispositivo+"&idequipo="+equipo;
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
				<br>
				<br>
					<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-regresar" onclick="history.back()" style="width:10%;" >
						<i class="zmdi zmdi-arrow-left" href="javascript:history.back(2)"></i>
						<div class="mdl-tooltip" for="btn-regresar" >Regresar</div>
					</button>
				</div>
			</div>


	</section>
</body>
</html>
