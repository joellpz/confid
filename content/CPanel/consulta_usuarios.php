<?php
    $file="Control Panel";
    $far="../../";
    include $far.'php/comun/head.php';
     
    $consulta = 'SELECT * FROM usuarios';
    
    $result = mysqli_query($conn, $consulta) or die('Consulta fallida: ' . mysqli_error());
?>

<!DOCTYPE html>
<html>
<head>
    <link rel ="stylesheet" href="/style/style.css"/> 
</head>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <div>    
            <div>    
            <h1>Usuarios</h1>
                <table class="tabla_cp" border= "1">
                    <thead style="color: white">
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
                            echo '<td style=" text-align:center "><a class="btn btn-primary" href="/content/CPanel/mod_usuario.php?id='. $row["idUsuario"]. '&tipo=1">Editar</a>';
                            echo '&nbsp;&nbsp;';
                            echo '<a class="btn btn-primary" href="/php/consultas/del_Cliente.php?id='. $row["idUsuario"].'&tipo=1">Eliminar</a> </td>';
                            echo '</tr>';
                        }
                    ?>    
                </table>
            </div>
        </div>
        <br>
    </body>
</html>