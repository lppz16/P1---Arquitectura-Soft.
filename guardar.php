<?php

include "conexion.php";

$nombre = $_POST["nombre"];

$sql = "INSERT INTO usuarios (nombre) VALUES (?)";

$consulta_preparada = $conexion->prepare($sql);
$consulta_preparada->bind_param("s", $nombre);

if ($consulta_preparada->execute()) {
    echo "¡Nombre guardado correctamente!";
} else {
    echo "Error al guardar: " . $consulta_preparada->error;
}

$consulta_preparada->close();
$conexion->close();

?>