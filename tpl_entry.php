    <?php 

        global $twig;
        $tplEntry = $twig->render('templates/tpl_entry.twig');
        echo  $tplEntry;

        echo getProducts(); 
    
    ?>

    </body>
</html>

