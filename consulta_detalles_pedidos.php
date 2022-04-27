<?php
    $file="Control Panel";
    include 'head.php';
?>

<!DOCTYPE html>
<html>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once 'header.php'; ?>
        <h2>Facturación</h2>
        <table border= "1" style="width: 80%;">
            <thead>
                <tr style="background-color: #646CDF;">
                    <th>ID Pedido</th>
                    <th>ID Producto</th>
                    <th>Fecha</th>
                    <th>Precio Total</th>
                    <th>Transportista</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $consulta = "SELECT idUsuario, Alias, CIF, precioTotal FROM clientes, pedidos, detallespedidos
                    WHERE clientes.idUsuario like pedidos.idUsuario AND pedidos.idPedidos like detallespedidos.idPedido
                    GROUP BY idUsuario";
                    $res = mysqli_query($conn, $consulta);    

                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idUsuario'] . '</td>';
                        echo '<td>' . $row['Alias'] . '</td>';
                        echo '<td>' . $row['CIF'] . '</td>';
                        echo '<td>' . $row['precioTotal'] . '</td>';
                        echo '</tr>';


                    /*$consulta = "SELECT * FROM detallespedidos";
                    $res = mysqli_query($conn, $consulta);

                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idPedido'] . '</td>';
                        echo '<td>' . $row['idProducto'] . '</td>';
                        echo '<td>' . $row['fecha'] . '</td>';
                        echo '<td>' . $row['precioTotal'] . '</td>';
                        echo '<td>' . $row['idTransporte'] . '</td>';
                        echo '<td>' . $row['cantidad'] . '</td>';
                        echo '</tr>';*/
                    }
                ?>
            </tbody>
        </table>
        <br>   
    </body>
</html>