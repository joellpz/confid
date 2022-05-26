
<!DOCTYPE html>
<html>
    <?php
        $file=basename(__FILE__, '.php');
        $far="../../";
        include $far.'php/comun/head.php';
    ?>

    <!--DESPLEGABLE CON LOS TRANSPORTISTAS-->

    <link rel ="stylesheet" href="/style/caja_prods.css"/>
    <style>
        
    </style>
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>     
        <?php
            include_once $far.'content/header.php';
        ?>
        <div class="container-fluid my-5">                   

        <?php
        if(isset($_SESSION['carrito_prod'])){
            foreach ($_SESSION['carrito_prod'] as $key => $id_prod) { 
                
                $qcateg = 'SELECT * FROM productos WHERE idProductos = '.$id_prod;
                $rescat = mysqli_query($conn, $qcateg);
                $row = mysqli_fetch_array($rescat);
            ?>
                <div class="row caja_carrito" id="<?php echo $row['idProductos']; ?>">
                    <div class="col-2 img_prod_car">
                        <img style="width: 190px;" src="/img/productos/<?php echo $row['idProductos'];?>.png" class="card-img-top car_element" alt="...">    
                    </div>
                    <div class="col-2">             
                        <p class="card-title serv-title car_element"><b><?php echo $row['nombre'];?></b></p>                                                                        
                    </div>  
                    <div class="col-2">             
                        <p class="card-title serv-title car_element"><b><?php echo $row['stock'];?></b></p>                                                                        
                    </div>  
                    <div class="col-2">             
                        <p class="card-title serv-title">
                            <select id="cantidad" name="cantidad" class="form-control car_element">
                                <?php for($i=1; $i<=$row['stock']; $i++) if($i == $_SESSION['carrito_stock'][$key])echo "<option selected>".$i."</option>"; else echo "<option>".$i."</option>"; ?>
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
        <?php }} ?>                             
        </div>                      
        
        <?php include_once $far.'php/comun/footer.php'; ?>        
    </body>
</html>