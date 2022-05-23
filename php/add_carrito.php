<?php 
if (isset($_POST)) {
    session_start();
    $_SESSION['carrito_prod'][$_POST['ident']] = $_POST['ident'];

    if(isset($_SESSION['carrito_stock'][$_POST['ident']])){
        $_SESSION['carrito_stock'][$_POST['ident']]++;
    }else{
        $_SESSION['carrito_stock'][$_POST['ident']] = 1;
    }    
}