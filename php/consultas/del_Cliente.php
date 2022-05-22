<!DOCTYPE html>
<html>
    <body>
        <?php
            require ("../config.php");
            $id = $_GET['id'];
            echo $id;
            $delete = "DELETE FROM usuarios, tranajadores, clientes WHERE idUsuario = $id";
            mysqli_query($conn, $delete) or die('Consulta fallida: ' . mysqli_connect_error());
            
            header("Location:$far/content/CPanel/consulta_usuarios.php"); //Redirigir a Principal.
        ?>   
        <br>   
    </body>
</html>