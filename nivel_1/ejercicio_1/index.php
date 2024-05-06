<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <form action="datos.php" method="post">
        <label for="nombre">Ingrese su nombre: </label>
        <input type="text" name="nombre" required><br><br>
        <label for="telefono">Ingrese su telefono: </label>
        <input type="number" name="telefono" required><br><br>
        <input type="submit" name="submit" value="Enviar">
    </form>
</body>
</html>