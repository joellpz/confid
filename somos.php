<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        include 'head.php';
    ?>      
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once 'header.php'; ?>
         
    </body>
</html>