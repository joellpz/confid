<?php
    if(isset($_POST['enviar'])){
        $usuario = $_POST["usuario"];
        $passwd = $_POST["passwd"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];

        $update = "UPDATE usuarios SET usuario='$usuario', passwd='$passwd', nombre = '$nombre', email='$email' WHERE idUsuario = $id";
        mysqli_query($conn, $update) or die('Consulta fallida: ');
    
        header("Location:" .$far."content/cpanel.php?cons=users");
        
    }elseif (isset($_POST['usuario'])){
        $usuario = $_POST["usuario"];
        $passwd = $_POST["passwd"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];     
        if(isset($_POST['auto'])){
            $autonomo = 1;
            $alias = $_POST['alias'];
        }else{
            $autonomo = 0;
            $alias = $_POST['nombre'];
        }
        $cif = $_POST['cif'];
        $dir = $_POST['dir'];
        var_dump($_POST);
        $update_users = "UPDATE usuarios SET usuario='$usuario', passwd='$passwd', nombre = '$nombre', email='$email' WHERE idUsuario = $id";
        $update_cli = "UPDATE clientes SET alias='$alias', CIF='$cif', direccion = '$dir', autonomo='$autonomo' WHERE idUsuario = $id";
        mysqli_query($conn, $update_users) or die('Consulta fallida: ');
        mysqli_query($conn, $update_cli) or die('Consulta fallida: ');
    
        header("refresh:0;url=". $_SERVER['PHP_SELF']);

    }   
?>