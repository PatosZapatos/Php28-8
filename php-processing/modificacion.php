<html lang="es">

</html> 


<?php

include '../php-page/form-modificacion.php';
include 'inserts.php';

$id = $_POST['id'];

$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

if (empty($_POST)) {

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

	if (modificacionInsert($id, $ape, $nom, $ed, $foto, $fotoTamanio)) {
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
		echo '
		<div class="row g-1 justify-content-center">
			<div class="alert alert-danger alert-dismissible fade show col-md-4" role="alert">
				No se modificó el Registro.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				</button>
			  </div>
		</div>
		';
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