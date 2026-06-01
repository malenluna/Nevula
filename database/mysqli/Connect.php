<?php

try {
    $config = "mysql:host=localhost;dbname=nevula";
    $conexion = new PDO($config, "root", "");
}
catch (PDOException $error) {
    print $error->getMessage();
}

?>