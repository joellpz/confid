<!DOCTYPE html>
<html>
    <?php 
        $file="inicio";
        include 'head.php';
    ?>
    <link rel ="stylesheet" href="style/caja_prods.css"/>
    <body>        
        <?php 
            include_once 'header.php'; 

            $qprods = "SELECT * FROM categorias";
            $resprods = mysqli_query($conn, $qprods);            

            while ($row1 = mysqli_fetch_array($resprods)) {  

                $qcateg = 'SELECT * FROM productos WHERE idCategoria = '.$row1['idCategoria'];
                $rescat = mysqli_query($conn, $qcateg);

                echo '<div class="container servicios_destacados">
                        <h1>'.$row1['nombre'].'</h1>
                        <div class="row">';

                while ($row2 = mysqli_fetch_array($rescat)) { 
                    echo '  <div class="col-3 mb-3">
                                <div class="card">
                                    <img id="prod" src="img/productos/'.$row2['idProductos'].'.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <p class="card-title"><b>'.$row2['nombre'].'</b></p>
                                        <p style="color:#646CDF; font-weight:bold; font-size: 23px; text-align:right;">'.number_format($row2['precioIVA'],2).' €</p>
                                        <p style="color:#646CDF; font-weight:bold; font-size: 16px; text-align:right;">'.number_format($row2['precioNoIVA'],2).' € SENSE IVA</p>                                                         
                                    </div>
                                </div>
                            </div>';
                }              
                echo '  </div>
                    </div><br><br>';  
            }            
        ?>        
    </body>
</html>