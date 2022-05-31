<!DOCTYPE html>
<html>
    <?php
        $file=basename(__FILE__, '.php');
        $far="../";
        include $far.'php/comun/head.php';
    ?>

    <!--DESPLEGABLE CON LOS TRANSPORTISTAS-->

    <link rel ="stylesheet" href="/style/caja_prods.css"/>
    <link rel ="stylesheet" href="/style/cart_style.css"/>
    <style>
        
    </style>
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd' onload='Sinacceso()";}?>'>
        <section style="min-height:700px">     
            <?php
                include_once $far.'content/header.php';
            ?>
            <div class="bloque">
                <div class="cart_section">
                    <div class="container-fluid">
                        <div class="row">
                        <?php if(isset($_SESSION['carrito_prod'])){ ?>                        
                            <div class="col-lg-10 offset-lg-1">                            
                                <div class="cart_container">
                                    <div class="cart_title">
                                        Carrito de <?php if(isset($_SESSION['user_id'])){ echo $_SESSION['user_name']; }else{ echo 'productos'; }?>
                                        <small> (<?php if(count($_SESSION['carrito_prod']) == 1){ echo '1 producto';}else{ echo count($_SESSION['carrito_prod']).' productos';}?> en tu carrito) </small>
                                    </div>
                                    <div class="cart_items">
                                        <ul class="cart_list">
                                        <?php                                     
                                            $sum=0;
                                            $cont=1;
                                            foreach ($_SESSION['carrito_prod'] as $key => $id_prod) {                             
                                                $qcateg = 'SELECT * FROM productos WHERE idProductos = '.$id_prod;
                                                $rescat = mysqli_query($conn, $qcateg);
                                                $row = mysqli_fetch_array($rescat);
                                        ?>
                                                <li class="cart_item clearfix">
                                                    <div class="cart_item_image">
                                                        <?php 
                                                            if(file_exists("../img/productos/".$row['idProductos'].".png")){
                                                                $img = "/img/productos/".$row['idProductos'].".png";
                                                            }else{
                                                                $img = "/img/nophoto.png";
                                                            }
                                                        ?>                                     
                                                        <img src="<?php echo $img; ?>">
                                                    </div>
                                                    <div class="cart_item_info d-flex flex-md-row flex-column justify-content-between">
                                                        <div class="cart_item_name cart_info_col" style="width:15%;">
                                                            <div class="cart_item_title">Nombre</div>
                                                            <div class="cart_item_text"><?php echo $row['nombre'];?></div>
                                                        </div>
                                                        <div class="cart_item_color cart_info_col">
                                                            <div class="cart_item_title">Cantidad</div>                                                            
                                                                <div class="cart_item_text">
                                                            <?php if($_SESSION['carrito_stock'][$key] <= $row['stock']){?>
                                                                    <select id="cantidad<?php echo $id_prod; ?>" name="cantidad" class="form-control car_element <?php echo $row['idProductos']; ?>">
                                                                    <?php for($i=1; $i<=$row['stock']; $i++) if($i == $_SESSION['carrito_stock'][$key])echo "<option selected>".$i."</option>"; else echo "<option>".$i."</option>";
                                                                }else{?>                                           
                                                                    <select id="cantidad" name="cantidad" class="form-control car_element <?php echo $row['idProductos']; ?>">
                                                                    <?php for($i=1; $i<=$row['stock']; $i++) if($i == $row['stock'])echo "<option selected>".$i."</option>"; else echo "<option>".$i."</option>";
                                                                }
                                                            ?>                                                                
                                                                    </select>
                                                                </div>
                                                        </div>
                                                        <div class="cart_item_quantity cart_info_col">
                                                            <div class="cart_item_title">Precio(SIN IVA)</div>
                                                            <div class="cart_item_text"><?php echo number_format($row['precioNoIVA'],2);?> €</div>
                                                        </div>
                                                        <div class="cart_item_price cart_info_col">
                                                            <div class="cart_item_title">Precio(IVA)</div>
                                                            <div class="cart_item_text"><?php echo number_format($row['precioIVA'],2);?> €</div>
                                                        </div>
                                                        <div class="cart_item_total cart_info_col">
                                                            <div class="cart_item_title">Total(IVA)</div>
                                                            <div class="cart_item_text"><?php echo number_format($row['precioIVA']*$_SESSION['carrito_stock'][$key],2);?> €</div>
                                                        </div>
                                                        <div class="cart_item_total cart_info_col">
                                                            <div class="cart_item_text" onclick="DelProd(<?php echo $row['idProductos']; ?>, 0, 1)"><i class='bx bxs-shield-x foot_icon cross' style="font-size:30px;color:#646CDF;"></i></div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <?php if($cont != count($_SESSION['carrito_prod'])) echo '<hr>'; ?>
                                        <?php 
                                            $cont++;
                                            $sum += $row['precioIVA']*$_SESSION['carrito_stock'][$key]; 
                                        } ?>
                                        </ul>
                                    </div>
                                    <div class="order_total">
                                        <div class="order_total_content text-md-right">
                                            <div class="order_total_title">Total del Carrito:&nbsp&nbsp&nbsp&nbsp<b style="color:black;font-size:20px"><?php echo Number_format($sum,2);?> € (IVA)</b></div>
                                        </div>
                                    </div><br>
                                    <form id="pedido" name="pedido" action="/php/gen_pedido.php" method="POST">
                                        <span style="display:inline">
                                            <h3>Transporte:<h3>
                                            <select id="transporte" name="transporte" class="form-control car_element" style="width:20%;min-width:200px;">
                                                <?php 
                                                    $qtrans = "SELECT * FROM transporte";
                                                    $restrans = mysqli_query($conn, $qtrans);            
                                        
                                                    while ($row2 = mysqli_fetch_array($restrans)) { 
                                                        echo "<option value='".$row2['idTransporte']."'>".$row2['nombre']."</option>"; 
                                                    }
                                                ?>
                                            </select>
                                        </span>
                                        <div class="cart_buttons">
                                            <span style="display:inline">
                                                <input class="carrito btn btn-outline-primary" type="button" value="Efectuar pedido" onclick="Pedido()"/>
                                            </span>
                                        </div>                                     
                                    </form>
                            <?php }else{ ?>
                                <div class="text-center">
                                    <h1>Lo sentimos, por el momento tu carrito está vacío...<h1>
                                        <br><br>
                                    <a href="/content/productos.php" class="carrito btn btn-outline-primary col-6 m-5">Ver Productos</a>
                                </div>
                            <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>            
        </section>
        <script>
            <?php
            foreach ($_SESSION['carrito_prod'] as $key => $id_prod) { 
                echo "$('#cantidad".$id_prod."').on('change', function(){
                    cant = document.getElementById('cantidad".$id_prod."').value;
                    id = document.getElementById('cantidad".$id_prod."').className.split(' ');
                    DelProd(id[2],cant,2);                    
                });";
            }
            ?>
            function DelProd(id, cant, mode){
                $.post("/php/carrito.php", { ident: id, stock: cant, m: mode} ); 
                location.href = "../content/page_carrito.php";      
            }
            function Pedido(){
                if('<?php echo isset($_SESSION['user_id']) ;?>' != ''){
                    document.getElementById("pedido").submit();
                }else{
                    alert("¡Debes tener una cuenta para efectuar un pedido!");
                }
            }
            function Sinacceso(){
                        alert("¡Los trabajadores no pueden realizar compras!");
                        location.href = "../index.php";
                    }
        </script>
        <?php include_once $far.'php/comun/footer.php'; ?>        
    </body>
</html>