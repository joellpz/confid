<?php
    $file="Control Panel";
    include '../../head.php';
?>
<!DOCTYPE html>
<html>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>
        <?php include_once '../../header.php';?>
        <?php
            require ("../config.php");
            $id = $_GET['id'];
            $consulta = "SELECT * FROM usuarios WHERE idUsuario = $id";
            $result= mysqli_query ($conn, $consulta);
            $row=mysqli_fetch_array($result);
            
            if(isset($_POST['enviar'])){
                $usuario = $_POST["usuario"];
                $passwd = $_POST["passwd"];
                $nombre = $_POST["nombre"];
                $email = $_POST["email"];

                $update = "UPDATE usuarios SET usuario='$usuario', passwd='$passwd', nombre = '$nombre', email='$email' WHERE idUsuario = $id";
                mysqli_query($conn, $update) or die('Consulta fallida: ');
            
                header("Location:../../consulta_usuarios.php");  //Redirigir a Principal.
            }else{
        ?>
        <form method="post" action="<?php $_SERVER['PHP_SELF']?>">
            <table border= "1" style="width:100%;margin:auto;">
                <thead style="background-color: #646CDF;">
                    <th colspan="2">Modificar usuario Nº<?php echo $row['idUsuario']?></th>
                </thead>
                <tr>
                    <td><label for="usuario">Usuario:</label></td>
                    <td><input type="text" id="usuario" name="usuario" value="<?php echo $row['usuario']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="passwd">Contraseña:</label></td>
                    <td><input type="text" id="passwd" name="passwd" value="<?php echo $row['passwd']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="email">Correo Electronico:</label></td>
                    <td><input type="email" id="email" name="email" value="<?php echo $row['email']?>" required/></td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 20px;" colspan="2">
                        <input type="submit" name="enviar" value="Modificar"/>
                    </td>
                </tr>
            </table>
        </form>
        <?php
            }               
        ?>   
        <br>   
    </body>
</html>