<!DOCTYPE html>
<html>
    <?php
        $file="Control Panel";
        include 'head.php';
    ?>
    <style>
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0; 
        }
    </style>

    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once 'header.php'; ?>
        <h2>Añadir Usuario</h2>
        <form action="php/signup.php" method="post" class="m-4">
            <div class="row justify-content-center py-2">
                <div class="col-4">
                    <label for="signup_user" class="form-label">Nº Empleado*</label>
                    <input type="number" maxlength="5" class="form-control" id="signup_user" name="signup_user" required>
                </div>
                <div class="col-4">
                    <label for="signup_ss" class="form-label">Nº Seguridad Social*</label>
                    <input type="text" class="form-control" id="signup_ss" name="signup_ss" required>
                </div>
            </div>    
            <div class="row justify-content-center py-2">
                <div class="col-4">
                    <label for="signup_name" class="form-label">Nombre*</label>
                    <input type="text" class="form-control" id="signup_name" name="signup_name" required>
                </div>
                <div class="col-4">
                    <label for="signup_surname" class="form-label">Apellido*</label>
                    <input type="text" class="form-control" id="signup_surname" name="signup_surname" required>
                </div>
            </div>
            <div class="row justify-content-center py-2">
                <div class="col-8">
                    <label for="signup_email" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="signup_email" name="signup_email" aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">No compartiremos tu email con nadie más.</div>
                </div>
            </div>
            <div class="row justify-content-center py-2">
                <div class="col-4">
                    <label for="signup_pass" class="form-label">Contraseña*</label>
                    <input type="text" class="form-control" id="signup_pass" name="signup_pass" required>
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