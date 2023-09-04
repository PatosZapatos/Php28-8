<html lang="es">

</html> 


<?php

include '../php-page/form-modificacion.php';

$id = $_POST['id'];

$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

$set = "SET ";

if ($nom) {
	$set .= "nombre = '$nom'";
}

if ($ed) {
	if ($nom) {
		$set .= ", edad = '$ed'";
	} else {
		$set .= "edad = '$ed'";
	}
}

if ($ape) {
	if ($nom || $ed) {
		$set .= ", apellido = '$ape'";
	} else {
		$set .= "apellido = '$ape'";
	}
}

if ($foto) {
	$fp = fopen($foto, "rb");
	$picture = fread($fp, $fotoTamanio);
	$picture = addslashes($picture);
	fclose($fp);

	if ($ape || $nom || $ed) {
		$set .= ", foto = '$picture'";
	} else {
		$set .= "foto = '$picture'";
	}
}

$base = "gestionsubir";
$Conexion = mysqli_connect("localhost", "root", "", $base);

$cadena = "UPDATE persona $set WHERE id = '$id'";

if (empty($nom) && empty($ed) && empty($ape) && empty($foto)) {

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

	if ($Conexion) {
		echo "<script>La conexion fue exitosa " . "<br></script>";
	} else {
		echo '
		<div class="row g-1 justify-content-center">
			<div class="alert alert-danger alert-dismissible fade show col-md-4" role="alert">
				Hubo un error con la conexión.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				</button>
  			</div>
		</div>
		';
	}

	$resultado = mysqli_query($Conexion, $cadena);

	if ($resultado) {
		echo '
		<div class="row g-1 justify-content-center">
			<div class="alert alert-success alert-dismissible fade show col-md-4" role="alert">
				Modificacion Completada
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				</button>
  			</div>
		</div>
		';
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