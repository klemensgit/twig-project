<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Home</title>
</head>
<body>
    <?php 
        include 'tpl_header.php';
        
        //get page for load correct template
        if(isset($_GET['page'])){
            loadTemplate($_GET['page']);
        }else{
            loadTemplate('/'); 
        }
    ?>