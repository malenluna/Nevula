<?php

$msg_error = "";

// cargar vista
$tpl = LoadTPL("auth/login_nevula");
$tpl = setVarTPL("MSG_ERROR", $msg_error, $tpl);

printTPL($tpl);