<?php
    
    $file="inicio";
    include 'head.php';
  
    
    require 'php/config.php';
    // Check connection
?>

<!DOCTYPE html>
<html>
    <body>
        <?php include_once 'header.php'; ?>
        <h2>Tabla 'pedidos'</h2>
        <table border= "1" style="width: 80%;">
            <thead>
                <tr style="background-color:rgb(123, 204, 123);">
                    <th>Nº Pedido</th>
                    <th>Precio Total</th>
                    <th>idUsuario</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $consulta = "SELECT * FROM pedidos";
                    $res = mysqli_query($conn, $consulta);  
                    
                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idPedidos'] . '</td>';
                        echo '<td>' . $row['precioTotal'] . '</td>';
                        echo '<td>' . $row['idUsuario'] . '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <br>   
    </body>
</html>