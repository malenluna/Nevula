<?php
require_once "../app/http/models/User.php";

$usuario = trim($_POST['usuario']);
$password = trim($_POST['password']);

$resultado = buscarUsuario($usuario, $password);

session_start();

if ($resultado) {
    $_SESSION['id'] = $resultado['id_usuario'];
    $_SESSION['usuario'] = $resultado['usuario'];
    $_SESSION['rol'] = $resultado['rol'];
    header("Location: ?slug=IndexController");

    exit;
} else {
    header("Location: ?slug=LogOutController");
    exit;
}
?>