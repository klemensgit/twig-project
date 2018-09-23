<?php 

    function getEntryTpl(){
        global $twig;

        $tplEntry = $twig->render('tpl_entry.php', array(
            'name' => 'Test1',

            'navigation' => array(
                array('name' => 'prvi', 'href' => '?page=home'),
                array('name' => 'drugi', 'href' => '?page=content'),
                array('name' => 'tretji')
            )
        ));

        return $tplEntry;
    }


    function getContentTpl(){
        global $twig;

        $tplContent = $twig->render('tpl_content.php', array(
            'name' => 'Test2',   
        ));

        return $tplContent;
    }

    /*
    function getEntryTpl(){
        global $twig;

        $tplContent = $twig->render('tpl_entry.php', array(
            'name' => 'Fabien',   
        ));

        return $tplContent;
    }*/

?>