<?php
	
	$mysqli = new mysqli('localhost', 'root', 'ico1', 'Biblioteca');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>