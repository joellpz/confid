<!DOCTYPE html>
<html>
    <?php 
        $file="inicio";
        include 'head.php';
    ?>  
    <style>
        h1{
            text-align: center;
            border: 2px #646CDF solid;
            border-radius: 15px;
            padding-bottom: 7px;
        }
    </style>
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
                        <div class="row align-items-center">';

                while ($row2 = mysqli_fetch_array($rescat)) { 
                    echo '  <div class="col-3 mb-3">
                                <div class="card">
                                    <img id="prod" src="img/productos/'.$row2['idProductos'].'.png" class="card-img-top" alt="'.$row2['nombre'].'">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row2['nombre'].'</h5>                                                                          
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