
<!DOCTYPE html>
<html>
    <?php
        $file="Control Panel";
        $far="../../";
        include $far.'php/comun/head.php';
    ?>
    <style>
        .tabliqui{
            border: solid 1px;
            margin: auto;
            text-align: center;
            min-width: 35%;
        }
    </style>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
    <?php
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $cons_es_trabajador = "SELECT idUsuario FROM trabajadores WHERE idUsuario = $id"; 
                $es_trabajador = mysqli_query($conn, $cons_es_trabajador);
                $row_es_trab = mysqli_fetch_array($es_trabajador);
                if(!$row_es_trab){
                    header("Location:$far/content/user/mod_account.php?id=$id");
                }
            }

            $consulta = "SELECT * FROM usuarios, trabajadores WHERE usuarios.idUsuario = trabajadores.idUsuario AND usuarios.idUsuario = $id";
            $result= mysqli_query ($conn, $consulta);
            $row=mysqli_fetch_array($result);
            
            include_once $far.'content/header.php'; ?>
        
        <form method="post" action="/php/consultas/mod_info.php?id=<?php echo $id ?>">
            <table class="tabliqui">
                <thead style="background-color: #646CDF;">
                    <th colspan="2">Modificar usuario Nº<?php echo $row['idUsuario']?></th>
                </thead>
                <tr>
                    <td><label for="usuario">Usuario:</label></td>
                    <td><input type="text" id="usuario" name="usuario" value="<?php echo $row['usuario']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="passwd">Contraseña:</label></td>
                    <td><input type="text" id="passwd" name="passwd" value="<?php echo $row['passwd']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="apel">Apellido:</label></td>
                    <td><input type="text" id="apel" name="apel" value="<?php echo $row['apellido']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="email">Correo Electronico:</label></td>
                    <td><input type="email" id="email" name="email" value="<?php echo $row['email']?>" required/></td>
                </tr>
                <tr>
                    <td><label for="numss">Numero Seguridad Social:</label></td>
                    <td><input type="text" id="numss" name="numss" value="<?php echo $row['numEseEse']?>" required/></td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 20px;" colspan="2">
                        <input type="submit" class="btn btn-primary" name="enviar" value="Modificar"/>
                    </td>
                </tr>
            </table>
        </form> 
    </body>
</html>