<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, ".php");
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
                        <span style="font-size: 12px;"><?php echo number_format($row2['precioNoIVA'],2); ?> € SENSE IVA</span>
                    </div>
                    <p style="text-align:justify"><?php echo $row2['descripcion'];?></p>
                    <p><b>Stock:</b> <?php echo $row2['stock'];?></p>
                    <label for="cantidad">Cantidad: </label>
                    <select id="cantidad" name="cantidad" class="form-control" style="width:20%; text-align:center">
                        <?php for($i=1; $i<=$row2['stock']; $i++) echo "<option>".$i."</option>" ?>
                    </select>
                    <span class="boton"><input class="carrito btn btn-outline-primary" type="submit" value="Añadir al Carrito" onclick="Add(<?php echo $row2['idProductos']; ?>)"/></span>
                </div>                    
                
            </div>
        </div>                        

        <div class="container productos_destacados">
            <div class="m-auto">
                <div>
                    <h2 class="col-md h1-responsive titulo">Productos Destacados</h2>
                    <hr class="col-4 opacity-100 mt-0 borde_title"/>
                </div>
            </div>
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="prod owl-carousel owl-theme">
                    <?php 
                        $array=array(2,5,11,16,17,26,29,31,35,38);
                        for($i=0; $i<count($array); $i++){
                            $qprods = 'SELECT * FROM productos WHERE idProductos = '.$array[$i];
                            $resprods = mysqli_query($conn, $qprods);
                            while ($row2 = mysqli_fetch_array($resprods)) { ?>
                            <div class="item mb-3">                                    
                                <div class="card border-0 shadow cards">  
                                    <a href="/content/desc_prod.php?id='<?php echo $row2['idProductos']; ?>'" >                                      
                                        <img id="prod" src="/img/productos/<?php echo $row2['idProductos']; ?>.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body cardsb">
                                        <div style="color:black;" class="card-title text-center cardst">
                                            <h4><b><?php echo $row2['nombre']; ?></b></h4>
                                        </div>
                                        <div class="precio">
                                            <span style="font-size: 28px; margin-right: 10px;"><?php echo number_format($row2['precioIVA'],2); ?> €</span>
                                            <span style="font-size: 12px;"><?php echo number_format($row2['precioNoIVA'],2); ?> € SIN IVA</span>
                                        </div>   
                                        <span class="boton"><a class="carrito btn btn-outline-primary" type="button" href="/content/desc_prod.php?id='<?php echo $row2['idProductos']; ?>'">Ver Producto</a></span>
                                    </div>
                                </div>
                            </div>
                    <?php }} ?>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn carrito btn-outline-primary px-5 py-2 w-75" href="/content/productos.php" role="button" style="font-weight:bold;">Ver Nuestros Productos</a>
            </div>
        </div>
        <script src="/js/add_carrito.js"></script>
        <script src="/js/owl-carousel.js"></script>
        <script>
            function Add(id){
                var stock = document.getElementById("cantidad").value;  
                alert("Elemento añadido al Carrito!");                   
                Añadir_Carrito(id,stock);              
            }
        </script>
        <?php include_once $far.'php/comun/footer.php'; ?>        
    </body>
</html>