<!DOCTYPE html>
<html>
    <?php
        $file="Control Panel";
        $far="../../";
        include $far.'php/comun/head.php';
    ?>
    <style>
        .tabliqui{
            border: solid 1px;
            margin: auto;
            text-align: center;
            min-width: 35%;
        }
    </style>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
    <?php
            if(isset($_POST['idprod'])){
                $id = $_POST['idprod'];
                $cons_prod = "SELECT * FROM productos WHERE idProductos = $id";
                $result= mysqli_query ($conn, $cons_prod);
                $row=mysqli_fetch_array($result);                                          
            }

            if(isset($_POST['enviar'])){
                $id = $_POST['idProductos'];
                $nombre = $_POST["nombre"];
                $stock = $_POST["stock"];
                $precioIVA = $_POST["precioIVA"];
                $precioNoIVA = $_POST["precioNoIVA"];
                $categoria = $_POST["categoria"];
                $update_prod = "UPDATE productos 
                SET nombre='$nombre', stock='$stock'
                WHERE idProductos = $id";
                mysqli_query($conn, $update_prod) or die('Consulta perico: '. mysqli_error());
            }  
            
            include_once $far.'content/header.php'; ?>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table class="tabliqui">
                <thead style="background-color: #646CDF;">
                    <th colspan="2">Modificar Producto Nº<?php echo $row['idProductos']?></th>
                </thead>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="stock">Stock:</label></td>
                    <td><input type="number" id="stock" name="stock" value="<?php echo $row['stock']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="precioIVA">Precio con I.V.A.:</label></td>
                    <td><input type="number" id="precioIVA" name="precioIVA" value="<?php echo $row['precioIVA']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="precioNoIVA">Precio Sin I.V.A.:</label></td>
                    <td><input type="number" id="precioNoIVA" name="precioNoIVA" value="<?php echo $row['precioNoIVA']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="email">Categoria:</label></td>
                    <td>
                        <select id="categoria" name="categoria">
                            <option value="1">Cámaras</option>
                            <option value="2">Control de Accesos</option>
                            <option value="3">Accesorios RFC</option>
                            <option value="4">Decodificadores</option>
                            <option value="5">Paneles Númericos</option>
                            <option value="6">Soportes y Carcasas</option>
                            <option value="7">Detectores Volumétricos</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                     <input id="idProductos" name="idProductos" type="hidden" value="<?php echo $row['idProductos']?>">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 20px;" colspan="2">
                        <input type="submit" class="m-3 btn btn-primary" name="enviar" value="Modificar"/>
                    </td>
                </tr>
            </table>
        </form> 
    </body>
</html>