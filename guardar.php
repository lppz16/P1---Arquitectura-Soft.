<?php

//se importa el archivo de conexión a la base de datos
include "conexion.php";

//obtenemos el nombre enviado desde el formulario
$nombre = $_POST["nombre"];

//preparamos la consulta SQL para insertar el nombre en la tabla "usuarios"
$sql = "INSERT INTO usuarios (nombre) VALUES (?)";

//preparamos la consulta para evitar inyecciones SQL
$consulta_preparada = $conexion->prepare($sql);
$consulta_preparada->bind_param("s", $nombre);

//ejecutamos la consulta y verificamos si se guardó correctamente
if ($consulta_preparada->execute()) {
    echo "¡Nombre guardado correctamente!";
} else {
    echo "Error al guardar: " . $consulta_preparada->error;
}

//cerramos la consulta y la conexión a la base de datos
$consulta_preparada->close();
$conexion->close();

?>