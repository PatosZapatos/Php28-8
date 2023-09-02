<?php
include 'menu.php';
?>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de Registros</title>
	<link rel="stylesheet" href="../css/respuestas.css">
</head>

<body>
	<h3 class="tablatitulo h3 mb-5 fw-normal mt-5">Tabla de Registros</h3>

	<table class="table table-hover table-sm table-bordered" style="margin:auto; width:80%;">
		<caption class="ttitulo">Lista de usuarios</caption>
		<thead class="center-text">
			<tr>
				<th>ID</th>
				<th>Apellido</th>
				<th>Nombre</th>
				<th>Edad</th>
				<th>Foto</th>
			</tr>
		</thead>
		<?php

		$base = "gestionsubir";
		$Conexion =  mysqli_connect("localhost", "root", "", $base);

		$cadena = "SELECT * FROM persona ";

		$consulta = mysqli_query($Conexion, $cadena);

		while ($registro = mysqli_fetch_row($consulta)) {
			echo "<tr class='trmain center-text' style='vertical-align: middle;'>";
			echo "<th>" . $registro[0] . "</th><th>" . $registro[1] . "</th><th>" . $registro[2] . "</th><th>" . $registro[3] . "</th><th><img class= 'center-image' src='data:image/jpeg;base64," . base64_encode($registro[4]) . "' width='150px'/></th>";
			echo "</tr>";
		}
		?>
	</table>
</body>

</html>