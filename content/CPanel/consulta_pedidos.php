<?php
    $file="Control Panel";
    $far="../../";
    include $far.'php/comun/head.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel ="stylesheet" href="/style/style.css"/> 
    </head>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
    <?php include_once $far.'content/header.php'; ?>
        <h2>Consulta y Gestión de Pedidos</h2>
        <table class="tabla_cp" border= "1">
            <thead style="color: white">
                <tr style="background-color: #646CDF;">
                    <th>Nº Pedido</th>
                    <th>Precio Total</th>
                    <th>idUsuario</th>
                    <th>Nombre</th>
                    <th>Nº Pedido Externo</th>
                    <th>Información</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $consulta = "SELECT * FROM pedidos, clientes WHERE clientes.idUsuario = pedidos.idUsuario";
                    $res = mysqli_query($conn, $consulta);  
                    
                    while ($row = mysqli_fetch_array($res)) {
                        echo '<tr>';
                        echo '<td>' . $row['idPedido'] . '</td>';
                        echo '<td>' . $row['precioPedido'] . '</td>';
                        echo '<td>' . $row['idUsuario'] . '</td>';
                        echo '<td>' . $row['alias'] . '</td>';
                        echo '<td>' . $row['pedidoExterno'] . '</td>';
                        echo '<td> <button type="button" class="btn btn-primary launch" data-toggle="modal" data-target="#ped' . $row['idPedido'] . '"> <i class="bx bx-info-circle fot_icon align-middle" ></i> Más Información</button> </td>';
                        echo '</tr>';
                                        
                    $consulta_detped = "SELECT * FROM detallespedidos, productos WHERE idProducto = idProductos AND idPedido =". $row['idPedido']."";
                    $res_detped = mysqli_query($conn, $consulta_detped);
                    
                ?>
                <div class="modal fade" id="ped<?php echo $row['idPedido'] ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">                                        
                                <div class="px-4 py-5">
                                    <h5 class="text-uppercase">Pedido Numero: <?php echo $row['idPedido'] ?></h5>
                                    <h4 class="mt-5 theme-color mb-5">¡Compra realizada correctamente!</h4>
                                    <h3 class="mt-5 theme-color mb-5">Gracias por confiar en nosotros para su seguridad.</h3>
                                    <span class="theme-color">Resumen del pedido</span>
                                    <div class="mb-3">
                                        <hr class="new1">
                                    </div>

                                    <?php
                                    while($row_detped = mysqli_fetch_array($res_detped)){
                                        echo '<div class="d-flex justify-content-between">';
                                        echo '<span class="font-weight-bold">'. $row_detped['nombre'].'(Cantidad:'. $row_detped['cantidad'].')</span>';
                                        echo '<span class="text-muted">'. $row_detped['precioTotal'].' €</span>';
                                        echo '</div>';
                                    }
                                ?>
                                    <br>
                                    <div class="d-flex justify-content-between">
                                        <small>Portes</small>
                                        <small><?php echo round($row['precioPedido']*0.1, 2)?> €<small>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <small>IVA (21%)</small>
                                        <small><?php echo round($row['precioPedido']*0.21, 2)?> €</small>
                                    </div>
                                    
                                    <div class="d-flex justify-content-between mt-3">
                                        <span class="font-weight-bold">Total</span>
                                        <span class="font-weight-bold theme-color"><?php echo number_format($row['precioPedido'], 2);?> €</span>
                                    </div>  

                                    <div class="text-center mt-5">
                                        <button class="btn btn-primary" data-dismiss="modal">Volver a Pedidos</button>                                
                                    </div>                   
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <?php
                    }
                ?>
            </tbody>
        </table>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>