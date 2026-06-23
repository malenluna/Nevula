<?php

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
