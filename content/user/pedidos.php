<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        /* $file= "C. Panel"; */ // Panel de Administador SOLO
        $far="../../";//Distancia para llegar a la general.
        include $far.'php/comun/head.php';//CAMBIAR RUTA SEGUN UBI
    ?>  
    <body classname="snippet-body" class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once $far.'content/header.php'; ?>
        <section style="min-height: 700px">                        
            <button type="button" class="btn btn-primary launch" data-toggle="modal" data-target="#staticBackdrop"> <i class="fa fa-info"></i> Get information</button>
            <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="text-right"> <i class="fa fa-close close" data-dismiss="modal"></i> </div>
                            
                            <div class="px-4 py-5">
                                <h5 class="text-uppercase">Jonathan Adler</h5>
                                <h4 class="mt-5 theme-color mb-5">Thanks for your order</h4>

                                <span class="theme-color">Payment Summary</span>
                                <div class="mb-3">
                                    <hr class="new1">
                                </div>

                                <div class="d-flex justify-content-between">
                                    <span class="font-weight-bold">Ether Chair(Qty:1)</span>
                                    <span class="text-muted">$1750.00</span>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <small>Shipping</small>
                                    <small>$175.00</small>
                                </div>

                                <div class="d-flex justify-content-between">
                                    <small>Tax</small>
                                    <small>$200.00</small>
                                </div>
                                
                                <div class="d-flex justify-content-between mt-3">
                                    <span class="font-weight-bold">Total</span>
                                    <span class="font-weight-bold theme-color">$2125.00</span>
                                </div>  

                                <div class="text-center mt-5">
                                    <button class="btn btn-primary">Track your order</button>                                
                                </div>                   
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section> 
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
                                <script type="text/javascript">
                                var myLink = document.querySelectorAll('a[href="#"]');
                                myLink.forEach(function(link){
                                  link.addEventListener('click', function(e) {
                                    e.preventDefault();
                                  });
                                });
                               </script>
        <?php include_once $far.'php/comun/footer.php'; ?>
    </body>
</html>