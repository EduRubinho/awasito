<?php
require 'conexion.php';
$id = (int) $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $apellido = $conexion->real_escape_string($_POST['apellido']);
    $correo = $conexion->real_escape_string($_POST['correo']);

    $conexion->query("UPDATE personas
                      SET nombre = '$nombre', apellido = '$apellido', correo = '$correo'
                      WHERE id = $id");
    header('Location: index.php');
    exit;
}

$resultado = $conexion->query("SELECT * FROM personas WHERE id = $id");
$persona = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Editar persona</title></head>
<body>
    <h1>Editar persona</h1>
    <form method="post">
        <p><input name="nombre" value="<?= htmlspecialchars($persona['nombre']) ?>" required></p>
        <p><input name="apellido" value="<?= htmlspecialchars($persona['apellido']) ?>" required></p>
        <p><input name="correo" type="email" value="<?= htmlspecialchars($persona['correo'] ?? '') ?>"></p>
        <button>Guardar cambios</button>
    </form>
    <a href="index.php">Volver</a>
</body>
</html>
