
<?php

require_once __DIR__ . '/../../../database/mysqli/Connect.php';

function obtenerEmpleados() {
    global $conexion;

    $sql = "SELECT * FROM Usuario WHERE Rol != 'lider'";
    $stmt = $conexion->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function obtenerEmpleadoPorId($id) {
    global $conexion;

    $sql = "SELECT * FROM Usuario WHERE ID_USUARIO = :id";
    $stmt = $conexion->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}
function actualizarEmpleado($id, $nombre, $usuario, $rol) {
    global $conexion;

    $sql = "UPDATE Usuario 
            SET Nombre = :nombre,
                Usuario = :usuario,
                Rol = :rol
            WHERE ID_USUARIO = :id";

    $stmt = $conexion->prepare($sql);

    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->bindParam(":nombre", $nombre, PDO::PARAM_STR);
    $stmt->bindParam(":usuario", $usuario, PDO::PARAM_STR);
    $stmt->bindParam(":rol", $rol, PDO::PARAM_STR);

    return $stmt->execute();
}