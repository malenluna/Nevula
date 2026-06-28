<?php
session_start();

require_once __DIR__ . '/../models/Lider.php';

$empleados = obtenerEmpleados();
include __DIR__ . '/../../../resources/views/liderViews/PeopleDataBase.php';