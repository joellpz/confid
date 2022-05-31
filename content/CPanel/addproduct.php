<!DOCTYPE html>
<html>
    <?php
        $file="Control Panel";
        $far="../../";
        include $far.'php/comun/head.php';
    ?>
    <style>
        
    </style>
    <head>
        <link rel ="stylesheet" href="/style/style.css"/> 
    </head>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
    <?php include_once $far.'content/header.php';?>
        <h2>Introducir Nuevo Producto</h2>
        <form action="/php/newprod.php" method="post" class="m-4" enctype="multipart/form-data">
            <div class="row justify-content-center py-2">
                <div class="col-4">
                    <label for="name_product" class="form-label">Nombre Producto*</label>
                    <input type="text" class="form-control" id="name_product" name="name_product" required>
                </div>
                <div class="col-4">
                    <label for="desc_product" class="form-label">Descripción*</label>
                    <input type="text" class="form-control" id="desc_product" name="desc_product" required>
                </div>
            </div>    
            <div class="row justify-content-center py-2">
                <div class="col-3">
                    <label for="stock" class="form-label">Stock*</label>
                    <input type="number" maxlength="3" class="form-control" id="stock" name="stock" required>
                </div>
                <div class="col-3">
                    <label for="precio_iva" class="form-label">Precio I.V.A.*</label>
                    <input type="number" step="any" maxlength="5" class="form-control" id="precio_iva" name="precio_iva" required>
                </div>
                <div class="col-3">
                    <label for="precio_no_iva" class="form-label">Precio Sin I.V.A.*</label>
                    <input type="number" step="any" maxlength="5" class="form-control" id="precio_no_iva" name="precio_no_iva" required>
                </div>
            </div>
            <div class="row justify-content-center py-2">
                <div class="col-8">
                    <label for="categoria" class="form-label">Categoria*</label>
                    <select id="categoria" name="categoria" class="form-control col-1">
                        <?php 
                            $qcat = "SELECT * FROM categorias";
                            $rescat = mysqli_query($conn, $qcat);
                
                            while ($row2 = mysqli_fetch_array($rescat)) { 
                                echo "<option value='".$row2['idCategoria']."'>".$row2['nombre']."</option>"; 
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div>
                <label class="m-3" for="imagen">Imagen:</label> <input type="file" id="imagen" accept="image/png" name="imagen" size="30" required>
            </div>
            <div class="container-fluid p-2">
                <div class="row p-2">
                    <div class="col text-center">
                        <input type="submit" class="btn btn-primary p-2" name="add_product" value="Introducir Producto"/>
                        <a href="/index.php"><button type="button" class="btn btn-primary p-2">Volver a Inicio</button></a>
                    </div>
                </div>
            </div>
        </form>      
    </body>
</html>