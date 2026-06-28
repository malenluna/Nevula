<?php

session_start();

require_once __DIR__ . '/../models/Lider.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: index.php?slug=InformarFaltaController");
    exit;
}

$id_empleado = null;

if (isset($_SESSION['id'])) {
    $id_empleado = $_SESSION['id'];
} else {
    header("Location: index.php?slug=LoginController");
    exit;
}

$fecha = null;
if (isset($_POST['fecha_ausencia'])) {
    $fecha = trim($_POST['fecha_ausencia']);
}

$turno = null;
if (isset($_POST['turno_afectado'])) {
    $turno = trim($_POST['turno_afectado']);
}

$tipo = null;
if (isset($_POST['tipo_falta'])) {
    $tipo = trim($_POST['tipo_falta']);
}

$descripcion = null;
if (isset($_POST['descripcion_motivo'])) {
    $descripcion = trim($_POST['descripcion_motivo']);
}

$reemplazo = null;
if (isset($_POST['conseguir_reemplazo'])) {
    $reemplazo = trim($_POST['conseguir_reemplazo']);
}

$certificado = null;

if (isset($_FILES['certificado_medico']) && $_FILES['certificado_medico']['error'] == 0) {
    $certificado = $_FILES['certificado_medico']['name'];
}

if (!$fecha || !$turno || !$tipo) {
    header("Location: index.php?slug=InformarFaltaController");
    exit;
}

if ($fecha < date('Y-m-d')) {
    header("Location: index.php?slug=InformarFaltaController");
    exit;
}

global $conexion;

if (!$conexion) {
    header("Location: index.php?slug=InformarFaltaController");
    exit;
}

$sql = "INSERT INTO InformarFalta
(ID_EMPLEADO, FechaAusencia, TurnoAfectado, TipoFalta, DescripcionMotivo, Certificado, Reemplazo)
VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexion->prepare($sql);

if (!$stmt) {
    header("Location: index.php?slug=InformarFaltaController");
    exit;
}

$stmt->execute([
    $id_empleado,
    $fecha,
    $turno,
    $tipo,
    $descripcion,
    $certificado,
    $reemplazo
]);
$stmt->execute();

header("Location: index.php?slug=InformarFaltaController");
exit;