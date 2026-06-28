
<?php
$edit = $_SESSION['empleado_editar'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Data Base</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/resources/css/sidebar.css">
</head>
<body>
<?php include __DIR__ . "/../layouts/sidebarLider.php"; ?>
<section class="contenedor-empleados">
  
  <header class="encabezado-tabla">
    <h2>Gestión de Empleados</h2>

    <button type="button" class="btn-agregar">
      + Agregar empleado
    </button>
  </header>

  <table class="tabla-datos">
    
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Rol</th>
        <th>FechaCreacion</th>
        <th>Modificar</th>
      </tr>
    </thead>

    <tbody>

      <?php if (!empty($empleados)) { ?>

        <?php foreach($empleados as $empleado) { ?>
          <tr>
            <td><?= $empleado["Nombre"] ?></td>
            <td><?= $empleado["Usuario"] ?></td>

            <td>********</td>

            <td><?= $empleado["Rol"] ?></td>
            <td><?= $empleado["FechaCreacion"] ?></td>

            <td>
            <form action="<?= BASE_URL ?>/index.php?slug=EditarController" method="post">
                <input type="hidden" name="editar_id" value="<?= $empleado['ID_USUARIO'] ?>">
                <button type="submit">Modificar</button>
            </form>
            </td>
          </tr>
        <?php } ?>

      <?php } else { ?>

        <tr>
          <td colspan="6">No hay empleados registrados</td>
        </tr>

    <?php } ?>

        </tbody>
    </table>
    <?php if (!empty($edit)) { ?>

<h2>Editar Empleado</h2>

<form method="POST" action="index.php?slug=actualizar">

    <input type="hidden" name="id" value="<?= $edit['ID_USUARIO'] ?>">

    <input type="text" name="nombre" value="<?= $edit['Nombre'] ?>">
    <input type="text" name="usuario" value="<?= $edit['Usuario'] ?>">

    <select name="rol">
        <option value="lider" <?= $edit['Rol']=='lider'?'selected':'' ?>>Líder</option>
        <option value="colider" <?= $edit['Rol']=='colider'?'selected':'' ?>>Co-líder</option>
        <option value="empleado" <?= $edit['Rol']=='empleado'?'selected':'' ?>>Empleado</option>
    </select>

    <button type="submit">Guardar</button>
</form>

<hr>

<?php } ?>

</section>

</body>
</html>