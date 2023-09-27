<html lang="es">

<head>
	<link rel="stylesheet" href="../css/altaBajaModificacion.css">
</head>

</html>


<?php

include '../php-page/form-altas.php';

include 'inserts.php';

$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

if (altasInsert($ape, $nom, $ed, $foto, $fotoTamanio)) {
	echo '
		<div class="row g-1 justify-content-center">
			<div class="alert alert-success alert-dismissible fade show col-md-4" role="alert">
				<h3>Modificacion Completada</h3>'
		.
		'<p> Apellido: '
		.
		$ape
		.
		'</p> <p> Nombre: '
		.
		$nom
		.
		'</p> <p> Edad: '
		.
		$ed
		.
		'</p>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
				</button>
  			</div>
		</div>
		';

} else {
	echo '
	<div class="row g-1 justify-content-center">
		<div class="alert alert-danger alert-dismissible fade show col-md-4" role="alert">
			No se generó el Registro.
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
			</button>
		  </div>
	</div>
	';
	echo mysqli_error($Conexion);
}


?>