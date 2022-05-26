<?php
    $file="Control Panel";
    $far="../../";
    include $far.'php/comun/head.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" href="/style/style.css"/> 
    </head>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <h2>Clientes</h2>
        <table border= "2" style="width: 80%;">
            <thead style="color: white">
                <tr style="background-color: #646CDF;">
                    <th>Nº Cliente</th>
                    <th>Login</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Alias</th>
                    <th>CIF</th>
                    <th>Dirección</th>
                    <th>Autonomo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $consulta = "SELECT * FROM clientes,usuarios WHERE clientes.idUsuario = usuarios.idUsuario";
                    $res = mysqli_query($conn, $consulta);

                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idUsuario'] . '</td>';
                        echo '<td>' . $row['usuario'] . '</td>';
                        echo '<td>' . $row['nombre'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>' . $row['alias'] . '</td>';
                        echo '<td>' . $row['CIF'] . '</td>';
                        echo '<td>' . $row['direccion'] . '</td>';
                        if ($row['autonomo'] == 1){
                            echo '<td>Sí</td>';
                        }else{
                            echo '<td>No</td>';
                        }
                        
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <br>   
    </body>
</html>