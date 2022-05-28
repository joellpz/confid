<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        $far="../";
        include $far.'php/comun/head.php';
    ?>  
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once $far.'content/header.php'; ?> <!-- CAMBIAR RUTA SEGUN UBI Insertar headers segun login -->
        <section class="m-4">

            <!--Section heading-->
            <div class="m-4 ms-auto">
                <div class="col-11 ms-auto">
                    <h2 class="col-md h1-responsive px-3 titulo">Contacta con ConfID</h2>
                    <hr class="col-4 opacity-100 mt-0 borde_title"/>
                </div>
            <!--Section description-->
                <?php if(isset($_GET['serv'])){ ?>
                    <p class="text-center mb-5">Contáctanos para confirmar una cita y personalizar al máximo nuestros servicios. ¡Responderemos lo antes posible!</p>
                <?php }else{ ?>
                    <p class="col-md text-center mb-5">¿Tienes alguna pregunta? Porfavor, Contacta directamente con nosotros. Nuestro equipo de profesionales estará encantado de atenderte.</p>
                <?php } ?>
            </div>
            <div class="row mx-auto mb-5">
                <!--Grid column-->
                <div class="col-md-6 mb-md-0 ms-auto">
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
                            <div class="m-3 form-check">
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
                <div class="col-md-3 text-center mx-auto">
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
        <div id="map-container-google-1" class="z-depth-1-half map-container" >
            <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.367172743641!2d2.24502365149851!3d41.45295107915634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4bb0c66730639%3A0x351e767696bdb218!2sColegio%20Cultural!5e0!3m2!1ses!2ses!4v1653667715473!5m2!1ses!2ses" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <?php include_once $far.'php/comun/footer.php'; ?>
        <script>
            function Enviado(){
                alert("¡Mensaje Enviado!");
            }
        </script>
    </body>
</html>