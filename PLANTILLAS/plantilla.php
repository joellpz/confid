<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        /* $file= "C. Panel"; */ // Panel de Administador SOLO
        include 'head.php'; //CAMBIAR RUTA SEGUN UBI
    ?>  
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once 'header.php'; ?> <!-- CAMBIAR RUTA SEGUN UBI Insertar headers segun login -->
        <!--body-->
        <?php include_once 'footer.php'; ?>
    </body>
</html>