<?php
include 'menu.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Modificacion</title>
	<link rel="stylesheet" href="../css/formAltas.css">
</head>

<body>

	<div class="container-fluid">
		<h3 class="altaTitulo h3 mb-5 fw-normal mt-5">FORMULARIO DE MODIFICACION</h3>
		<form class="altaInput" action="../php-processing/modificacion.php" method="POST">
			<div class="grupoInputs">
				<label for="apellido">ID del Registro a Modificar:</label>
				<input type="number" name="id"><br>
			</div>

			<br><br>
			Campos a modificar:<br>

			<div class="grupoInputs">
				<label for="apellido">Apellido:</label>
				<input type="text" name="apellido required"><br>
			</div>

			<div class="grupoInputs">
				<label for="nombre">Nombre:</label>
				<input type="text" name="nombre" required><br>
			</div>

			<div class="grupoInputs">
				<label for="edad">Edad:</label>
				<input type="number" name="edad" required><br>
			</div>


			<button type="submit" class="btn btn-primary">Enviar</button><br>
		</form>
	</div>

</body>

</html>