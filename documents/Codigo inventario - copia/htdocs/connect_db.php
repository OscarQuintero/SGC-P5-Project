<?php
    $mysqli = new MySQLi("localhost", "root","", "inventario");
	   mysqli_query($mysqli,"SET NAMES UTF8");
	if($mysqli -> connect_error)
    {
		die( "Fallo la conexión a MySQL: (".$mysqli -> mysqli_connect_errno().") ".$mysqli -> mysqli_connect_error());
	}
?>
