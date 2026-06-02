<?php
require_once "../database/mysqli/Connect.php";
function buscarUsuario($usuario, $contraseña)
{
    global $conexion;
    $consulta = $conexion->prepare("SELECT * FROM usuarios WHERE usuario = :usuario AND contraseña = :contraseña"
    );
    $consulta->bindValue(':usuario', $usuario);
    $consulta->bindValue(':contraseña', $contraseña);
    $consulta->execute();
    return $consulta->fetch(PDO::FETCH_ASSOC);
}
?>