<?php
require_once __DIR__ . '/../../../database/mysqli/Connect.php';

function registrarFalta($id_empleado, $fecha, $tipo, $descripcion, $archivo)
{
    global $conn;

    $sql = "INSERT INTO Asistencia 
    (ID_EMPLEADO, Fecha, Estado)
    VALUES (?, ?, ?)";

    $estado = "falta_" . $tipo;

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iss", $id_empleado, $fecha, $estado);
    $stmt->execute();
}