<html lang="es">

</html>


<?php

include '../php-page/menu.php';


$id = $_POST['id'];

$base = "gestionsubir";
$Conexion = mysqli_connect("localhost", "root", "", $base);

if ($Conexion) {
	echo "La conexion fue exitosa " . "<br>";

} else {
	echo "La conexion ha fallado " . "<br>";
}

$cadena = "DELETE FROM persona  WHERE id = '$id'";

$resultado = mysqli_query($Conexion, $cadena);

if ($resultado) {
	echo "Se ha eliminado el registro" . "<br>";

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
	<title>Document</title>
</head>

<body>
	<a href="../php-page/form-bajas.php">Volver</a>

</body>

</html>