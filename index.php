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
                <div class="carousel-item active">
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
                <img id='prod' src="/img/productos/servicio1.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img id='prod' src="/img/productos/servicio2.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>  
        </div>
        </div>
        <br><br>

        <!-- Bloque de introducción al contacto -->
        <div class="row bloque_contacto">
            <div class="col-6 textos text-center" style="padding: 5%;">
                <h2 class="">¡Contacta con nosotros!</h2>
                <p class="m-5">Si tienes cualquier duda sobre nuestros servicios, o si crees que <br>necesitas un sevicio a medida puedes enviarnos un mail <br>haciendo clic en el siguiente botón.</p>
                <a class="btn btn-primary px-5 py-2" href="contacto.php" role="button">¡Contacta!</a>
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
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="/img/productos/14.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>  
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="/img/productos/16.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once $far.'php/comun/footer.php'; ?>
    </body>
</html>