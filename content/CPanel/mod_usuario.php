
<!DOCTYPE html>
<html>
    <?php
        $file="Control Panel";
        $far="../../";
        include $far.'php/comun/head.php';
    ?>
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

            $consulta = "SELECT * FROM usuarios WHERE idUsuario = $id";
            $result= mysqli_query ($conn, $consulta);
            $row=mysqli_fetch_array($result);
            
            include_once $far.'content/header.php'; ?>
        
        <form method="post" action="/php/consultas/mod_info.php">
            <table border= "1" style="width:100%;margin:auto;">
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
                    <td><label for="email">Correo Electronico:</label></td>
                    <td><input type="email" id="email" name="email" value="<?php echo $row['email']?>" required/></td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 20px;" colspan="2">
                        <input type="submit" name="enviar" value="Modificar"/>
                    </td>
                </tr>
            </table>
        </form>
        <?php
            }               
        ?>   
    </body>
</html>