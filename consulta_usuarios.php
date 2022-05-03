<?php
    $file="Control Panel";
    include 'head.php';
     
    $consulta = 'SELECT * FROM usuarios';
    
    $result = mysqli_query($conn, $consulta) or die('Consulta fallida: ' . mysqli_error());
?>

<!DOCTYPE html>
<html>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once 'header.php'; ?>
        <?php
            if(isset($_POST["del"])){
                $id = $_POST['del'];
                $delete = "DELETE FROM clientes WHERE idClientes = $id";
                mysqli_query($conn, $delete);
                echo"<br><h3>Eliminando Cliente ". $id . "...</h3>";
                header("Location:index.php"); //Redirigir a Principal.
            }else{
        ?>
        <div>    
            <div>    
            <h1>Clientes</h1>
                <table border= "1" style="width:100%;margin:auto;">
                    <thead>
                        <tr style="background-color: #646CDF;">
                            <th>ID Usuario</th>
                            <th>Usuario</th>
                            <th>Password</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php
                        while ($row = mysqli_fetch_array($result)) {
                            echo '<tr>';
                            echo '<td>' . $row['idUsuario'] . '</td>';
                            echo '<td>' . $row['usuario'] . '</td>';
                            echo '<td>' . $row['passwd'] . '</td>';
                            echo '<td>' . $row['nombre'] . '</td>';
                            echo '<td>' . $row['email'] . '</td>';
                            echo '<td style=" text-align:center "><a class="btn btn-primary" href="php/consultas/Mod_Clientes.php?id='. $row["idUsuario"]. '">Editar</a>';
                            echo '&nbsp;&nbsp;';
                            echo '<a class="btn btn-primary" href="php/consultas/del_Cliente.php?id='. $row["idUsuario"]. '">Eliminar</a> </td>';
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