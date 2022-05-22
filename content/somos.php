<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        $far="../";
        include $far.'php/comun/head.php';
    ?>      
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once $far.'content/header.php'; ?>
        <section class="mb-12">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">¿Quienes Somos?</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Analizamos, Instalamos y Mejoramos</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5 text-center">
                   
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12 text-center">
                                <p>ConfID se trata de una empresa fundada en el año 2020 cuyo objetivo principal es reinventar el 
                                    concepto de la seguridad, el acceso y la vigilancia de localizaciones, tanto públicas como privadas.
                                    Aquello que nos diferencia de nuestros competidores es el trato con el cliente, desde ConfID hemos 
                                    sabido entender la necesidad que tiene el cliente de poder consultar, gestionar y recopilar los datos 
                                    referentes a sus sistemas de vigilancia y de control de accesos.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12 text-center">
                                <h2 class="h1-responsive font-weight-bold text-center my-4">Al otro lado, simepre estamos nosotros</h2>
                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12">
                            <p>  Contamos con expertos preparados para responder las 24 horas y 
                                protocolos de actuación basados en alerta directa a la policía.
                            </p>
                            </div>
                        </div>
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12 text-center">
                                <h2 class="h1-responsive font-weight-bold text-center my-4">Ofrecer un servicio de vigilacia y control a medida y con un enfoque realista</h2>
                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12">
                            <p>Desde ConfID tenemos siempre en cuenta la opinion de nuestros clientes y agradecemos su compromiso con nosotros
                                haciendonos crecer año tras año en más de un 12% de media anual.
                            </p>
                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <p>ConfID tiene un compromiso social con el medioambiente reduciendo al máximo cualquier elemento 
                                    contaminante tanto en nuestros productos, como en nuestro diseño, analisis e implementación
                                    de nuestros servicios.  
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="h1-responsive font-weight-bold text-center my-4">CONFID ES UN PROVEEDOR LÍDER DE SERVICIOS DE SEGURIDAD</h2>
                                <p>No es casualidad que una gran institución como PIMEC ( patronal que representa a las micro, pequeñas y 
                                    medianas empresas y autónomos de Cataluña ) nos ha escogido 
                                    como partners para ofrecer nuestros servicios de ciberseguridad a sus más de 128.000 socios. 
                                </p>
                            </div>
                        </div>
                        
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12 text-center">
                                <h3>Empresas col.laboradoras</h3>
                            </div>
                        </div>
                        <div class="row">

                            <!--Grid column 1-->
                            <div class="col-md-2 text-center">
                                <h4>Ayto. de Badalona</h4>
                                <img src="../../img/quienes_somos/badalona" width="40%">
                            </div>
                            <!--Grid column 2-->
                            <div class="col-md-2 text-center">
                                <h4>Estrella Damm</h4>
                                <img src="../../img/quienes_somos/estrella_damm" width="50%">
                            </div>
                            <!--Grid column 3-->
                            <div class="col-md-2 text-center">
                                <h4>F.C. Barcelona</h4>
                                <img src="../../img/quienes_somos/barcelona" width="40%">
                            </div>
                            <!--Grid column 4-->
                            <div class="col-md-2 text-center">
                                <h4>Saint Honore S.A.</h4>
                                <img src="../../img/quienes_somos/saint_honore" width="45%">
                            </div>
                            <!--Grid column 5-->
                            <div class="col-md-2 text-center">
                                <h4>Col.legi Cultural</h4>
                                <img src="../../img/quienes_somos/cultural" width="40%">
                            </div>
                            <!--Grid column 6-->
                            <div class="col-md-2 text-center">
                                <h4>Sarau 08911</h4>
                                <img src="../../img/quienes_somos/sarau" width="40%">
                            </div>
                        </div>
                   
                    <br>
                    <div class="col text-center">
                    <a class="btn btn-primary" href="productos.php" role="button">Nuestros Productos</a>
                        <a class="btn btn-primary" href="contacto.php" role="button">Contacta con ConfID</a>
                    </div>
                    <div class="status"></div>
                </div>
            </div>
        </section>

        <?php include_once $far.'php/comun/footer.php'; ?> 
    </body>
</html>