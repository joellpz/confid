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
        <h2>Añadir Usuario</h2>
        <form action="/php/signup.php" method="post" class="m-4">
            <div class="row justify-content-center py-2">
                <div class="col-4">
                    <label for="signup_user" class="form-label">Nombre Producto*</label>
                    <input type="number" maxlength="5" class="form-control" id="name_product" name="signup_user" required>
                </div>
                <div class="col-4">
                    <label for="signup_ss" class="form-label">Descripción*</label>
                    <input type="text" class="form-control" id="signup_ss" name="desc_product" required>
                </div>
            </div>    
            <div class="row justify-content-center py-2">
                <div class="col-4">
                    <label for="signup_name" class="form-label">Stock*</label>
                    <input type="text" class="form-control" id="signup_name" name="stock" required>
                </div>
                <div class="col-4">
                    <label for="signup_surname" class="form-label">Precio I.V.A.*</label>
                    <input type="text" class="form-control" id="signup_surname" name="precio_iva" required>
                </div>
            </div>
            <div class="row justify-content-center py-2">
                <div class="col-8">
                    <label for="signup_email" class="form-label">Categoria*</label>
                    <input type="email" class="form-control" id="signup_email" name="precio_no_iva" aria-describedby="emailHelp" required>
                </div>
            </div>
            <div class="container-fluid p-2">
                <div class="row p-2">
                    <div class="col text-center">
                        <input type="submit" class="btn btn-primary p-2" name="add_worker" value="Introducir Producto"/>
                        <a href="index.php"><button type="button" class="btn btn-primary p-2">Volver a Inicio</button></a>
                    </div>
                </div>
            </div>
        </form>        
    </body>
</html>