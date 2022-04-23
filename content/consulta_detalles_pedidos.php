<?php
    session_start();
    require '../php/config.php';
    // Check connection
?>

<!DOCTYPE html>
<html>
    <body>
        <h2>Tabla 'detalles_pedidos'</h2>
        <table border= "1" style="width: 80%;">
            <thead>
                <tr style="background-color:rgb(123, 204, 123);">
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
                    $consulta = "SELECT * FROM detalles_pedidos";
                    $res = mysqli_query($conn, $consulta);

                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idPedido'] . '</td>';
                        echo '<td>' . $row['idProducto'] . '</td>';
                        echo '<td>' . $row['fecha'] . '</td>';
                        echo '<td>' . $row['precioTotal'] . '</td>';
                        echo '<td>' . $row['idTransporte'] . '</td>';
                        echo '<td>' . $row['cantidad'] . '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <br>   
    </body>
</html>