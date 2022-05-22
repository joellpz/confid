<!DOCTYPE html>
<html>
    <?php 
        $file="servicios";
        $far="../";
        include $far.'php/comun/head.php';
    ?>
        <style>
        .descripcion{
            border: 3px solid #646CDF;
            border-radius: 25px;
            max-width: 1300px;
            margin-top: 7%;
        }
        .img_prod{
            padding: 5%;
            background-color: #535253;
            border-radius: 20px;
        }
    </style>
    <body>     
        <?php 
            include_once $far.'content/header.php';

            $qprods = "SELECT * FROM categorias WHERE idCategoria = 8 OR idCategoria = 9";
            $resprods = mysqli_query($conn, $qprods);            

            while ($row1 = mysqli_fetch_array($resprods)) {  

                $qcateg = "SELECT * FROM productos WHERE idCategoria = ".$row1['idCategoria'];
                $rescat = mysqli_query($conn, $qcateg);
        ?>
                <div class="container-fluid my-5">
                    <h1 class="text-center fw-bold display-1 mb-5"><?php echo $row1['nombre']; ?></h1>
                    

            <?php while ($row2 = mysqli_fetch_array($rescat)) { ?>

                            <div class="row descripcion">
                                <div class="col-6 img_prod">
                                    <img style="border-radius:20px" src="/img/productos/<?php echo $row2['idProductos'];?>.png" class="card-img-top" alt="...">    
                                </div>
                                <div class="col-6">             
                                    <p class="card-title"><b><?php echo $row2['nombre'];?></b></p>
                                    <p style=""><?php echo $row2['descripcion'];?></p>
                                    <p style="color:#646CDF; font-weight:bold; font-size: 23px; text-align:right;"><?php echo number_format($row2['precioIVA'],2);?> €</p>
                                    <p style="color:#646CDF; font-weight:bold; font-size: 16px; text-align:right;"><?php echo number_format($row2['precioNoIVA'],2);?> € SENSE IVA</p>
                                </div>    
                            </div>                          
            <?php } ?>                             
                </div>
        <?php } ?>                      
        
        <?php include_once $far.'php/comun/footer.php'; ?>        
    </body>
</html>