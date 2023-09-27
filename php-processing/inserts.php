<?php
function altasInsert($ape, $nom, $ed, $foto, $fotoTamanio)
{
    include 'setdatabase.php';

    if (!$Conexion) {
        echo "La conexion ha fallado " . "<br>";
    } else {
        if ($foto != "none") {
            $fp = fopen($foto, "rb");
            $contenido = fread($fp, $fotoTamanio);
            $contenido = addslashes($contenido);
            fclose($fp);

            $duplicatecheck = "SELECT * FROM persona WHERE ";

            $cadena = "INSERT INTO persona(apellido, nombre, edad,foto) VALUES ('$ape','$nom','$ed','$contenido')";

            $resultado = mysqli_query($Conexion, $cadena);

            return true;
        } else
            print "No se puede subir el archivo";
    }
}

function bajasInsert($id)
{
    include 'setdatabase.php';

    if (!$Conexion) {
        echo "La conexion ha fallado " . "<br>";
    } else {
        $cadena = "DELETE FROM persona  WHERE id = '$id'";

        $resultado = mysqli_query($Conexion, $cadena);

        return true;
    }
}

function modificacionInsert($id, $ape, $nom, $ed, $foto, $fotoTamanio)
{
    include 'setdatabase.php';

    if (!$Conexion) {
        echo "La conexion ha fallado " . "<br>";
    } else {
        $set = "SET ";

        if ($nom) {
            $set .= "nombre = '$nom'";
        }

        if ($ed) {
            if ($nom) {
                $set .= ", ";
            }
            $set .= "edad = '$ed'";
        }

        if ($ape) {
            if ($nom || $ed) {
                $set .= ", ";
            }
            $set .= "apellido = '$ape'";
        }

        if ($foto) {
            $fp = fopen($foto, "rb");
            $picture = fread($fp, $fotoTamanio);
            $picture = addslashes($picture);
            fclose($fp);

            if ($ape || $nom || $ed) {
                $set .= ", ";
            }
            $set .= "foto = '$picture'";

        }

        $cadena = "UPDATE persona $set WHERE id = '$id'";

        $resultado = mysqli_query($Conexion, $cadena);

        return true;
    }

}

?>