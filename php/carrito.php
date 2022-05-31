<?php
    session_start();  
    switch($_POST['m']){
        case 1:
            if($_POST['ident'] != 0){  
                unset($_SESSION['carrito_prod'][$_POST['ident']]);
                unset($_SESSION['carrito_stock'][$_POST['ident']]);
                if (count($_SESSION['carrito_prod']) == 0){
                    unset($_SESSION['carrito_prod']);
                    unset($_SESSION['carrito_stock']);
                }
            }  
            break;          
        case 2:
            $_SESSION['carrito_stock'][$_POST['ident']] = $_POST['stock'];            
            break;
    }    
?>