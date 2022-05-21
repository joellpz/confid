<?php
require 'config.php';
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

//if (isset($_POST['login'])) {
    session_start();
    $login = $_POST['login_email'];
    $contra = $_POST['login_pass'];

    //echo "$login, $contra";
    $consulta = "SELECT * FROM usuarios WHERE (email = '$login' OR usuario = '$login') AND passwd = '$contra'";
    $result = mysqli_query($conn, $consulta);    
    $row = mysqli_fetch_array($result);
    /*if ($row = mysqli_fetch_array($result)) {
        $_SESSION['user_id'] = $row['idUsuario'];
        $_SESSION['user_passwd'] = $row['passwd'];
        $_SESSION['user_name'] = $row['nombre'];
        $_SESSION['user_email'] = $row['email'];
        if($_POST['path'] == 'Inicio'){
            header('Location: ../index.php');
        }else{
            header('Location: ../content/'.$_POST['path'].'.php');
        }
    }*/

    if (mysqli_num_rows($result) > 0){
        $_SESSION['user_id'] = $row['idUsuario'];
        $_SESSION['user_passwd'] = $row['passwd'];
        $_SESSION['user_name'] = $row['nombre'];
        $_SESSION['user_email'] = $row['email'];
        if($_POST['path'] == 'Inicio'){
            echo '<script>location.href = "../index.php"</script>';
            //header('Location: ../index.php');
        }else{
            echo '<script>location.href = "../content/'.$_POST['path'].'.php"</script>';
            //header('Location: ../content/'.$_POST['path'].'.php');
        }
    }
    else{
        echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>';
    }
//}
?>
