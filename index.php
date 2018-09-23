<?php

// twig init
require_once 'twig/vendor/autoload.php'; //twig functions

$loader = new Twig_Loader_Filesystem('./');
$twig = new Twig_Environment($loader);

require_once 'function_custom.php';
require_once 'tpl_head.php';

//load template
function loadTemplate($strId){

    if($strId == '' ||  $strId == 'home'){
        echo getEntryTpl();
    }else if($strId == 'content'){
        echo getContentTpl();
        //include 'tpl_entry.php'; 
    }else{
        echo "<h1>ERROR 404</h1>";
    }

}

?>