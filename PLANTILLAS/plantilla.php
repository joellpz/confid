<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        /* $file= "C. Panel"; */ // Panel de Administador SOLO
        $far="";//Distancia para llegar a la general.
        include $far.'php/comun/head.php';//CAMBIAR RUTA SEGUN UBI
    ?>  
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once $far.'content/header.php'; ?>
        <!--body-->
        <?php include_once $far.'php/comun/footer.php'; ?>
    </body>
</html>