<?php
    $file="Control Panel";
    $far="../../";
    include $far.'php/comun/head.php';
?>

<!DOCTYPE html>
<html>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once $far.'content/header.php'; ?>
        <h2>Consulta y Gestión de Productos</h2>
        <table border= "1" style="width: 80%;">
            <thead>
                <tr style="background-color: #646CDF;">
                    <th>Referencia</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Unidades en Almacén</th>
                    <th>P.V.P.(€ + IVA)</th>
                    <th>P.V.P.(€)</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $consulta = "SELECT idProductos, productos.nombre, descripcion, stock, precioIVA, precioNoIVA, categorias.nombre
                    FROM productos, categorias
                    WHERE categorias.idCategoria like productos.idCategoria";
                    $res = mysqli_query($conn, $consulta);  
                    
                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idProductos'] . '</td>';
                        echo '<td>' . $row['nombre'] . '</td>';
                        echo '<td>' . $row['descripcion'] . '</td>';
                        echo '<td>' . $row['stock'] . '</td>';
                        echo '<td>' . $row['precioIVA'] . '</td>';
                        echo '<td>' . $row['precioNoIVA'] . '</td>';
                        echo '<td>' . $row[6] . '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <br>   
    </body>
</html>