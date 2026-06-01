<?php

try {
    $config = "mysql:host=srv1659.hstgr.io;dbname=u214138677_nevula";
    $conexion = new PDO($config, "root", "");
}
catch (PDOException $error) {
    print $error->getMessage();
}

?>