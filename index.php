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
            <div class="row align-items-center">
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="/img/productos/46.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="m-2" style="font-weight:bold;">SpaceShip</h4>
                            <div class="m-2" style="text-align: justify;" >
                            <p>Implementaci&oacute;n de un sistema profesional que cuenta con un m&iacute;nimo de veinte c&aacute;maras, ocho sistemas de control de acceso a elecci&oacute;n entre nuestros productos, accesorios RFC gratuitos y hasta tres decodificadores de gama alta, necesarios para tener diversos equipos centrales desde los que poder controlar los dispositivos tanto dentro como fuera de la oficina.</p>
                            <p>Una vez implementado nos haremos cargo de monitorear, revisar y mantener los dispositivos aplicando nuestro servicio <a href="#42">Enterprise Pro</a>. Ideal para grandes naves industriales y oficinas de gran tama&ntilde;o.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="/img/productos/43.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="m-2" style="font-weight:bold;">Plan Personalizado</h4>
                            <p class="m-2" style="text-align: justify;">Si crees que nuestros servicios no se adaptan completamente a tu empresa, local, lugar de trabajo... Cont&aacute;ctanos y estudiaremos espec&iacute;ficamente tu caso para adaptarlo de la manera m&aacute;s personalizada. Nuestros expertos realizar&aacute;n un estudio preliminar de su sistema, evaluar&aacute;n tanto un sistema ya implementado, contando la posibilidad de realizarle modificaciones para mejorar la seguridad o incluso implantar uno nuevo desde cero.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn carrito btn-outline-primary m-4 px-5 py-2 w-75" href="/content/servicios.php" role="button" style="font-weight:bold;">Ver Nuestros Servicios</a>
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
            <div class="m-auto m-2">
                <div>
                    <h2 class="col-md h1-responsive titulo">Productos Destacados</h2>
                    <hr class="col-4 opacity-100 mt-0 borde_title"/>
                </div>
            </div>
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="owl-carousel owl-theme">
                    <?php 
                        $array=array(2,5,11,16,19,23,27,31,35,38);
                        for($i=0; $i<count($array); $i++){
                            $qprods = 'SELECT * FROM productos WHERE idProductos = '.$array[$i];
                            $resprods = mysqli_query($conn, $qprods);
                            while ($row2 = mysqli_fetch_array($resprods)) { ?>
                            <div class="item mb-3">                                    
                                <div class="card border-0 shadow">  
                                    <a class="" href="/content/desc_prod.php?id='<?php echo $row2['idProductos']; ?>'" >                                      
                                        <img id="prod" src="/img/productos/<?php echo $row2['idProductos']; ?>.png" class="card-img-top" alt="...">
                                    </a>
                                    <div class="card-body">
                                        <div style="color:black;" class="card-title text-center">
                                            <h4><b><?php echo $row2['nombre']; ?></b></h4>
                                        </div>
                                        <div class="precio">
                                            <span style="font-size: 28px; margin-right: 10px;"><?php echo number_format($row2['precioIVA'],2); ?> €</span>
                                            <span style="font-size: 12px;"><?php echo number_format($row2['precioNoIVA'],2); ?> € SENSE IVA</span>
                                        </div>   
                                        <span class="boton"><input class="carrito btn btn-outline-primary" type="button" value="Ver Productos" href="/content/productos.php"/></span>
                                    </div>
                                </div>
                            </div>
                    <?php }} ?>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a class="btn carrito btn-outline-primary m-4 px-5 py-2 w-75" href="/content/productos.php" role="button" style="font-weight:bold;">Ver Nuestros Productos</a>
            </div>
        </div>
        <?php include_once $far.'php/comun/footer.php'; ?>
        <script>
            $('.owl-carousel').owlCarousel({
                autoplay: true,
                autoplayTimeout: 3000,
                autoplayHoverPause: true,
                loop: true,
                margin: 15,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    900: {
                        items: 3
                    },
                    1200: {
                        items: 4
                    }
                }
            })
        </script>
    </body>
</html>