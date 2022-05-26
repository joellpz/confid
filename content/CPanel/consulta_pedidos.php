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
        <h2>Consulta y Gestión de Pedidos</h2>
        <table border="1" style="width: 80%;">
            <thead>
                <tr style="background-color: #646CDF;">
                    <th>Nº Pedido</th>
                    <th>Precio Total</th>
                    <th>idUsuario</th>
                    <th>Nombre</th>
                    <th>Nº Pedido Externo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $consulta = "SELECT * FROM pedidos, clientes WHERE clientes.idUsuario = pedidos.idUsuario";
                    $res = mysqli_query($conn, $consulta);  
                    
                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idPedido'] . '</td>';
                        echo '<td>' . $row['precioTotal'] . '</td>';
                        echo '<td>' . $row['idUsuario'] . '</td>';
                        echo '<td>' . $row['alias'] . '</td>';
                        echo '<td>' . $row['pedidoExterno'] . '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <br>   
    </body>
</html>