<?php
    include('../config.php');
    session_start();
    var_dump($_POST);
    if( isset($_POST)/*isset($_POST['add_worker']) || isset($_POST['add_cliente'])*/){
        $usuario = $_POST['usua'];
        $pass = $_POST['signup_pass'];
        $email = $_POST['signup_email'];
        $name = $_POST['signup_name'];

        $consulta_usuario = "INSERT INTO usuarios VALUES (NULL,'$usuario', '$pass', '$name', '$email')";
        mysqli_query($conn,$consulta_usuario);

        $consulta_id = "SELECT MAX(idUsuario) FROM `usuarios`;";
        $row = mysqli_query($conn,$consulta_id);
        $res_id = mysqli_fetch_array($row);
        $id = $res_id['MAX(idUsuario)'];

        if(isset($_POST['add_worker'])){
            $ss=$_POST['signup_ss'];
            $apel=$_POST['signup_surname'];

            $consulta_trab = "INSERT INTO trabajadores VALUES ('$id', '$ss', '$apel')";
            mysqli_query($conn,$consulta_trab);
        }else{
            if(isset($_POST['signup_auto'])){
                $autonomo = 1;
                $alias = $_POST['signup_alias'];
            }else{
                $autonomo = 0;
                $alias = $_POST['signup_name'];
            }
            $cif = $_POST['signup_cif'];
            $dir = $_POST['signup_dir'];
            
            $consulta_cli = "INSERT INTO clientes VALUES ('$id', '$alias', '$cif', '$dir', '$autonomo')";
            mysqli_query($conn,$consulta_cli);
        }

        header('Location: /index.php');

    }


    if(isset($_POST['enviar'])){
        $usuario = $_POST["usuario"];
        $passwd = $_POST["passwd"];
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];

        $update = "UPDATE usuarios SET usuario='$usuario', passwd='$passwd', nombre = '$nombre', email='$email' WHERE idUsuario = $id";
        mysqli_query($conn, $update) or die('Consulta fallida: ');
    
        header("Location:" .$far."content/cpanel.php?cons=users");  //Redirigir a Principal.
    }
?>