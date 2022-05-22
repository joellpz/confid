<!DOCTYPE html>
<html>
    <?php 
        $file="inicio";
        $far="../";
        include $far.'php/comun/head.php';
    ?>
    <link rel ="stylesheet" href="/style/caja_prods.css"/>
    <style>
        .descripcion{
            margin-top: 7%;
        }
    </style>
    <body>        
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
                <div class="col-6">             
                    <p class="card-title"><b><?php echo $row2['nombre'];?></b></p>
                    <p style=""><?php echo $row2['descripcion'];?></p>
                    <p style="color:#646CDF; font-weight:bold; font-size: 23px; text-align:right;"><?php echo number_format($row2['precioIVA'],2);?> €</p>
                    <p style="color:#646CDF; font-weight:bold; font-size: 16px; text-align:right;"><?php echo number_format($row2['precioNoIVA'],2);?> € SENSE IVA</p>
                </div>
                </div>                    
            </div>
        </div><br><br>                        
        
        <?php include_once $far.'php/comun/footer.php'; ?>        
    </body>
</html>