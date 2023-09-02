<html lang="es">

</html>


<?php

include '../php-page/menu.php';


$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$ed = $_POST['edad'];
$id = $_POST['id'];
$idmenor = $id - 1;

$base = "gestionsubir";
$Conexion = mysqli_connect("localhost", "root", "", $base);
if ($Conexion) {
	echo "La conexion fue exitosa " . "<br>";

} else {
	echo "La conexion ha fallado " . "<br>";
}

$cadena = "UPDATE  persona SET nombre = '$nom', edad = '$ed', apellido = '$ape' WHERE id = '$id'";

$resultado = mysqli_query($Conexion, $cadena);
$resultado = mysqli_query($Conexion, $updateid);

if ($resultado) {
	echo "Se ha modificado un registro" . "<br>";

} else {
	echo "NO se ha modificado un registro" . "<br>";
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
	<a href="../php-page/form-modificacion.php">Volver</a>

</body>

</html>