<?php
require_once "../models/User.php";
$usuario = trim($_POST['usuario']);
$password = trim($_POST['password']);
$resultado = buscarUsuario($usuario, $password);
session_start();
if ($resultado) {
    $_SESSION['id'] = $resultado['id_usuario'];
    $_SESSION['usuario'] = $resultado['usuario'];
    header("Location: /dashboard");
    exit;
} else {
    header("Location: /login");
    exit;
}
?>
