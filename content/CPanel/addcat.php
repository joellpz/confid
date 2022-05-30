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
        <h2>Introducir Nueva Categoria</h2>
        <form action="/php/newcat.php" method="post" class="m-4" enctype="multipart/formdata">
            <div class="row justify-content-center py-2">
                <div class="col-4">
                    <label for="name_cat" class="form-label">Nombre Categoria*</label>
                    <input type="text" class="form-control" id="name_categoria" name="name_categoria" required>
                </div>
                <div class="container-fluid p-2">
                <div class="row p-2">
                    <div class="col text-center">
                        <input type="submit" class="btn btn-primary p-2" name="add_categoria" value="Introducir Categoría"/>
                        <a href="index.php"><button type="button" class="btn btn-primary p-2">Volver a Inicio</button></a>
                    </div>
                </div>
            </div>
        </form>        
    </body>
</html>