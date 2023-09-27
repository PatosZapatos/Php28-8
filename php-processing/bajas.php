<html lang="es">

</html>


<?php

include '../php-page/form-bajas.php';
include 'inserts.php';

$id = $_POST['id'];

if (bajasInsert($id)) {
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
	echo '
	<div class="row g-1 justify-content-center">
		<div class="alert alert-danger alert-dismissible fade show col-md-4" role="alert">
			No se eliminó el Registro.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			</button>
		  </div>
	</div>
	';
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