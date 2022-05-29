<?php
    include('config.php');
    session_start();
    var_dump($_POST);
    if( isset($_POST)){
        $name_product = $_POST['name_product'];
        $desc_product = $_POST['desc_product'];
        $stock = $_POST['stock'];
        $precio_iva = $_POST['precio_iva'];
        $precio_no_iva = $_POST['precio_no_iva'];
        $categoria = $_POST['categoria'];
       
                    
        header('Location: ../content/cpanel.php?cons=prod');

    }
?>