<?php
    require 'php/config.php';
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
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
                    <th>Cantidad</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $consulta = "SELECT * FROM detalles_pedidos";
                    $res = mysqli_query($conn, $consulta);

                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['ID_PEDIDO'] . '</td>';
                        echo '<td>' . $row['ID_PRODUCTO'] . '</td>';
                        echo '<td>' . $row['cantidad'] . '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <br>   
    </body>
</html>