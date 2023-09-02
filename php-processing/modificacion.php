<html lang="es">

</html>


<?php

include '../php-page/form-modificacion.php';

$id = $_POST['id'];

$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];

$set = "SET ";

if (!empty($nom)) {
	$set .= "nombre = '$nom'";
}

if (!empty($ed)) {
	if (empty($nom)) {
		$set .= "edad = '$ed'";
	} else {
		$set .= ", edad = '$ed'";
	}
}

if (!empty($ape)) {
	if (empty($nom)) {
		if (empty($ed)) {
			$set .= "apellido = '$ape'";
		}
	} else {
		$set .= ", apellido = '$ape'";
	}
}

$base = "gestionsubir";
$Conexion = mysqli_connect("localhost", "root", "", $base);

$cadena = "UPDATE persona $set WHERE id = '$id'";

if (empty($nom) && empty($ed) && empty($ape)) {

	echo '
	<div class="row g-1 justify-content-center">
		<div class="alert alert-danger alert-dismissible fade show col-md-4" role="alert">
			Debe ingresar un valor en al menos un campo.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			</button>
  		</div>
	</div>
		';

} else {
	echo $cadena;

	if ($Conexion) {
		echo "La conexion fue exitosa " . "<br>";

	} else {
		echo "La conexion ha fallado " . "<br>";
	}

	$resultado = mysqli_query($Conexion, $cadena);

	if ($resultado) {
		echo "Se ha modificado un registro" . "<br>";

	} else {
		echo "NO se ha modificado un registro" . "<br>";
		echo mysqli_error($Conexion);
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="../js/bootstrap.js"></script>
</head>

<body>

</body>

</html>