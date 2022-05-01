<!DOCTYPE html>
<html>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once 'header.php'; ?>
        <?php
            if(isset($_POST["del"])){
                $id = $_POST['del'];
                $delete = "DELETE FROM clientes WHERE idClientes = $id";
                mysqli_query($conn, $delete) or die('Consulta fallida: ' . mysqli_error());
                echo"<br><h3>Eliminando Cliente ". $id . "...</h3>";
                header("Location:../principal.php"); //Redirigir a Principal.
            }else{
        ?>
        <div>    
            <div style="border-color:red; margin:auto; width:80%">    
            <h1>Clientes</h1>
                <table border= "1" style="width:100%;margin:auto;">
                    <thead>
                        <tr style="background-color: rgba(0, 68, 255, 0.397) ">
                            <th>Editar</th>
                            <th>ID Usuario</th>
                            <th>Usuario</th>
                            <th>Password</th>
                            <th>Nombre</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    
                    <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tr>';
                            echo '<td style=" text-align:center "><a href="/wamp%20bbdd/edit_modificar/Mod_Clientes.php?id='. $row["idClientes"]. '">Editar</a>';
                            echo '&nbsp;&nbsp;';
                            echo '<a href="/wamp%20bbdd/edit_eliminar/del_Cliente.php?id='. $row["idClientes"]. '">Eliminar</a> </td>';
                            echo '<td>' . $row['idUsuario'] . '</td>';
                            echo '<td>' . $row['usuario'] . '</td>';
                            echo '<td>' . $row['passwd'] . '</td>';
                            echo '<td>' . $row['nombre'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '</tr>';
                        }
                    ?>    
                </table>
            </div>
        </div>
        <br>
        <?php
                }
        ?>    
    </body>
</html>