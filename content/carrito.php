
<!DOCTYPE html>
<html>
    <?php
        $file=basename(__FILE__, '.php');
        $far="../";
        include $far.'php/comun/head.php';
    ?>

    <!--DESPLEGABLE CON LOS TRANSPORTISTAS-->

    <link rel ="stylesheet" href="/style/caja_prods.css"/>
    <style>
        
    </style>
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <section style="min-height:700px">     
            <?php
                include_once $far.'content/header.php';
            ?>
            <div class="container-fluid my-5">  
                <div class="row">               
                <?php
                if(isset($_SESSION['carrito_prod'])){ ?>
                    <div class="col-8">
                        <?php foreach ($_SESSION['carrito_prod'] as $key => $id_prod) { 
                            
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
                                <p class="card-title serv-title">
                                    Quantitat:
                                </p>
                                <p class="card-title serv-title">
                                    <select id="cantidad" name="cantidad" class="form-control car_element">
                                        <?php for($i=1; $i<=$row['stock']; $i++) if($i == $_SESSION['carrito_stock'][$key])echo "<option selected>".$i."</option>"; else echo "<option>".$i."</option>"; ?>
                                    </select>
                                </p>                                                                        
                            </div>        
                            <div class="col-3">            
                                <p class="card-title serv-title">
                                    Preu Unitat<br>Sense IVA:
                                </p>             
                                <p class="card-title serv-title car_element"><b><?php echo number_format($row['precioNoIVA'],2);?> €</b></p>                                                                        
                            </div>          
                            <div class="col-2">            
                                <p class="card-title serv-title">
                                    Preu Total<br>Amb IVA:
                                </p>             
                                <p class="card-title serv-title car_element"><b><?php echo number_format($row['precioIVA']*$_SESSION['carrito_stock'][$key],2);?> €</b></p>                                                                        
                            </div>
                        </div><br>                   
                    </div>                       
                <?php } ?>  
                    <form id="pedido" name="pedido" action="/php/gen_pedido.php" method="POST">
                        <input class="carrito btn btn-outline-primary" type="button" value="Efectuar pedido" onclick="Pedido()"/> 
                        
                <?php }else{ ?>
                        <h1>EL CARRITO ESTÁ VACÍO<h1>
                <?php } ?> 
                        <div class="col-4">
                            <p>Prueba</p>
                            <p class="card-title serv-title">
                                Transporte:
                                <select id="transporte" name="transporte" class="form-control car_element">
                                    <?php 
                                        $qtrans = "SELECT * FROM transporte";
                                        $restrans = mysqli_query($conn, $qtrans);            
                            
                                        while ($row2 = mysqli_fetch_array($restrans)) { 
                                            echo "<option value='".$row2['idTransporte']."'>".$row2['nombre']."</option>"; 
                                        }
                                    ?>
                                </select>
                            </p>
                        </div>
                    </form>
                </div>
            </div>                      
        </section>
        <script>
            function Pedido(){
                if('<?php echo isset($_SESSION['user_id']) ;?>' != ''){
                    document.getElementById("pedido").submit();
                }else{
                    alert("¡Debes tener una cuenta para efectuar un pedido!");
                }
            }
        </script>
        <?php include_once $far.'php/comun/footer.php'; ?>        
    </body>
</html>