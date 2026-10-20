<?php
require 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $apellido = $conexion->real_escape_string($_POST['apellido']);
    $correo = $conexion->real_escape_string($_POST['correo']);

    $conexion->query("INSERT INTO personas (nombre, apellido, correo)
                      VALUES ('$nombre', '$apellido', '$correo')");
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Agregar persona</title></head>
<body>
    <h1>Agregar persona</h1>
    <form method="post">
        <p><input name="nombre" placeholder="Nombre" required></p>
        <p><input name="apellido" placeholder="Apellido" required></p>
        <p><input name="correo" type="email" placeholder="Correo"></p>
        <button>Guardar</button>
    </form>
    <a href="index.php">Volver</a>
</body>
</html>
