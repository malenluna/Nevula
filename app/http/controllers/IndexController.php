<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: /Nevula/public/index.php?slug=LoginController");
    exit;
}

$rol = $_SESSION['rol'];

if ($rol == "empleado") {

    include "../resources/views/panel/panelEmpleado.php";

} elseif ($rol == "lider") {

    include "../resources/views/panel/panelLider.php";

} elseif ($rol == "colider") {

    include "../resources/views/panel/panelColider.php";

} else {

    header("Location: /Nevula/public/index.php?slug=LoginController");
    exit;
}