<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        /* $file= "C. Panel"; */ // Panel de Administador SOLO
        $far="../../";//Distancia para llegar a la general.
        include $far.'php/comun/head.php';//CAMBIAR RUTA SEGUN UBI
    ?>  
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php
            $id = $_SESSION['user_id'];
            $consulta = "SELECT * FROM usuarios, clientes WHERE clientes.idUsuario = usuarios.idUsuario AND usuarios.idUsuario = $id";
            $result= mysqli_query ($conn, $consulta);
            $row=mysqli_fetch_array($result);
            var_dump($row);
            var_dump($result);
            if(isset($_POST['usuario'])){
                var_dump($_POST);
                $usuario = $_POST["usuario"];
                $passwd = $_POST["pass"];
                $nombre = $_POST["nombre"];
                $email = $_POST["email"];

                echo $_POST["casinombre"];
                $CIF = $_POST["CIF"];
                $dir = $_POST["dir"];
                $autonomo = $_POST["auto"];

                $update_users = "UPDATE usuarios SET usuario='$usuario', passwd='$passwd', nombre = '$nombre', email='$email' WHERE idUsuario = $id";
                $update_cli = "UPDATE clientes SET alias='$alias', CIF='$CIF', direccion = '$dir', autonomo='$autonomo' WHERE idUsuario = $id";
                mysqli_query($conn, $update_users) or die('Consulta fallida: ');
                mysqli_query($conn, $update_cli) or die('Consulta fallida: ');
            //echo "COSITAS";
                header("refresh:0;url=". $_SERVER['PHP_SELF']);  //Redirigir a Principal.
            }else{

            include_once $far.'content/header.php'; ?>
        <style>
            .btn{
                width:100%;
                max-width: 200px;
            }
        </style>
        
        <form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="form"><br>              
            <div class="row justify-content-center py-2">
                <h2>Modificación de Usuarios</h2>
                <?php echo $_SESSION['user_id']?>
                <div class="col-6">
                    <label for="usuario" class="form-label">Email*</label>
                    <input type="email" class="form-control" value="<?php echo $row['email']?>" id="usuario" name="usuario" required>
                    <input type="hidden" class="form-control" id="email" name="email">
                </div>  
                <div class="col-2" style="display: flex;flex-wrap: nowrap;justify-content: center;align-items: center; margin-top: 0.3%">
                    <label class="btn btn-outline-secondary"  for="auto">Soy autónomo</label>
                    <?php echo $row['autonomo']?>
                    <input type="checkbox" class="btn-check" id="auto" name="auto" value="<?php echo $row['autonomo']?>" onclick="autonomo()">                    
                </div>              
            </div>
            <br>
            <div class="row justify-content-center">                
                <div class="col-4">
                    <label for="nombre" class="form-label">Nombre*</label>
                    <input type="placeholder" class="form-control" id="nombre" name="nombre" value="<?php echo $row['nombre']?>" required>
                    <span id="passwordHelpInline" class="form-text">Tu nombre o el nombre de tu empresa.</span>
                </div>
                <div class="col-4">
                    <label for="casinombre" class="form-label">Alias*</label>
                    <?php echo $row['alias']?>
                    <input type="text" class="form-control" id="casinombre" name="casinombre" value="<?php echo $row['alias']?>" required>
                    <span id="passwordHelpInline" class="form-text">El nombre de tu empresa.</span>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="CIF" class="form-label" id="CIF">CIF*</label>
                    <input type="text" class="form-control" id="CIF" name="CIF" value="<?php echo $row['CIF']?>" required>
                </div>
                <div class="col-4">
                    <label for="dir" class="form-label">Dirección*</label>
                    <input type="text" class="form-control" id="dir" name="dir" value="<?php echo $row['direccion']?>" required>
                </div>
            </div>           
            <br>
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="signup_pass" class="form-label">Contraseña*</label>
                    <input type="password" class="form-control" id="pass" name="pass" value="<?php echo $row['passwd']?>" required>
                </div>
                <div class="col-4">
                    <label for="pass_rep" class="form-label">Repetir Contraseña*</label>
                    <input type="password" class="form-control" id="pass_rep" name="pass_rep" value="<?php echo $row['passwd']?>" required>
                </div>
            </div> 
            <br>
            <div class="container-fluid h-100">
                <div class="row justify-content-center">
                    <div class="col-2 text-center">
                        <input type="button" class="btn btn-primary" name="enviar" value="Modificar" onclick='modificar()'/>
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

            function modificar(){
                email.value = user.value;
                form.submit();
            }
        </script>
        <?php } ?>
    </body>
</html>