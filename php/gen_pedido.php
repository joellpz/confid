<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        $far="../";
        include $far.'php/comun/head.php';        
    ?>  

    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?> style=""'>
    <?php include_once $far.'content/header.php'; ?>
        <?php
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

                    //INSERT EN DETALLES PEDIDOS CON TODO                
                    $idetped = "INSERT INTO detallespedidos VALUES('$id_ped', '$id_prod', '$precioPorProd', '$trans', '$cant')";        
                    mysqli_query($conn, $idetped); 

                    $precioPedido += $precioPorProd;
                    echo $precioPedido.'--';
                }

                //ULTIMO INSERT A PEDIDOS CON LA SUMA DE PRECIOS DE TODOS LOS PRODUCTOS DEL PEDIDO
                $iPedPrec = "UPDATE pedidos SET precioPedido = '$precioPedido' WHERE idPedido = $id_ped";
                mysqli_query($conn, $iPedPrec);
            }
        ?>
    <?php include_once $far.'php/comun/footer.php'; ?>
    </body>
</html>  