<?php
    $file=basename(__FILE__, '.php');
    $far="../../";
    include $far.'php/comun/head.php';

    $car_stock = $_SESSION['carrito_stock'];

    foreach ($_SESSION['carrito_prod'] as $key => $id_prod){
        echo $id_prod .' -> '. $car_stock[$key].'<br>';
    }
?>
<!--DESPLEGABLE CON LOS TRANSPORTISTAS-->