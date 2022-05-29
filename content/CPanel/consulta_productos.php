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
        <div class="row mb-2">
            <h2 class="col-6">Consulta y Gestión de Productos</h2>
            <a class="col-2 justify-content-end btn btn-primary px-5 py-2 " href="/content/CPanel/addproduct.php" role="button" style="font-weight:bold;">Añadir</a> 
            <form method="post" action="/content/CPanel/mod_prod.php">
                <input class="col-2 justify-content-end btn btn-primary px-5 py-2 mx-1 " type="submit" value="Modificar" style="font-weight:bold;"></input>
                <input type="number" id="idprod" name="idprod"></input>
            </form>
        </div>
        <table border= "1" style="width: 80%;">
            <thead style="color: white">
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
                <div class="row-6">
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
                </div>               
            </tbody>
        </table>
        <br>   
    </body>
</html>