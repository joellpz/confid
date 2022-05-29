<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        $far="../";
        include $far.'php/comun/head.php';        
    ?>  

    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
    
        <?php
            if(isset($_POST['transporte'])){
                include_once $far.'content/header.php';

                $date = date("Y-m-d"); //Fecha creacion de pedido
                $pedExt = rand(10000, 99999); //Pedido Externo

                //PRIMER INSERT DE PEDIDO PARA SU CREACIÓN, SIN PRECIO TOTAL.
                $iped = "INSERT INTO pedidos (fecha, idUsuario, pedidoExterno) VALUES ('$date', '".$_SESSION['user_id']."', '$pedExt')";
                mysqli_query($conn, $iped);
        
                //Consulta valor del ID del pedido creado.
                $last = "SELECT MAX(idPedido) FROM pedidos";
                $reslast = mysqli_query($conn, $last); 
                $id = mysqli_fetch_row($reslast);
                $id_ped = intval($id[0]);

                //TRansporte
                $trans = $_POST['transporte'];

                if(isset($_SESSION['carrito_prod'])){

                    $precioPedido=0;//Inicialización del sumatorio del precio total del pedido.

                    foreach ($_SESSION['carrito_prod'] as $key => $id_prod) {

                        //Consulta y cálculo del precio de un producto por la cantidad solicitada.
                        $qprod = 'SELECT precioNoIVA FROM productos WHERE idProductos = '.$id_prod;
                        $resprod = mysqli_query($conn, $qprod);
                        $pProd = mysqli_fetch_row($resprod);
                        $cant = $_SESSION['carrito_stock'][$key];
                        $precioPorProd = $pProd[0] * $cant;

                        $uProd = "UPDATE productos SET stock = stock - $cant WHERE idProductos = ".$id_prod;
                        mysqli_query($conn, $uProd);

                        //INSERT EN DETALLES PEDIDOS CON TODO                
                        $idetped = "INSERT INTO detallespedidos VALUES('$id_ped', '$id_prod', '$precioPorProd', '$trans', '$cant')";        
                        mysqli_query($conn, $idetped); 

                        $precioPedido += $precioPorProd;
                    }

                    $precioPedido *= 1.1;
                    //ULTIMO INSERT A PEDIDOS CON LA SUMA DE PRECIOS DE TODOS LOS PRODUCTOS DEL PEDIDO
                    $uPedPrec = "UPDATE pedidos SET precioPedido = '$precioPedido' WHERE idPedido = $id_ped";
                    mysqli_query($conn, $uPedPrec);

                    unset($_SESSION['carrito_prod']);
                    unset($_SESSION['carrito_stock']);
                    flush();
                }
            ?>

            <div id="ped<?php echo $id_ped ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">                                        
                            <div class="px-4 py-5">
                                <h5 class="text-uppercase">Pedido Numero: <?php echo $id_ped ?></h5>
                                <h4 class="mt-5 theme-color mb-5">Gracias por realizar la compra.</h4>
                                <h3 class="mt-5 theme-color mb-5">Gracias por confiar en nosotros para su seguridad.</h3>
                                <span class="theme-color">Resumen del pedido</span>
                                <div class="mb-3">
                                    <hr class="new1">
                                </div>

                                
                                <?php
                                $consulta_detped = "SELECT * FROM detallespedidos, productos WHERE idProducto = idProductos AND idPedido = $id_ped";
                                $res_detped = mysqli_query($conn, $consulta_detped);

                                while($row_detped = mysqli_fetch_array($res_detped)){
                                    echo '<div class="d-flex justify-content-between">';
                                    echo '<span class="font-weight-bold">'. $row_detped['nombre'].'(Cantidad:'. $row_detped['cantidad'].')</span>';
                                    echo '<span class="text-muted">'. $row_detped['precioTotal'].' €</span>';
                                    echo '</div>';
                                }
                            ?>
                                <br>
                                <div class="d-flex justify-content-between">
                                    <small>Envio</small>
                                    <small><?php echo round($precioPedido/1.1*0.1, 2);?> €<small>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <small>IVA (21%)</small>
                                    <small><?php echo round($precioPedido*0.21, 2);?> €</small>
                                </div>
                                
                                <div class="d-flex justify-content-between mt-3">
                                    <span class="font-weight-bold">Total</span>
                                    <span class="font-weight-bold theme-color"><?php echo number_format($precioPedido*1.21, 2); ?> €</span>
                                </div>  

                                <div class="text-center mt-5">
                                    <button class="btn btn-primary" data-dismiss="modal">Volver a Pedidos</button>                                
                                </div>                   
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }else{ header('Location: ../index.php');}?>
    <?php include_once $far.'php/comun/footer.php'; ?>
    </body>
</html>  