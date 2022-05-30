<?php
    $file="Control Panel";
    $far="../../";
    include $far.'php/comun/head.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" href="/style/style.css"/> 
        <style>
            a, a:hover{
                text-decoration:none;
                color: black;
            }
        </style>
    </head>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <h2 class="col-6">Consulta y Gestión de Productos</h2>
        <div class="row m-auto">
            <a class="col-2 justify-content-end btn btn-primary px-5 py-2 m-1" href="/content/CPanel/addproduct.php" role="button" style="font-weight:bold;">Añadir Producto</a> 
            <form method="post" action="/content/CPanel/mod_prod.php" class="col d-flex">
                <input class="col justify-content-end btn btn-primary py-2 m-1" type="submit" value="Modificar Producto" style="font-weight:bold;"></input>
                <select id="idprod" name="idprod" class="form-control col">
                    <?php 
                        $qprod = "SELECT * FROM productos";
                        $resprod = mysqli_query($conn, $qprod);            
            
                        while ($row2 = mysqli_fetch_array($resprod)) { 
                            echo "<option value='".$row2['idProductos']."'>".$row2['idProductos'].". ".$row2['nombre']."</option>"; 
                        }
                    ?>
                </select>
            </form>

            <a class="col-2 justify-content-end btn btn-primary px-5 py-2 m-1" href="/content/CPanel/addcat.php" role="button" style="font-weight:bold;">Añadir Categoria</a> 
            <form method="post" action="/content/CPanel/mod_cat.php" class="col d-flex">
                <input class="col justify-content-end btn btn-primary py-2 m-1" type="submit" value="Modificar Categoria" style="font-weight:bold;"></input>
                <select id="idCategoria" name="idCategoria" class="form-control col">
                    <?php 
                        $qcat = "SELECT * FROM categorias";
                        $rescat = mysqli_query($conn, $qcat);            
            
                        while ($row2 = mysqli_fetch_array($rescat)) { 
                            echo "<option value='".$row2['idCategoria']."'>".$row2['nombre']."</option>"; 
                        }
                    ?>
                </select>
            </form>
        </div>
        <table class="tabla_cp" border= "1">
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
                    $consulta = "SELECT idProductos, productos.nombre as nombre_prod, descripcion, stock, precioIVA, precioNoIVA, categorias.nombre
                    FROM productos, categorias
                    WHERE categorias.idCategoria like productos.idCategoria";
                    $res = mysqli_query($conn, $consulta);  
                    
                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idProductos'] . '</td>';
                        echo '<td>' . $row['nombre_prod'] . '</td>';
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