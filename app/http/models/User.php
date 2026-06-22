<?php
require_once __DIR__ . "../../../database/mysqli/Connect.php";
 
function buscarUsuario($usuario, $contrasena)
{
    global $conexion;
    $consulta = $conexion->prepare("SELECT * FROM Usuario WHERE Usuario = :usuario AND Contrasena = :contrasena"
    );
    $consulta->bindValue(':usuario', $usuario);
    $consulta->bindValue(':contrasena', $contrasena);
    $consulta->execute();
    return $consulta->fetch(PDO::FETCH_ASSOC);
}
?>
