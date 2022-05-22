<!DOCTYPE html>
<html>
    <?php 
        $file="servicios";
        $far="../";
        include $far.'php/comun/head.php';
    ?>
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

                            <div class="row descripcion" id="<?php echo $row2['idProductos'];?>">
                                <a class="col-6 img_prod" href="/content/contacto.php?serv=true">
                                    <img src="/img/productos/<?php echo $row2['idProductos'];?>.png" class="card-img-top" alt="...">    
                                </a>
                                <div class="col-6 serv-info">             
                                    <p class="card-title serv-title"><b><?php echo $row2['nombre'];?></b></p>
                                    <div class="serv-text"><?php echo $row2['descripcion'];?></div>
                                    <div class="boton">
                                        <a href="/content/contacto.php?serv=true" class="btn btn-primary btn-block">¡Me interesa!</a>
                                    </div>
                                </div>                                
                            </div>                          
            <?php } ?>                             
                </div>
        <?php } ?>                      
        
        <?php include_once $far.'php/comun/footer.php'; ?>        
    </body>
</html>