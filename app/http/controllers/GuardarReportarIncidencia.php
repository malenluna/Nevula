<?php

session_start();

require_once __DIR__ . '/../models/Lider.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php?slug=ReportarIncidenciaController");
    exit;
}

$id_empleado = null;

if (isset($_SESSION['id'])) {
    $id_empleado = $_SESSION['id'];
} else {
    header("Location: index.php?slug=LoginController");
    exit;
}

$tipo = null;
if (isset($_POST['tipo_incidencia'])) {
    $tipo = trim($_POST['tipo_incidencia']);
}

$fecha = null;
if (isset($_POST['fecha_hora_incidente'])) {
    $fecha = trim($_POST['fecha_hora_incidente']);
}

$turno = null;
if (isset($_POST['turno_curso'])) {
    $turno = trim($_POST['turno_curso']);
}

$severidad = null;
if (isset($_POST['severidad'])) {
    $severidad = trim($_POST['severidad']);
}

$descripcion = null;
if (isset($_POST['descripcion_detallada'])) {
    $descripcion = trim($_POST['descripcion_detallada']);
}

$evidencia = null;

if (isset($_FILES['evidencia']) && $_FILES['evidencia']['error'] == 0) {
    $evidencia = $_FILES['evidencia']['name'];
}

if (!$tipo || !$fecha || !$turno || !$severidad || !$descripcion) {
    header("Location: index.php?slug=ReportarIncidenciaController");
    exit;
}

global $conexion;

if (!$conexion) {
    header("Location: index.php?slug=ReportarIncidenciaController");
    exit;
}

$estado = "Pendiente";

$sql = "INSERT INTO Incidencias
(ID_EMPLEADO, Tipo, Fecha, TurnoCurso, Severidad, Descripcion, Evidencia, Estado)
VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

if (!$stmt) {
    header("Location: index.php?slug=ReportarIncidenciaController");
    exit;
}

$stmt->execute([
    $id_empleado,
    $tipo,
    $fecha,
    $turno,
    $severidad,
    $descripcion,
    $evidencia,
    $estado
]);

header("Location: index.php?slug=ReportarIncidenciaController");
exit;