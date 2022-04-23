<!DOCTYPE html>
<html>
    <?php 
        $file="inicio";
        include 'head.php';
    ?>  

    <style>
        .card{
        border-radius: 30px;
        
        }
    </style>
    
    <body>
        <?php include_once 'header.php'; ?>
        <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel"> <!-- Las imagenes deberian tener el mismo tamaño o proporción. Tener en cuenta al escoger las imagenes el color del carousel-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/img-horizontal.png" class="d-block w-50" alt=""> 
                    <div class="carousel-caption d-none d-md-block"> 
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/img-horizontal.png" class="d-block w-50" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/img-horizontal.png" class="d-block w-50" alt="">
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
                <img src="/img/img-cuadrada.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
            </div>
            <div class="col">
            <div class="card h-100">
                <img src="/img/img-cuadrada.png" class="card-img-top" alt="...">
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
                    <img src="img/img-cuadrada.png" style="width: 100%;"/>
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
                        <img src="/img/img-cuadrada.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="/img/img-cuadrada.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        </div>
                    </div>
                </div>  
                <div class="col">
                    <div class="card h-100">
                        <img src="/img/img-cuadrada.png" class="card-img-top" alt="...">
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