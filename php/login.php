<?php
require 'config.php';
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
} else {
    echo 'Conectado Correctamente a la BBDD <hr>';
}

if (isset($_POST['login'])) {
    session_start();
    $email = $_POST['login_email'];
    $contra = $_POST['login_pass'];

    echo "$email, $contra";
    $consulta = "SELECT * FROM usuarios WHERE email = '$email' AND passwd = '$contra'";
    $result = mysqli_query($conn, $consulta);

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['user_id'] = $row['idUsuarios'];
        $_SESSION['user_passwd'] = $row['passwd'];
        $_SESSION['user_name'] = $row['nombre'];
        $_SESSION['user_email'] = $row['email'];
        header('Location: ../index.php');
    }
    
    
}
?>
