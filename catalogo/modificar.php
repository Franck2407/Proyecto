<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM libro WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
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
				<h3 style="text-align:center">MODIFICAR DATOS DEL LIBRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre del Libro</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del libro" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">ISBR</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="isbr" placeholder="ISBR"value="<?php echo $row['isbr']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre del Autor/es</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="autor" placeholder="Nombre del Autor/es"value="<?php echo $row['autor']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Editorial</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="editorial" placeholder="Editorial"value="<?php echo $row['editorial']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Número de Páginas</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="paginas" placeholder="Número de Páginas"value="<?php echo $row['paginas']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Clave del Libro</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="clave" placeholder="clave del Libro"value="<?php echo $row['clave']; ?>" >
					</div>
				</div>
			
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>