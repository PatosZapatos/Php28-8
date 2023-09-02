<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Altas</title>
	<link rel="stylesheet" href="../css/formAltas.css">
</head>

<body>

	<div class="container-fluid">
		<h3 class="altaTitulo h3 mb-5 fw-normal mt-5">FORMULARIO DE ALTA</h3>
		<form action="../php-processing/altas.php" method="POST" enctype="multipart/form-data">
		
			<div class="form-group mt-1 mb-1 col-md-2">
				<label for="apellido">Apellido:</label>
				<input type="text" name="apellido" class="form-control form-control-sm" required><br>
			</div>

			<div class="form-group mt-1 mb-1 col-md-2">
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" class="form-control form-control-sm" required><br>
			</div>

			<div class="form-group mt-1 mb-1 col-md-2">
				<label for="edad">Edad:</label>
				<input type="number" name="edad" class="form-control form-control-sm" required><br>
			</div>

			<div class="form-group">
				<label for="foto">Archivo</label> <br>
				<input type="file" name="foto" class="form-control-file" required><br>
			</div>
			
			<div class="form-group mt-4">
				<button type="submit" class="btn btn-primary">Enviar</button><br>
			</div>
		</form>
	</div>


</body>

</html>