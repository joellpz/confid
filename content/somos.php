<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        $far="../";
        include $far.'php/comun/head.php';
    ?>      
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once $far.'content/header.php'; ?>
        <section class="m-5">

            <!--Título-->
            <h2 class="col-md h1-responsive px-3 titulo">¿Quiénes Somos?</h2>
            <hr class="col-4 opacity-100 mt-0 borde_title"/>
            <!--Subtítulo-->
            <h4 class="text-center w-responsive mx-auto mb-5">Analizamos, Instalamos y Mejoramos</h4>

            <div class="row somos">

                <!--Grid column-->
                <div class="col-md-12 mb-md-0 mb-5 text-center">                  
                        <!--Grid row-->
                        <div class="row">
                            <!--Texto 1-->
                            <div class="col-md-12 text-justify">
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
                            <div class="col-md-12 text-justify">
                                <h2 class="h1-responsive font-weight-bold text-center my-4">Al otro lado, siempre estamos nosotros</h2>
                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="row">
                            <!--Texto 2-->
                            <div class="col-md-12 text-justify">
                            <p>  Contamos con expertos preparados para responder las 24 horas y 
                                protocolos de actuación basados en alerta directa a la policía.
                            </p>
                            </div>
                        </div>
                        <div class="row">
                            <!--Grid column-->
                            <div class="col-md-12 text-justify">
                                <h2 class="h1-responsive font-weight-bold text-center my-4">Ofrecer un servicio de vigilacia y control a medida y con un enfoque realista</h2>
                            </div>
                        </div>
                        <!--Grid row-->
                        <div class="row">
                            <!--Texto 3-->
                            <div class="col-md-12 text-justify">
                            <p>Desde ConfID tenemos siempre en cuenta la opinion de nuestros clientes y agradecemos su compromiso con nosotros
                                haciendonos crecer año tras año en más de un 12% de media anual. Por todo ello hemos decidido llenar este año 2022
                                de descuentos y recompensas muy interesantes por la contratación de nuestros servicios.
                            </p>
                            </div>
                        </div>
                        <!--Items de empresa-->
                        <div class="container servicios_destacados">
                            <div class="row align-items-center">
                                <div class="col">
                                <div class="card h-100">
                                    <img id ="poli" src="/img/quienes_somos/patrulla.png" class="card-img-top"  alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Cada segundo cuenta</h5>
                                    <p class="card-text">Comprobamos que ocurre y en segundos
                                         avisamos a la Policía.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="col">
                                <div class="card h-100">
                                    <img id='app' src="/img/quienes_somos/app.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Aplicación de Gestión Autónoma</h5>
                                    <p class="card-text">Controle sus cámaras y accesos directamente desde nuestra aplicación.</p>
                                    </div>
                                </div>
                                </div>
                                <div class="col">
                                <div class="card h-100">
                                    <img id='vig' src="/img/quienes_somos/vigilancia.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                    <h5 class="card-title">Expertos en Seguridad y Vigilancia</h5>
                                    <p class="card-text">Con un gran equipo detrás en el que confiamos
                                        para que tu estes tranquilo.
                                    </p>
                                    </div>
                                </div>
                                </div>    
                            </div>
                        </div>
                        <br>
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">
                                <p>ConfID tiene, gracias a su gran Política de Responsabilidad Social Coorporativa, un compromiso social con el medioambiente reduciendo al máximo cualquier elemento 
                                    contaminante tanto en nuestros productos, como en nuestro diseño, analisis e implementación
                                    de nuestros servicios.  
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <h2 class="h1-responsive font-weight-bold text-center my-4">CONFID ES UN PROVEEDOR LÍDER DE SERVICIOS DE SEGURIDAD</h2>
                                <p>Por todo lo mencionado anteriormente, no es casualidad que una gran institución como PIMEC ( patronal que representa a las micro, pequeñas y 
                                    medianas empresas y autónomos de Cataluña ) nos ha escogido 
                                    como partners para ofrecer nuestros servicios de ciberseguridad a sus más de 128.000 socios. 
                                </p>
                            </div>
                        </div>                       
                        <!--margen verical al div de las empresas-->
                        <div class="my-5">
                            <div class="row">
                                <!--Empresas-->
                                <div class="col-md-12 text-center">
                                    <h3>Empresas colaboradoras</h3>
                                </div>
                            </div>
                            <div class="row">

                                <!--Logo 1-->
                                <div class="col-md-2 text-center">
                                    <h4>Ayto. de Badalona</h4>
                                    <img src="/img/quienes_somos/badalona.png" alt="ayunt_badalona" width="100px">
                                </div>
                                <!--Logo 2-->
                                <div class="col-md-2 text-center">
                                    <h4>Estrella Damm</h4>
                                    <img src="/img/quienes_somos/estrella_damm.png" alt="estrella_dam" width="135px">
                                </div>
                                <!--Logo 3-->
                                <div class="col-md-2 text-center">
                                    <h4>F.C. Barcelona</h4>
                                    <img src="/img/quienes_somos/barcelona.png" alt="barça" width="100px">
                                </div>
                                <!--Logo 4-->
                                <div class="col-md-2 text-center">
                                    <h4>Saint Honore S.A.</h4>
                                    <img src="/img/quienes_somos/saint_honore.png" alt="saint_honore" width="115px">
                                </div>
                                <!--Logo 5-->
                                <div class="col-md-2 text-center">
                                    <h4>Col.legi Cultural</h4>
                                    <img src="/img/quienes_somos/cultural.png" alt="collegi_cultural" width="150px">
                                </div>
                                <!--Logo 6-->
                                <div class="col-md-2 text-center">
                                    <h4>Sarau 08911</h4>
                                    <img src="/img/quienes_somos/sarau.jpg" width="100px">
                                </div>
                            </div>
                        </div>
                    <br>
                    <div class="my-5">
                        <div class="row">
                                <!--Grid column-->
                                <div class="col-md-12 text-center">
                                    <h3>Nuestro Equipo</h3>
                                    <h3>Nuestro mayor valor diferencial</h3>
                                </div>
                                <div class="col-md-12 text-center">
                                    <p>Contamos con un equipo de dirección y control experto en el sector y comprometido
                                        con la empresa para dar la mayor eficacia y servicio en todo momento.
                                        Contamos con un talento comprometido y emprendedor. Promovemos un entorno de trabajo 
                                        basado en la igualdad de oportunidades, la diversidad y la inclusión, 
                                        e impulsamos formas de trabajo que faciliten el equilibrio entre la vida personal y la profesional.
                                    </p>
                                </div>
                            </div>
                            <div max-width="50%">
                                <div class="container servicios_destacados">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <div class="card h-100">
                                            <img id ="poli" src="/img/quienes_somos/caras/ceo.jpg" class="card-img-top"  alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">Germán Palomares</h5>
                                            <p class="card-text" style="width:90%">Dirección General</p>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="card h-100">
                                            <img id='app' src="/img/quienes_somos/caras/inter.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">Daisy Xiang Meng</h5>
                                            <p class="card-text" style="width:90%">Dir. Ventas Internacional</p>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="card h-100">
                                            <img id='vig' src="/img/quienes_somos/caras/rrhh.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">T. J. Jackson Jr.</h5>
                                            <p class="card-text" style="width:90%">Dir. Recursos Humanos</p>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="card h-100">
                                            <img id='vig' src="/img/quienes_somos/caras/sac.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">Hannah Montana</h5>
                                            <p class="card-text" style="width:90%">Dirección S.A.C.</p>
                                            </div>
                                        </div>
                                        </div>  
                                    </div>
                                </div>
                                <br>
                                <div class="container servicios_destacados">
                                    <div class="row align-items-center">
                                        <div class="col">
                                        <div class="card h-100">
                                            <img id ="poli" src="/img/quienes_somos/caras/tech.jpg" class="card-img-top"  alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">Jason Smith</h5>
                                            <p class="card-text" style="width:90%">Dirección Tecnológica</p>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="card h-100">
                                            <img id='app' src="/img/quienes_somos/caras/finan.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">Michael Sappin</h5>
                                            <p class="card-text" style="width:90%">Dirección Financiera</p>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="card h-100">
                                            <img id='vig' src="/img/quienes_somos/caras/ventas.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">Leo Margets</h5>
                                            <p class="card-text" style="width:90%">Dirección de Ventas</p>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col">
                                        <div class="card h-100">
                                            <img id='vig' src="/img/quienes_somos/caras/desarrollo.jpg" class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">Antonio Parrales</h5>
                                            <p class="card-text" style="width:90%">Dirección de Desarrollo</p>
                                            </div>
                                        </div>
                                        </div>  
                                    </div>
                                </div>  
                            </div>
                        </div>
                        </div>
                    <div class="col text-center my-3">
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