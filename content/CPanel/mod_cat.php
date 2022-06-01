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
            if(isset($_POST['idCategoria'])){

                $id = $_POST['idCategoria'];
                $cons_prod = "SELECT * FROM categorias WHERE idCategoria = $id";
                $result= mysqli_query ($conn, $cons_prod);
                $row=mysqli_fetch_array($result);

            }else if(isset($_POST['enviar'])){

                $id = $_POST['idCategoria'];
                $nombre = $_POST["nombre"];
                
                $update_cat = "UPDATE categorias 
                SET nombre='$nombre' WHERE idCategoria = $id";
                mysqli_query($conn, $update_cat) or die('Consulta perico: '. mysqli_error());
                echo '<script>location.href = "../cpanel.php?cons=prod"</script>';
            }else{
                echo '<script>location.href = "../cpanel.php?cons=prod"</script>';
            }
            
            include_once $far.'content/header.php'; ?>
        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <table class="tabliqui">
                <thead style="background-color: #646CDF;">
                    <th colspan="2">Modificar Categoria Nº<?php echo $row['idCategoria']?></th>
                </thead>
                <tr>
                    <td><label for="nombre">Nombre:</label></td>
                    <td><input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']?>" required/></td>
                </tr>
                <tr>
                    <td>
                     <input id="idCategoria" name="idCategoria" type="hidden" value="<?php echo $row['idCategoria']?>">
                    </td>
                </tr>
                <tr>
                    <td style="text-align: center; font-size: 20px;" colspan="2">
                        <input type="submit" class="m-3 btn btn-primary" name="enviar" value="Modificar"/>
                    </td>
                </tr>
            </table>
        </form> 
    </body>
</html>