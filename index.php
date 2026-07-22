<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Nombre</title>
</head>
<body>

    <h1>Ingresa tu nombre</h1>

    <form action="guardar.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <button type="submit">Guardar</button>
    </form>

</body>
</html>