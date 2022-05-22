<!DOCTYPE html>
<html>
    <?php 
        $file= "Modificar Cuenta";
        $far="../../";//Distancia para llegar a la general.
        include $far.'php/comun/head.php';//CAMBIAR RUTA SEGUN UBI

        if($trabajador){
            $id = $_GET['id'];
        }else{
            $id = $_SESSION['user_id'];
        }

        $consulta = "SELECT * FROM usuarios, clientes WHERE clientes.idUsuario = usuarios.idUsuario AND usuarios.idUsuario = $id";
        $result= mysqli_query ($conn, $consulta);
        $row=mysqli_fetch_array($result);      
    ?>  
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>' <?php ?>>
        <?php include_once $far.'content/header.php';  ?>
        <style>
            .btn{
                width:100%;
                max-width: 200px;
            }
        </style>
        <div class="text-center mx-2">
            <h2>Modificar Información de la Cuenta</h2>
        </div>
        <form action="/php/consultas/mod_info.php?id=<?php echo $id?>" method="post" id="form">
            <div class="row justify-content-center py-2">
                <div class="col-6">
                    <label for="usuario" class="form-label">Email*</label>
                    <input type="email" class="form-control" id="usuario" name="usuario" value="<?php echo $row['email'] ?>" required>
                    <input type="hidden" class="form-control" id="email" name="email">
                    <div id="emailHelp" class="form-text">No compartiremos tu email con nadie más.</div>
                </div>  
                <div class="col-2" style="display: flex;flex-wrap: nowrap;justify-content: center;align-items: center; margin-top: 0.3%">
                    <label class="btn btn-outline-secondary" for="auto">Soy autónomo</label>
                    <input type="checkbox" class="btn-check" id="auto" name="auto" onclick="autonomo()">                    
                </div>              
            </div>
            <br>
            <div class="row justify-content-center">                
                <div class="col-4">
                    <label for="nombre" class="form-label">Nombre*</label>
                    <input type="placeholder" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre'] ?>" required>
                    <span id="passwordHelpInline" class="form-text">Tu nombre o el nombre de tu empresa.</span>
                </div>
                <div class="col-4">
                    <label for="alias" class="form-label">Alias*</label>
                    <input type="text" class="form-control" id="alias" name="alias" value="<?php echo $row['alias'] ?>" disabled required>
                    <span id="passwordHelpInline" class="form-text">El nombre de tu empresa.</span>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="cif" class="form-label" id="CIF">CIF*</label>
                    <input type="text" class="form-control" id="cif" name="cif" value="<?php echo $row['CIF'] ?>" required>
                </div>
                <div class="col-4">
                    <label for="dir" class="form-label">Dirección*</label>
                    <input type="text" class="form-control" id="dir" name="dir" value="<?php echo $row['direccion'] ?>" required>
                </div>
            </div>           
            <br>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="passwd" class="form-label">Contraseña*</label>
                    <input type="password" class="form-control" id="passwd" name="passwd" value="<?php echo md5($row['passwd']) ?>" required>
                </div>
                <div class="col-4">
                    <label for="pass_rep" class="form-label">Repetir Contraseña*</label>
                    <input type="password" class="form-control" id="pass_rep" name="pass_rep" value="<?php echo md5($row['passwd']) ?>" required>
                </div>
            </div> 
            <br>
            <div class="container-fluid h-100">
                <div class="row justify-content-center">
                    <div class="col-2 text-center">
                        <input type="button" class="btn btn-primary" name="add_cliente" value="Modificar" onclick='registro()'/>
                        <input type="hidden" name="cuenta" id="cuenta" value="cuenta"/>
                    </div>
                    <div class="col-2 text-center">                       
                        <a href="/index.php"><button type="button" class="btn btn-primary">Volver a Inicio</button></a>
                    </div>
                </div>
            </div>
        </form>
        <?php include_once $far.'php/comun/footer.php'; ?>
        <script> 
            const n = document.querySelector('#nombre');
            const a = document.getElementById('alias');
            n.addEventListener("keydown", write);
            function write(){
                if(event.which == '8' || event.which == '16' || event.which == '20' || event.which == '13'  || event.which == '1718' || event.which == '17'){
                    a.value = a.value.substring(0, a.value.length - 1);
                }else{
                    a.value = a.value + event.key;
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
            const user = document.getElementById('usuario');
            const email = document.getElementById('email');
            const form = document.getElementById('form');

            function registro(){
                email.value = user.value;
                form.submit();
            }
        </script>
    </body>
</html>