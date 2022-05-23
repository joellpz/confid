<?php
    include('config.php');
    session_start();
    var_dump($_POST);
    if( isset($_POST)/*isset($_POST['add_worker']) || isset($_POST['add_cliente'])*/){
        $usuario = $_POST['signup_user'];
        $pass = md5($_POST['signup_pass']);
        if(isset($_POST['add_worker'])){
            $email = $_POST['signup_email'];
        }else{
            $email = $_POST['signup_user'];
        }
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
?>