<!DOCTYPE html>
<html>
    <?php 
        $file="inicio";
        include 'head.php';
    ?>  
    <style>
        .card{
        border-radius: 30px;
        }
        #prod{
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
        }
        h1{
            text-align: center;
            border: 2px #646CDF solid;
            border-radius: 15px;
            padding-bottom: 7px;
        }
    </style>
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
                    $cont = 1;
                    echo '  <div class="col-4">
                                <div class="card">
                                    <img src="img/productos/'.$row2['idProductos'].'.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">'.$row2['nombre'].'</h5>
                                        <p class="card-text">'.$row2['descripcion'].'</p>
                                    </div>
                                </div>
                            </div>';
                    $cont++;
                }              
                echo '  </div>
                    </div><br><br>';  
            }
        ?>
    </body>
</html>