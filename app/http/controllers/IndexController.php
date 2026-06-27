<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: /public/index.php?slug=AuthController");
    exit;
}

$rol = $_SESSION['rol'];

if ($rol == "empleado") {

    include __DIR__ . "/../../resources/views/panel/panelEmpleado.php";

} elseif ($rol == "lider") {

    include __DIR__ . "/../../resources/views/panel/panelLider.php";

} elseif ($rol == "colider") {

    include __DIR__ . "/../../resources/views/panel/panelColider.php";

} else {

    header("Location: /public/index.php?slug=AuthController");
    exit;
}
