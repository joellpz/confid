<?php
    $file="Control Panel";
    include 'head.php';
?>

<!DOCTYPE html>
<html>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once 'header.php'; ?>
        <h2>Consulta y Gestión de Productos</h2>
        <table border= "1" style="width: 80%;">
            <thead>
                <tr style="background-color: #646CDF;">
                    <th>Referencia</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Almacén</th>
                    <th>P.V.P.(€)</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $consulta = "SELECT idProductos, productos.nombre, descripcion, stock, precio, categorias.nombre
                    FROM productos, categorias
                    WHERE categorias.idCategoria like productos.idCategoria";
                    $res = mysqli_query($conn, $consulta);  
                    
                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idProductos'] . '</td>';
                        echo '<td>' . $row['productos.nombre'] . '</td>';
                        echo '<td>' . $row['descripcion'] . '</td>';
                        echo '<td>' . $row['stock'] . '</td>';
                        echo '<td>' . $row['precio'] . '</td>';
                        echo '<td>' . $row['categorias.nombre'] . '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <br>   
    </body>
</html>