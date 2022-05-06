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
                                <a class="nav-link" href="somos.php">Quienes Somos</a>
                            </li> 
                            <li class="nav-item px-2" role="presentation">
                                <a class="nav-link" href="productos.php">Productos</a>
                            </li>
                            <li class="nav-item px-2" role="presentation">
                                <a class="nav-link" href="contacto.php">Contacto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
        </div>
      
         
    </body>
</html>