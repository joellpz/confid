<!DOCTYPE html>
<html>
    <?php 
        $file="Inicio";
        $far="";
        include $far.'php/comun/head.php';
    ?>
    <link rel="stylesheet" href="/style/caja_prods.css"/>
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once $far.'content/header.php';?>
        <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel"> <!-- Las imagenes deberian tener el mismo tamaño o proporción. Tener en cuenta al escoger las imagenes el color del carousel-->
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="/img/portadas/portada1.jpg" class="d-block w-100" alt=""> 
                </div>
                <div class="carousel-item">
                    <img src="/img/portadas/portada2.jpg" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/portadas/portada3.jpg" class="d-block w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br><br>

        <!-- Bloque de servicios destacados -->
        <div class="container servicios_destacados">
            <div class="m-auto">
                <div>
                    <h2 class="col-md h1-responsive titulo">Nuestros Servicios</h2>
                    <hr class="col-4 opacity-100 mt-0 borde_title"/>
                </div>
            </div>            
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-serv owl-carousel owl-theme">
                        <?php 
                            $qprods = "SELECT * FROM productos WHERE idCategoria = 8 OR idCategoria = 9";
                            $resprods = mysqli_query($conn, $qprods);
                            while ($row2 = mysqli_fetch_array($resprods)) { ?>
                                <div class="item mb-3">
                                    <div class="card h-100 serv">
                                        <a href="/content/servicios.php#<?php echo $row2['idProductos'];?>">
                                            <img id='prod' src="/img/productos/<?php echo $row2['idProductos']; ?>.png" class="card-img-top" alt="...">
                                        </a>
                                        <div class="card-body servb">
                                            <h4 class="m-2" style="font-weight:bold;"><?php echo $row2['nombre']; ?></h4>
                                            <div class="m-2" style="text-align: justify;"> 
                                            <span class="boton"><a class="carrito btn btn-outline-primary" href="/content/servicios.php#<?php echo $row2['idProductos'];?>">Info Servicio</a></span>                           
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn carrito btn-outline-primary px-5 py-2 w-75" href="/content/servicios.php" role="button" style="font-weight:bold;">Ver Nuestros Servicios</a>
            </div>
        </div>
        <br><br>

        <!-- Bloque de introducción al contacto -->
        <div class="row bloque_contacto w-100 m-auto">
            <div class="col-7 justify-content-start text-center" style="padding: 5%;">
                <h2 style="font-weight:bold;">¡Contacta con nosotros!</h2>
                <p class="m-3 text-center mx-auto" style="width: 85%">Si tienes cualquier duda sobre nuestros servicios, o si crees que necesitas un sevicio a medida puedes enviarnos un mail haciendo clic en el siguiente botón.</p>
                <a class="btn btn-primary px-5 py-2" href="contacto.php" role="button" style="font-weight:bold;">¡Contacta!</a>
            </div>
            
        </div>
        <br><br>
        
        <!-- Bloque de productos destacados -->       
        <div class="container productos_destacados">
            <div class="m-auto">
                <div>
                    <h2 class="col-md h1-responsive titulo">Productos Destacados</h2>
                    <hr class="col-4 opacity-100 mt-0 borde_title"/>
                </div>
            </div>
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="prod-index owl-carousel owl-theme">
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
        <?php include_once $far.'php/comun/footer.php'; ?>
        <script src="/js/owl-carousel.js"></script>
    </body>
</html>