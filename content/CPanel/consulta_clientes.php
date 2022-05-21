<?php
    $file="Control Panel";
    $far="../../";
    include $far.'php/comun/head.php';
?>

<!DOCTYPE html>
<html>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once $far.'content/header.php'; ?>
        <h2>Clientes</h2>
        <table border= "2" style="width: 80%;">
            <thead>
                <tr style="background-color: #646CDF;">
                    <th>Nº Cliente</th>
                    <th>Nombre</th>
                    <th>CIF</th>
                    <th>Dirección</th>
                    <th>Autonomo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $consulta = "SELECT * FROM clientes";
                    $res = mysqli_query($conn, $consulta);

                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idUsuario'] . '</td>';
                        echo '<td>' . $row['alias'] . '</td>';
                        echo '<td>' . $row['CIF'] . '</td>';
                        echo '<td>' . $row['direccion'] . '</td>';
                        echo '<td>' . $row['autonomo'] . '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <br>   
    </body>
</html>