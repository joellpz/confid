<?php
    include('config.php');
    session_start();
    var_dump($_POST);
    if( isset($_POST)){
        $name_categoria = $_POST['name_categoria'];
        
        $consulta_categoria = "INSERT INTO categorias VALUES (NULL,'$name_categoria')";
        mysqli_query($conn,$consulta_categoria);
        
        header('Location: ../content/cpanel.php?cons=prod');

    }
?>