<?php
if (!isset($empleado)) {
    die("No hay datos para editar");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Modificar Empleado</title>
</head>
<body>
<h2>Editar Empleado</h2>
<form action="index.php?slug=GuardarController" method="post">
    <input type="hidden" name="id" value="<?= $empleado['ID_USUARIO'] ?>">
    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= $empleado['Nombre'] ?>" required>
    <br><br>
    <label>Usuario:</label>
    <input type="text" name="usuario" value="<?= $empleado['Usuario'] ?>" required>
    <br><br>
    <label>Rol:</label>
    <select name="rol" required>
        <option value="lider" <?= $empleado['Rol'] == 'lider' ? 'selected' : '' ?>>
            Líder
        </option>
        <option value="colider" <?= $empleado['Rol'] == 'colider' ? 'selected' : '' ?>>
            Colíder
        </option>
        <option value="empleado" <?= $empleado['Rol'] == 'empleado' ? 'selected' : '' ?>>
            Empleado
        </option>
    </select>
    <br><br>
    <button type="submit">Guardar cambios</button>
</form>
<br>
<a href="index.php?slug=PeopleDataBaseController">
    <button type="button">⬅ Volver</button>
</a>
</body>
</html>