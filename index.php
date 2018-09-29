<?php

// twig init
require_once 'twig/vendor/autoload.php'; //twig functions

$loader = new Twig_Loader_Filesystem('./');
$twig = new Twig_Environment($loader);

require_once 'function_custom.php';
require_once 'tpl_head.php';


$_TEPLATESPATH = 'templates/';

//load template
function loadTemplate($strId){

    if($strId == '/' ||  $strId == 'home'){
        include 'tpl_entry.php';
    }else if($strId == 'content'){
        include 'tpl_content.php'; 
    }else{
        echo "<h1>ERROR 404</h1>";
    }

}

?>