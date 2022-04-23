<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        include 'head.php'; //CAMBIAR RUTA SEGUN UBI
    ?>  
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>
        <?php include_once 'header.php'; ?> <!-- CAMBIAR RUTA SEGUN UBI Insertar headers segun login -->
    </body>
</html>