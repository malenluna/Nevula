<?php

function LoadTPL($name){
    return file_get_contents("../resources/views/" . $name . ".php");
}

function setVarTPL($var, $value, $tpl){
    return str_replace("[".$var."]", $value, $tpl);
}

function printTPL($tpl){
    echo $tpl;
}