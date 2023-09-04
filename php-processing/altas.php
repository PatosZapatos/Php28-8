<html lang="es">

<head>
	<link rel="stylesheet" href="../css/altaBajaModificacion.css">
</head>

</html>


<?php

include '../php-page/form-altas.php';

$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

if ($foto != "none") {
	$fp = fopen($foto, "rb");
	$contenido = fread($fp, $fotoTamanio);
	$contenido = addslashes($contenido);
	fclose($fp);

	$base = "gestionsubir";
	$Conexion = mysqli_connect("localhost", "root", "", $base);

	$cadena = "INSERT INTO persona(apellido, nombre, edad,foto) VALUES ('$ape','$nom','$ed','$contenido')";

	$resultado = mysqli_query($Conexion, $cadena);

	if ($resultado) {
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
		print "NO se ha generado un registro" . "<br>";
	}

} else
	print "No se puede subir el archivo";

?>