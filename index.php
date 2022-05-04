<!DOCTYPE html>
<html>
    <?php 
        $file="inicio";
        include 'head.php';
    ?>      
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once 'header.php'; ?>
        <div class="navegacion">
            <nav class="navbar nav nav-pills  navbar-expand-lg navbar-light bg-light ">
                <div class="container p-2 border-bottom">
                    <a class="navbar-brand me-2" href="index.php">
                        <img src="img/logo/LogoMenu-CONFID.png" width="150" alt="CONFID Logo" loading="lazy"/>
                    </a>
                    <div class="flex-row navbar-nav ms-auto justify-content-end">
                        <ul class="flex-row nav nav-pills ms-auto justify-content-end">
                            <li class="nav-item px-2" role="presentation">
                                <a class="nav-link" href="index.php">Inicio</a>
                            </li>
                            <li class="nav-item px-2" role="presentation">
                                <a class="nav-link" href="#">Quienes Somos</a>
                            </li> 
                            <li class="nav-item px-2" role="presentation">
                                <a class="nav-link" href="productos.php">Productos</a>
                            </li>
                            <li class="nav-item px-2" role="presentation">
                                <a class="nav-link" href="contacto.html">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
        </div>

        <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel"> <!-- Las imagenes deberian tener el mismo tamaño o proporción. Tener en cuenta al escoger las imagenes el color del carousel-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/productos/portada1.jpg" class="d-block w-100" alt=""> 
                    <div class="carousel-caption d-none d-md-block"> 
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/productos/portada2.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/productos/portada3.jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
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
                <img id='prod' src="img/productos/servicio1.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img id='prod' src="img/productos/servicio2.png" class="card-img-top" alt="...">
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
        <div class="container bloque_contacto" style="border: 2px solid black; border-radius: 30px;">
            <div class="row align-items-center">
                <div class="col-6 imagen">
                    <img id='prod' src="img/logo/CONFID-Logo.png" style="width: 100%;"/>
                </div>
                <div class="col-6 textos" style="text-align: center; padding: 10%;">
                    <h3>Contacta con nosotros</h3><br><br>
                    <p>Si tienes cualquier duda sobre nuestros servicios, o si crees que necesitas un sevicio a medida puedes enviarnos un mail haciendo clic aquí</p>
                    <a class="btn btn-primary" href="contacto.html" role="button">Contacta!</a>
                </div>
            </div>
        </div>
        <br><br>

        <!-- Bloque de productos destacados -->       
        <div class="container productos_destacados">
            <div class="row align-items-center">
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="img/productos/8.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="img/productos/14.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>  
                <div class="col">
                    <div class="card h-100">
                        <img id='prod' src="img/productos/16.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>