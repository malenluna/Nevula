<?php
    require "../assets/tpl_engine/tpl_engine.php";
    if(isset($_GET['slug'])){
        $slug = $_GET['slug'];
        if(!file_exists("../app/http/controllers/".$slug.".php")){
            $slug = "NotFoundController";
        }
    }else{
        $slug = "LandingController";
    }
    require_once "../app/http/controllers/".$slug.".php";
 
?>