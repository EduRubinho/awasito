<?php
require 'conexion.php';
$personas = $conexion->query('SELECT * FROM personas');
?>
<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Personas</title></head>
<body>
    <h1>Personas</h1>
    <a href="crear.php">Agregar persona</a>

    <?php while ($persona = $personas->fetch_assoc()): ?>
        <p>
            <?= htmlspecialchars($persona['nombre']) ?>
            <?= htmlspecialchars($persona['apellido']) ?>
            (<?= htmlspecialchars($persona['correo'] ?? '') ?>)
            <a href="editar.php?id=<?= $persona['id'] ?>">Editar</a>
            <form action="eliminar.php" method="post" style="display:inline">
                <input type="hidden" name="id" value="<?= $persona['id'] ?>">
                <button>Eliminar</button>
            </form>
        </p>
    <?php endwhile; ?>
</body>
</html>
