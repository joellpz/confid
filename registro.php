<!doctype html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        include 'head.php'; //CAMBIAR RUTA SEGUN UBI
    ?>  

    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once 'header.php'; ?> <!-- CAMBIAR RUTA SEGUN UBI Insertar headers segun login -->   
        
        <form action="php/singup.php" method="post">
            <div class="row" style="height: 150px;"></div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="singup_user" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="singup_user" aria-describedby="emailHelp" name="singup_user">
                    <div id="emailHelp" class="form-text">No compartiremos tu email con nadie más.</div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="singup_pass" class="form-label">Contraseña*</label>
                    <input type="password" class="form-control" id="singup_pass" name="singup_pass">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <span id="passwordHelpInline" class="form-text">Debe ser de 8-20 caráteres de largo.</span>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                    <div class="col-4 form-check">
                        <input type="checkbox" class="form-check-input" id="auto" onclick="autonomo()">
                        <label class="form-check-label" for="autonomo" id="auto">Soy autónomo</label>
                    </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="singup_name" class="form-label">Nombre*</label>
                    <input type="placeholder" class="form-control" id="singup_name" name="singup_name">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="singup_alias" class="form-label">Alias*</label>
                    <input type="text" class="form-control" id="singup_alias" name="singup_alias" disabled>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="singup_cif" class="form-label" id="CIF">CIF*</label>
                    <input type="text" class="form-control" id="singup_cif" name="singup_cif">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="singup_dir" class="form-label">Dirección*</label>
                    <input type="text" class="form-control" id="singup_dir" name="singup_dir">
                </div>
            </div>           
            <br>   
            <div class="container-fluid h-100">
                <div class="row w-100">
                    <div class="col text-center">
                        <input type="submit" class="btn btn-primary" name="add_cliente" value="Regístrate"/>
                        <a href="index.php"><button type="button" class="btn btn-primary">Volver a Inicio</button></a>
                    </div>
                </div>
            </div>
        </form>     
        <script> 

            const n = document.querySelector('#singup_name');
            const a = document.getElementById('singup_alias');
            n.addEventListener("keydown", write);
            function write(){
                if(event.which == '8' || event.which == '16' || event.which == '20' || event.which == '13'  || event.which == '1718' || event.which == '17'){
                    a.value = a.value.substring(0, a.value.length - 1);
                }else{
                    a.value = a.value + event.which;
                }                
            }                       

            function autonomo(){
                var check = document.getElementById("auto");
                var cif = document.getElementById("CIF");
                if(check.checked){ 
                    cif.innerHTML = "NIF/DNI*"; 
                    a.disabled = false;
                }else{ 
                    cif.innerHTML = "CIF*";
                    a.disabled = true;
                }
            }
        </script>
    </body>
</html>