<?php
    $file="";
    $far="../../";//Distancia para llegar a la general.
    include $far.'php/comun/head.php';
    
    if($trabajador){
        $id = $_GET['id'];
    }else{
        $id = $_SESSION['user_id'];
    }

    if(isset($_POST['enviar'])){
        echo "Admin";
        $usuario = $_POST["usuario"];
        $passwd = md5($_POST["passwd"]);
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        var_dump($_POST);
        $update = "UPDATE usuarios SET usuario='$usuario', passwd='$passwd', nombre = '$nombre', email='$email' WHERE idUsuario = $id";
        mysqli_query($conn, $update) or die('Consulta fallida: ');

    }else if (isset($_POST['cuenta'])){
        echo "TEST";
        $usuario = $_POST["usuario"];
        $passwd = md5($_POST["passwd"]);
        $nombre = $_POST["nombre"];
        $email = $_POST["usuario"];
        var_dump($_POST);
        if(isset($_POST['auto'])){
            $autonomo = 1;
            $alias = $_POST['alias'];
        }else{
            $autonomo = 0;
            $alias = $_POST['nombre'];
        }
        $cif = $_POST['cif'];
        $dir = $_POST['dir'];
        $update_users = "UPDATE usuarios SET usuario='$usuario', passwd='$passwd', nombre = '$nombre', email='$email' WHERE idUsuario = $id";
        $update_cli = "UPDATE clientes SET alias='$alias', CIF='$cif', direccion = '$dir', autonomo='$autonomo' WHERE idUsuario = $id";
        mysqli_query($conn, $update_users) or die('Consulta fallida: ');
        mysqli_query($conn, $update_cli) or die('Consulta fallida: ');
    }

    if($trabajador){
        header('Location: ../../content/cpanel.php?cons=users');
    }else{
        header('Location: ../../content/user/mod_account.php');
    }
?>