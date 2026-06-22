<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel</title>

    <link rel="stylesheet" href="/Nevula/resources/css/sidebar.css">
</head>
<body>

<div class="layout">

    <?php include __DIR__ . "/../layouts/sidebarEmpleado.php"; ?>

    <div class="content">

        <h1>Panel de usuario</h1>

        <p>Hola usuario</p>

        <a href="/Nevula/public/index.php?slug=LogoutController">
            Cerrar sesión
        </a>

    </div>

</div>

</body>
</html>