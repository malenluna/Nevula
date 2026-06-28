<?php

function LoadTPL($name){
    include __DIR__ . "/../../resources/views/" . $name . ".php";
}

function setVarTPL($var, $value, $tpl){
    return str_replace("[".$var."]", $value, $tpl);
}

function printTPL($tpl){
    //
}