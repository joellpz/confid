<!DOCTYPE html>
<html>
    <body>
        <?php
            require ("../config.php");
            $id = $_GET['id'];
            $delete = "DELETE * FROM usuarios WHERE idUsuario = $id";
            mysqli_query($conn, $delete) or die('Consulta fallida: ');
            
            header("Location:$far/content/CPanel/consulta_usuarios.php"); //Redirigir a Principal.

            
        ?>   
        <br>   
    </body>
</html>