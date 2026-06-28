<?php

try {

    $config = "mysql:host=srv1659.hstgr.io;dbname=u214138677_nevula;charset=utf8";
    $conexion = new PDO(
        $config,
        "u214138677_nevula",
        "YajuLuna26"
    );
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $error) {
    print $error->getMessage();
}
