<!doctype html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        include 'head.php'; //CAMBIAR RUTA SEGUN UBI
    ?>  

    <script> 
        var n = document.getElementById('name');
        //var a = document.getElementById(alias); 

        console.log(n/*,a*/);
        function write(){
            console.log(1);
        }  
        n.addEventListener('keypress', write, false);        
           
        
        function autonomo(){
            var check = document.getElementById("auto");
            var cif = document.getElementById("CIF");
            if(check.checked){ 
                cif.innerHTML = "NIF/DNI*"; 
            }else{ 
                cif.innerHTML = "CIF*";
            }
        }
    </script>

    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once 'header.php'; ?> <!-- CAMBIAR RUTA SEGUN UBI Insertar headers segun login -->   
        
        <form action="php/singup.php" method="post">
            <div class="row" style="height: 150px;"></div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="singup_email" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="singup_email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">No compartiremos tu email con nadie más.</div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="singup_pass" class="form-label">Contraseña*</label>
                    <input type="password" class="form-control" id="singup_pass">
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
                        <input type="checkbox" class="form-check-input" id="auto" onclick="autonomo">
                        <label class="form-check-label" for="autonomo" id="auto">Soy autónomo</label>
                    </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="name" class="form-label">Nombre*</label>
                    <input type="name" class="form-control" id="name" class="name">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="Alias" class="form-label">Alias*</label>
                    <input type="text" class="form-control" id="Alias" value="">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="CIF" class="form-label" id="CIF">CIF*</label>
                    <input type="text" class="form-control" id="CIF">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="Direccion" class="form-label">Dirección*</label>
                    <input type="text" class="form-control" id="Direccion">
                </div>
            </div>           
            <br>   
            <div class="container-fluid h-100">
                <div class="row w-100">
                    <div class="col text-center">
                        <input type="submit" class="btn btn-primary" name="registrar" value="Regístrate"/>
                        <a href="index.html"><button type="button" class="btn btn-primary">Volver a Inicio</button></a>
                    </div>
                </div>
            </div>
        </form>        
    </body>
</html>