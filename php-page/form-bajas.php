<?php
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Eliminar Registro</title>
	<link rel="stylesheet" href="../css/formAltas.css">
</head>

<body>

	<div class="container-fluid">
		<h3 class="altaTitulo h3 mb-5 fw-normal mt-5">Eliminar Registro</h3>
		<form action="../php-processing/bajas.php" method="POST" enctype="multipart/form-data">

			<div class="form-container">
				<div class="row g-3 justify-content-center">
					<div class="form-group mt-1 mb-1 col-md-2">
						<label for="apellido">ID:</label>
						<input type="number" name="id" class="form-control form-control-sm" required><br>
					</div>
				</div>

				<div class="row justify-content-center">
					<div class="form-group m1-1 mb-1 col-md-1">
						<button type="submit" class="btn btn-danger">Eliminar</button><br>
					</div>
				</div>

			</div>
		</form>
	</div>


</body>