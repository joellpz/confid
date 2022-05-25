<?php 
if (isset($_POST)) {
    session_start();
    $id = $_POST['ident'];
    $cantidad = $_POST['stock'];

    $_SESSION['carrito_prod'][$id] = $id;
    $_SESSION['carrito_stock'][$id] += $cantidad;
}

?>