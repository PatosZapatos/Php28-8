<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar Registro</title>
	<link rel="stylesheet" href="../css/formAltas.css">
	<script src="../js/bootstrap.js"></script>
</head>

<body>

	<div class="container-fluid">
		<h3 class="altaTitulo h3 mb-5 fw-normal mt-5">Editar Registro</h3>
		<form action="../php-processing/modificacion.php" method="POST" enctype="multipart/form-data">

			<div class="form-container">
				<div class="row g-3 justify-content-center">
					<div class="form-group mt-1 mb-1 col-md-2">
						<label for="apellido">ID de Registro:</label>
						<input type="number" name="id" class="form-control form-control-sm" required><br>
					</div>
				</div>

				<h3 class="altaTitulo h4">Campos a Modificar</h3>

				<div class="form-container">
					<div class="row g-3 justify-content-center">
						<div class="form-group mt-1 mb-1 col-md-2">
							<label for="apellido">Apellido:</label>
							<input type="text" name="apellido" class="form-control form-control-sm"><br>
						</div>

						<div class="form-group mt-1 mb-1 col-md-2">
							<label for="nombre">Nombre:</label>
							<input type="text" name="nombre" class="form-control form-control-sm"><br>
						</div>

						<div class="form-group mt-1 mb-1 col-md-1">
							<label for="edad">Edad:</label>
							<input type="number" name="edad" max="110" class="form-control form-control-sm"><br>
						</div>

					</div>

					<div class="row g-3 justify-content-center">
						<div class="form-group col-md-3">
							<label for="foto">Foto</label> <br>
							<input type="file" name="foto" class="form-control form-control-sm"><br>
						</div>

					</div>

					<div class="row justify-content-center">
						<div class="form-group m1-1 mb-1 col-md-1">
							<button type="submit" class="btn btn-primary">Editar</button><br>
						</div>
					</div>

				</div>


			</div>
		</form>
	</div>


</body>

</html>