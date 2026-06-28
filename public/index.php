<?php

if (str_contains($_SERVER['HTTP_HOST'], 'localhost') || str_contains($_SERVER['HTTP_HOST'], '127.0.0.1')) {
    define('BASE_URL', '/Nevula-main/public');
} else {
    define('BASE_URL', '/public');
}

require_once __DIR__ . "/../assets/tpl_engine/tpl_engine.php";

if (isset($_GET['slug'])) {

    $slug = $_GET['slug'];

    $controllerPath = __DIR__ . "/../app/http/controllers/" . $slug . ".php";
    if (!file_exists($controllerPath)) {
        $controllerPath = __DIR__ . "/../app/http/controllers/NotFoundController.php";
    }

} else {
    $controllerPath = __DIR__ . "/../app/http/controllers/LandingController.php";
}

require_once $controllerPath;
