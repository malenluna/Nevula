<?php

require_once __DIR__ . '/../models/Lider.php';
$id = null;
if (isset($_POST['editar_id']) && !empty($_POST['editar_id'])) {
    $id = $_POST['editar_id'];
} elseif (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
}
if (!$id) {
    die("No llego el ID del empleado a editar.");
}
$empleado = obtenerEmpleadoPorId($id);
if (!$empleado) {
    die("No se encontro el empleado con ID" );
}
$rolesDisponibles = ['lider', 'colider', 'empleado'];
include __DIR__ . '/../../../resources/views/liderViews/ModificarEmpleado.php';