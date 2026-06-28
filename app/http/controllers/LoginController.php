<?php
session_start();
require_once __DIR__ . "/../models/User.php";

$usuario = trim($_POST['usuario']);
$password = trim($_POST['password']);

$resultado = buscarUsuario($usuario, $password);

if ($resultado) {
    $_SESSION['id'] = $resultado['ID_USUARIO'];
    $_SESSION['usuario'] = $resultado['Usuario'];
    $_SESSION['rol'] = $resultado['Rol'];
    header("Location: " . BASE_URL . "/index.php?slug=IndexController");

    exit;
} else {
    header("Location: " . BASE_URL . "/index.php?slug=AuthController");
    exit;
}
?>