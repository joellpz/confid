<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        $far="../";
        include $far.'php/comun/head.php';
    ?>  
    <link rel="stylesheet" href="/style/caja_prods.css"/>

    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once $far.'content/header.php'; ?>
        <?php 
            $qprods = "SELECT * FROM categorias WHERE idCategoria != 8 AND idCategoria != 9";
            $resprods = mysqli_query($conn, $qprods);            

            while ($row1 = mysqli_fetch_array($resprods)) {  

                $qcateg = 'SELECT nombre, idProductos, stock, precioIVA, precioNoIVA FROM productos WHERE idCategoria = '.$row1['idCategoria'];
                $rescat = mysqli_query($conn, $qcateg);
        ?>
                <div class="container-fluid my-5">
                    <div class="m-4 ms-auto">
                        <div class="col-11 ms-auto">
                            <h2 class="col-md h1-responsive px-3 titulo"><?php echo $row1['nombre']; ?></h2>
                            <hr class="col-4 opacity-100 mt-0 borde_title"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 m-auto">
                            <div class="owl-carousel owl-theme">

            <?php while ($row2 = mysqli_fetch_array($rescat)) { ?>

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
                                            <span class="boton"><input class="carrito btn btn-outline-primary" type="submit" value="Añadir al Carrito" onclick="Add(<?php echo $row2['idProductos']; ?>)" <?php if($row2['stock'] == 0) echo "disabled"; ?>/></span>                                                     
                                        </div>                                        
                                    </div>                                    
                                </div>
            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
        <?php } ?>
        <?php include_once $far.'php/comun/footer.php'; ?>
        
        <script src="/js/add_carrito.js"></script>
        <script>
            function Add(id){                  
                alert("Elemento añadido al Carrito!");     
                Añadir_Carrito(id,1);              
            }
        </script>
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