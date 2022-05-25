
<!DOCTYPE html>
<html>
    <?php
        $file=basename(__FILE__, '.php');
        $far="../../";
        include $far.'php/comun/head.php';

        $car_stock = $_SESSION['carrito_stock'];

        foreach ($_SESSION['carrito_prod'] as $key => $id_prod){
            echo $id_prod .' -> '. $car_stock[$key].'<br>';
        }
    ?>

    <!--DESPLEGABLE CON LOS TRANSPORTISTAS-->

    <link rel ="stylesheet" href="/style/caja_prods.css"/>
    <style>
        
    </style>
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>     
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

                            <div class="row caja_carrito" id="<?php echo $row2['idProductos']; ?>">
                                <div class="col-2 img_prod_car">
                                    <img style="width: 190px;" src="/img/productos/<?php echo $row2['idProductos'];?>.png" class="card-img-top car_element" alt="...">    
                                </div>
                                <div class="col-2">             
                                    <p class="card-title serv-title car_element"><b><?php echo $row2['nombre'];?></b></p>                                                                        
                                </div>  
                                <div class="col-2">             
                                    <p class="card-title serv-title car_element"><b><?php echo $row2['stock'];?></b></p>                                                                        
                                </div>  
                                <div class="col-2">             
                                    <p class="card-title serv-title">
                                        <select id="cantidad" name="cantidad" class="form-control car_element" value="1">
                                            <?php for($i=1; $i<=$row2['stock']; $i++) echo "<option>".$i."</option>" ?>
                                        </select>
                                    </p>                                                                        
                                </div>        
                                <div class="col-2">             
                                    <p class="card-title serv-title car_element"><b>PRECIO INDIV</b></p>                                                                        
                                </div>          
                                <div class="col-2">             
                                    <p class="card-title serv-title car_element"><b>PRECIO total</b></p>                                                                        
                                </div>                         
                            </div><br>                      
            <?php } ?>                             
                </div>
        <?php } ?>                      
        
        <?php include_once $far.'php/comun/footer.php'; ?>        
    </body>
</html>