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
        <form action="/php/newprod.php" method="post" class="m-4" enctype="multipart/formdata">
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
                    <input type="number" maxlength="5" class="form-control" id="precio_iva" name="precio_iva" required>
                </div>
                <div class="col-3">
                    <label for="precio_no_iva" class="form-label">Precio I.V.A.*</label>
                    <input type="number" maxlength="5" class="form-control" id="precio_no_iva" name="precio_no_iva" required>
                </div>
            </div>
            <div class="row justify-content-center py-2">
                <div class="col-8">
                    <label for="categoria" class="form-label">Categoria*</label>
                    <select class="form-control" id="categoria" name="categoria">
                        <option value="1">Cámaras</option>
                        <option value="2">Control de Accesos</option>
                        <option value="3">Accesorios RFC</option>
                        <option value="4">Decodificadores</option>
                        <option value="5">Paneles Númericos</option>
                        <option value="6">Soportes y Carcasas</option>
                        <option value="7">Detectores Volumétricos</option>
                    </select>
                </div>
            </div>
            <div class="container-fluid p-2">
                <div class="row p-2">
                    <div class="col text-center">
                        <input type="submit" class="btn btn-primary p-2" name="add_product" value="Introducir Producto"/>
                        <a href="index.php"><button type="button" class="btn btn-primary p-2">Volver a Inicio</button></a>
                    </div>
                </div>
            </div>
        </form>        
    </body>
</html>