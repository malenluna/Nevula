<?php

try {

    $config = "mysql:host=srv1659.hstgr.io;dbname=u214138677_nevula;charset=utf8";
    $conexion = new PDO(
        $config,
        "u214138677_nevula",
        "YajuLuna26"
    );
} catch (PDOException $error) {
    print $error->getMessage();
}
