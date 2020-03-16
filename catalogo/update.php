<?php
	
	require 'conexion.php';
	
	$nombre = $_POST['nombre'];
	$isbr = $_POST['isbr'];
	$autor = $_POST['autor'];
	$editorial = $_POST['editorial'];
	$paginas = $_POST['paginas'];
	$clave = $_POST['clave'];
	
	
	$sql = "INSERT INTO libro (nombre, isbr, autor, editorial, paginas, clave) VALUES ('$nombre', '$isbr', '$autor', '$editorial', '$paginas', '$clave')";
	$resultado = $mysqli->query($sql);
	
?>
<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>LIBRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
				
				<a href="index.php" class="btn btn-primary">Regresar al Catálogo</a>
				
				</div>
			</div>
		</div>
	</body>
</html>