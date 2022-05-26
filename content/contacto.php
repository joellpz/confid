<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        $far="../";
        include $far.'php/comun/head.php';
    ?>  
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once $far.'content/header.php'; ?> <!-- CAMBIAR RUTA SEGUN UBI Insertar headers segun login -->
        <section class="mb-4">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contacta con ConfID</h2>
            <!--Section description-->
            <?php if(isset($_GET['serv'])){ ?>
                <p class="text-center w-responsive mx-auto mb-5">Contáctanos para confirmar una cita y personalizar al máximo nuestros servicios. ¡Responderemos lo antes posible!</p>
            <?php }else{ ?>
                <p class="text-center w-responsive mx-auto mb-5">¿Tienes alguna pregunta? Porfavor, Contacta directamente con nosotros. Nuestro equipo de profesionales estará encantado de atenderte.</p>
            <?php } ?>
            <div class="row">

                <!--Grid column-->
                <div class="col-md-8 mb-md-0 mb-5 contact">
                    <form id="contact-form" name="contact-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="Enviado()" method="POST" >

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Nombre</label>
                                    <input type="text" id="name" name="name" class="form-control" required>
                                    
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Correo Electrónico</label>
                                    <input type="email" id="email" name="email" class="form-control" required>
                                    
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <label for="subject" class="">Asunto</label>
                                    <input type="text" id="subject" name="subject" class="form-control" required>
                                    
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <label for="message">Mensaje</label>
                                    <textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea" required></textarea>
                                
                                </div>

                            </div>
                            
                        </div>
                        <!--Grid row-->
                        <div class="row">
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="TerminosCondiciones" required>
                                <label class="form-check-label" for="TerminosCondiciones">He leido y acepto los <a class="text-decoration-none"  href="/content/term_cond.php">Terminos y Condiciones</a>.</label>
                            </div>
                        </div>
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" value="Enviar"></button>
                            <a class="btn btn-primary" href="/index.php" role="button">Volver a Inicio</a>
                         </div>
                    </form>
                    <br>
                    
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="bx bx-map-alt mt-4 align-middle" style="font-size: 1.80rem;"></i>
                            <p>Carrer Marina, 150, 08911 Badalona</p>
                        </li>

                        <li><i class="bx bxs-phone mt-4" style="font-size: 1.80rem;"></i>
                            <p>Tel: 93.589.56.87</p>
                        </li>

                        <li><i class="bx bx-envelope mt-4" style="font-size: 1.80rem;"></i>
                            <p>info@confid.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->
            </div>
        </section>
        <?php include_once $far.'php/comun/footer.php'; ?>
        <script>
            function Enviado(){
                alert("¡Mensaje Enviado!");
            }
        </script>
    </body>
</html>