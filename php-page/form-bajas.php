<?php
include 'menu.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de Bajas</title>
	<link rel="stylesheet" href="../css/formAltas.css">
</head>

<body>

	<div class="container-fluid">
		<h3 class="altaTitulo h3 mb-5 fw-normal mt-5" style="text-align: center;">FORMULARIO DE BAJA</h3>
		<form class="altaInput" action="../php-processing/bajas.php" method="POST">
			<div class="grupoInputs">
				<label for="id">ID:</label>
				<input type="text" name="id" required><br>
			</div>

			<button type="submit" class="btn btn-primary">Eliminar</button><br>
		</form>
	</div>

</body>

</html>