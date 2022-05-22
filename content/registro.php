<!doctype html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        $far="../";
        include $far.'php/comun/head.php';
    ?>      
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once $far.'content/header.php'; ?> <!-- CAMBIAR RUTA SEGUN UBI Insertar headers segun login -->  
        <style>
            .btn{
                width:100%;
                max-width: 200px;
            }
        </style>
        <h2>Registro de Usuarios</h2>
        <form action="/php/signup.php" method="post" id="form"><br>              
            <div class="row justify-content-center py-2">
                <div class="col-6">
                    <label for="signup_user" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="signup_user" name="signup_user" required>
                    <input type="hidden" class="form-control" id="signup_email" name="signup_email">
                    <div id="emailHelp" class="form-text">No compartiremos tu email con nadie más.</div>
                </div>  
                <div class="col-2" style="display: flex;flex-wrap: nowrap;justify-content: center;align-items: center; margin-top: 0.3%">
                    <label class="btn btn-outline-secondary" for="signup_auto" >Soy autónomo</label>
                    <input type="checkbox" class="btn-check" id="signup_auto" name="signup_auto"onclick="autonomo()">                    
                </div>              
            </div>
            <br>
            <div class="row justify-content-center">                
                <div class="col-4">
                    <label for="signup_name" class="form-label">Nombre*</label>
                    <input type="placeholder" class="form-control" id="signup_name" name="signup_name" required>
                    <span id="passwordHelpInline" class="form-text">Tu nombre o el nombre de tu empresa.</span>
                </div>
                <div class="col-4">
                    <label for="signup_alias" class="form-label">Alias*</label>
                    <input type="text" class="form-control" id="signup_alias" name="signup_alias" disabled required>
                    <span id="passwordHelpInline" class="form-text">El nombre de tu empresa.</span>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="signup_cif" class="form-label" id="CIF">CIF*</label>
                    <input type="text" class="form-control" id="signup_cif" name="signup_cif" required>
                </div>
                <div class="col-4">
                    <label for="signup_dir" class="form-label">Dirección*</label>
                    <input type="text" class="form-control" id="signup_dir" name="signup_dir" required>
                </div>
            </div>           
            <br>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="signup_pass" class="form-label">Contraseña*</label>
                    <input type="password" class="form-control" id="signup_pass" name="signup_pass" required>
                </div>
                <div class="col-4">
                    <label for="signup_pass_rep" class="form-label">Repetir Contraseña*</label>
                    <input type="password" class="form-control" id="signup_pass_rep" name="signup_pass_rep" required>
                </div>
            </div> 
            <br>
            <div class="container-fluid h-100">
                <div class="row justify-content-center">
                    <div class="col-2 text-center">
                        <input type="button" class="btn btn-primary" name="add_cliente" value="Regístrate" onclick='registro()'/>
                    </div>
                    <div class="col-2 text-center">                       
                        <a href="/index.php"><button type="button" class="btn btn-primary">Volver a Inicio</button></a>
                    </div>
                </div>
            </div>
        </form>
        <?php include_once $far.'php/comun/footer.php'; ?>
        <script> 
            const n = document.querySelector('#signup_name');
            const a = document.getElementById('signup_alias');
            n.addEventListener("keydown", write);
            function write(){
                if(event.which == '8' || event.which == '16' || event.which == '20' || event.which == '13'  || event.which == '1718' || event.which == '17'){
                    a.value = a.value.substring(0, a.value.length - 1);
                }else{
                    a.value = a.value + event.key;
                }                
            }                       

            function autonomo(){
                var check = document.getElementById("signup_auto");
                var cif = document.getElementById("CIF");
                if(check.checked){ 
                    cif.innerHTML = "NIF/DNI*"; 
                    a.disabled = false;
                }else{ 
                    cif.innerHTML = "CIF*";
                    a.disabled = true;
                }
            }
            const user = document.getElementById('signup_user');
            const email = document.getElementById('signup_email');
            const form = document.getElementById('form');

            function registro(){
                email.value = user.value;
                form.submit();
            }
        </script>
    </body>
</html>