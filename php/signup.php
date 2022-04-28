<?php
    include('config.php');
    session_start();

    if(isset($_POST['add_worker']) || isset($_POST['add_cliente'])){
        $usuario = $_POST['singup_name'];
        $pass = $_POST['singup_pass'];
        $email = $_POST['singup_email'];
        $name = $_POST['singup_name'];

        $consulta_usuario = "INSERT INTO `usuarios` (`idUsuario`, `usuario`, `passwd`, `nombre`, `email`) VALUES (NULL, $user, $pass, $name, $email);";
        mysqli_query($conn,$consulta_usuario);

        $consulta_id = "SELECT MAX(idUsuario) FROM `usuarios`;"
        $id = mysqli_query($conn,$consulta_id);

        if(isset($_POST['add_worker'])){
            $consulta_trab = "INSERT INTO trabajadores ($id, $_POST['singup_ss'], $_POST['singup_surname'])";
            mysqli_query($conn,$consulta_trab);
        }else{
            $consulta_cli = "INSERT INTO clientes ($id, $_POST['singup_alias'], $_POST['singup_cif']), $_POST['singup_dir'] , $_POST['singup_auto'])";
            mysqli_query($conn,$consulta_cli);
        }

    }
?>