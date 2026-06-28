<?php

require_once __DIR__ . '/../models/Lider.php';

$id = $_POST['id'] ?? null;
$nombre = $_POST['nombre'] ?? null;
$usuario = $_POST['usuario'] ?? null;
$rol = $_POST['rol'] ?? null;

if (!$id || !$nombre || !$usuario || !$rol) {
    die("Faltan datos para actualizar");
}

actualizarEmpleado($id, $nombre, $usuario, $rol);

header("Location: index.php?slug=PeopleDataBaseController");
exit;