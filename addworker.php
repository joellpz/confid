<style>
    input[type=number]::-webkit-inner-spin-button, 
    input[type=number]::-webkit-outer-spin-button { 
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0; 
}
</style>
<!DOCTYPE html>
<?php
    $file="Control Panel";
    include 'head.php';
?>
<html>
    
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once 'header.php'; ?>
        <h2>Añadir Usuario</h2>
        <form action="php/singup.php" method="post" class="m-4">
            <div class="row justify-content-center py-2">
                <div class="col-4">
                    <label for="singup_user" class="form-label">Nº Empleado*</label>
                    <input type="number" maxlength="5" class="form-control" id="singup_num" name="singup_num" required>
                </div>
                <div class="col-4">
                    <label for="singup_ss" class="form-label">Nº Seguridad Social*</label>
                    <input type="text" class="form-control" id="singup_ss" name="singup_ss" required>
                </div>
            </div>    
            <div class="row justify-content-center py-2">
                <div class="col-4">
                    <label for="singup_name" class="form-label">Nombre*</label>
                    <input type="text" class="form-control" id="singup_name" name="singup_name" required>
                </div>
                <div class="col-4">
                    <label for="singup_surname" class="form-label">Apellido*</label>
                    <input type="text" class="form-control" id="singup_surname" name="singup_surname" required>
                </div>
            </div>
            <div class="row justify-content-center py-2">
                <div class="col-8">
                    <label for="singup_email" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="singup_email" name="singup_email" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">No compartiremos tu email con nadie más.</div>
                </div>
            </div>
            <div class="row justify-content-center py-2">
                <div class="col-4">
                    <label for="singup_pass" class="form-label">Contraseña*</label>
                    <input type="text" class="form-control" id="singup_pass" name="singup_pass" required>
                </div>
            </div>  
            <div class="container-fluid p-2">
                <div class="row p-2">
                    <div class="col text-center">
                        <input type="submit" class="btn btn-primary p-2" name="add_worker" value="Regístrate"/>
                        <a href="index.php"><button type="button" class="btn btn-primary p-2">Volver a Inicio</button></a>
                    </div>
                </div>
            </div>
        </form>        
    </body>
</html>