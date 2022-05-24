<!DOCTYPE html>
<html>
    <?php 
        $file="inicio";
        $far="../";
        include $far.'php/comun/head.php';
    ?>
    <link rel="stylesheet" href="../style/caja_prods.css"/>
    <style>
        .descripcion{
            margin-top: 7%;
        }
    </style>
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>        
        <?php 
            include_once 'header.php'; 

            $qcateg = 'SELECT * FROM productos WHERE idProductos = '.$_GET['id'];
            $rescat = mysqli_query($conn, $qcateg);
            $row2 = mysqli_fetch_array($rescat)
        ?>

        <div class="container">
            <div class="row descripcion">
                <div class="col-6 img_prod">
                    <img src="/img/productos/<?php echo $row2['idProductos'];?>.png" class="card-img-top" alt="...">    
                </div>
                <div class="col-6" style="padding:5%">
                    <p class="card-title"><b><?php echo $row2['nombre'];?></b></p>
                    <div class="precio">
                        <span style="font-size: 28px; margin-right: 10px;"><?php echo number_format($row2['precioIVA'],2); ?>  €</span>
                        <span style="font-size: 12px;"><?php echo number_format($row2['precioNoIVA'],2); ?>  € SENSE IVA</span>
                    </div>
                    <p style="text-align:justify"><?php echo $row2['descripcion'];?></p>
                    <p><b>Stock:</b> <?php echo $row2['stock'];?></p>
                    <label for="cantidad">Cantidad: </label>
                    <select id="cantidad" name="cantidad" class="form-control" value="1" style="width:20%; text-align:center">
                        <?php for($i=1; $i<=$row2['stock']; $i++) echo "<option>".$i."</option>" ?>
                    </select>
                    <span class="boton"><input class="carrito btn btn-outline-primary" type="submit" value="Añadir al Carrito" onclick="Add(<?php echo $row2['idProductos']; ?>)"/></span>
                </div>                    
                
            </div>
        </div><br><br>                        
        <script src="/js/add_carrito.js"></script>
        <script>
            function Add(id){
                var stock = document.getElementById("cantidad").value;
                Añadir_Carrito(id,stock);              
            }
        </script>
        <?php include_once $far.'php/comun/footer.php'; ?>        
    </body>
</html>