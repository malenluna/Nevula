<?php

session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: /Nevula/public/index.php?slug=LoginController");
    exit;
}


include "../resources/views/panel/index.php";