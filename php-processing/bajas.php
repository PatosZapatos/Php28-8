<html lang="es">

</html>


<?php

include '../php-page/form-bajas.php';


$id = $_POST['id'];

$base = "gestionsubir";
$Conexion = mysqli_connect("localhost", "root", "", $base);

if (!$Conexion) {
	echo "La conexion ha fallado " . "<br>";
}

$cadena = "DELETE FROM persona  WHERE id = '$id'";

$resultado = mysqli_query($Conexion, $cadena);

if ($resultado) {
	echo '
		<div class="row g-1 justify-content-center">
			<div class="alert alert-success alert-dismissible fade show col-md-4" role="alert">
				Registro Eliminado.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				</button>
  			</div>
		</div>
		';
} else {
	echo "NO se ha eliminado el registro" . "<br>";
	echo mysqli_error($Conexion);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

</body>

</html>