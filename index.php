<!DOCTYPE html>
<html>
    <?php 
        $file="Inicio";
        $far="";
        include $far.'php/comun/head.php';
    ?>      
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php include_once $far.'content/header.php';?>
        <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel"> <!-- Las imagenes deberian tener el mismo tamaño o proporción. Tener en cuenta al escoger las imagenes el color del carousel-->
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="/img/portadas/portada1.jpg" class="d-block w-100" alt=""> 
                </div>
                <div class="carousel-item">
                    <img src="/img/portadas/portada2.jpg" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="/img/portadas/portada3.jpg" class="d-block w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br><br>

        <!-- Bloque de servicios destacados -->
        <div class="container servicios_destacados">
            <div class="row align-items-center">
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="/img/productos/44.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="m-2" style="font-weight:bold;">Instalación Local</h4>
                            <div class="m-2" style="text-align: justify;" >
                                <p>Implementaci&oacute;n de un sistema simple que cuenta una seleccion variada de nuestros productos, como por ejemplo un decodificador de gama baja y accesorios RFC gratuitos.</p>
                                <p>Una vez implementado nos haremos cargo de monitorear, revisar y mantener los dispositivos. Ideal para oficinas y locales de peque&ntilde;o tama&ntilde;o o pocas salas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="/img/productos/43.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="m-2" style="font-weight:bold;">Plan Personalizado</h4>
                            <p class="m-2" style="text-align: justify;">Si crees que nuestros servicios no se adaptan completamente a tu empresa, local, lugar de trabajo... Cont&aacute;ctanos y estudiaremos espec&iacute;ficamente tu caso para adaptarlo de la manera m&aacute;s personalizada. Nuestros expertos realizar&aacute;n un estudio preliminar de su sistema, evaluar&aacute;n tanto un sistema ya implementado, contando la posibilidad de realizarle modificaciones para mejorar la seguridad o incluso implantar uno nuevo desde cero.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

        <!-- Bloque de introducción al contacto -->
        <div class="row bloque_contacto">
            <div class="col-6 textos text-center" style="padding: 5%;">
                <h2 style="font-weight:bold;">¡Contacta con nosotros!</h2>
                <p class="m-5">Si tienes cualquier duda sobre nuestros servicios, o si crees que <br>necesitas un sevicio a medida puedes enviarnos un mail <br>haciendo clic en el siguiente botón.</p>
                <a class="btn btn-primary px-5 py-2" href="contacto.php" role="button" style="font-weight:bold;">¡Contacta!</a>
            </div>
        </div>
        <br><br>
        
        <!-- Bloque de productos destacados -->       
        <div class="container productos_destacados">
            <div class="row align-items-center">
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="/img/productos/8.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">PA-2781</h5>
                            <p class="card-text">Cámara interior con rotación horizontal (240 gramos)</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="/img/productos/14.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Nivian NV</h5>
                            <p class="card-text">Cámara IP 1/2.7" Progressive CMOS 5 Megapixel (259 gramos)</p>
                        </div>
                    </div>
                </div>  
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="/img/productos/16.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Anviz camera 6.4</h5>
                            <p class="card-text">Cámara interior con rotación horizontal (180 gramos)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once $far.'php/comun/footer.php'; ?>
    </body>
</html>