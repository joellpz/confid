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
        <h2>Facturación</h2>
        <table class="tabla_cp" border= "1">
            <thead style="color: white">
                <tr style="background-color: #646CDF;">
                    <th>Identificador Usuario</th>
                    <th>Nombre del Cliente</th>
                    <th>CIF</th>
                    <th>Facturación Anual</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $consulta = "SELECT clientes.idUsuario, Alias, CIF, SUM(pedidos.precioPedido) as Total
                    FROM clientes, pedidos, detallespedidos 
                    WHERE clientes.idUsuario like pedidos.idUsuario
                    AND pedidos.idPedido like detallespedidos.idPedido 
                    GROUP BY clientes.idUsuario";

                    $res = mysqli_query($conn, $consulta);
                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idUsuario'] . '</td>';
                        echo '<td>' . $row['Alias'] . '</td>';
                        echo '<td>' . $row['CIF'] . '</td>';
                        echo '<td>' . number_format($row['Total'], 2) . ' €</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <br>   
    </body>
</html>