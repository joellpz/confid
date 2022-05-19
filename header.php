<style>
    
    .in-se{
    width: 500px;
    }

    .btn-primary{
        background-color: var(--first-color);
    }

    .btn-primary:hover{
        background-color:  #535253a9;
    }

</style>
<header>
    <?php 
        if ($cliente) { 
    ?>
        <div class="flex-row navbar-nav ms-auto justify-content-end top-container">
            <div class="dropdown">
                <a class=" link px-3 d-flex align-items-center dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">  
                    <i class='bx bx-user px-1'></i> 
                    <span class="d-none d-md-inline-block"><?php echo $_SESSION['user_name']; ?></span> 
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="php/signout.php">Cerrar Sesión</a>
                </div>
            </div>
            <a class=" link px-3 d-flex align-items-center" href="#">
                <i class="bx bx-cart-alt px-1"></i>
                <span class="d-none d-md-inline-block">Carrito</span>
            </a>
        </div> 
        
    <?php 
        } else if ($trabajador) { 
    ?>
        <section class="admin_body" id="body-pd">
            
            <header class="header" id="header">
                <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
                <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
            </header>
            <div class="l-navbar" id="nav-bar">
                <nav class="nav">
                    <div> 
                        <a href="#" class="nav_logo">
                            <img src="img/logo/white-icono-logo-CONFID.png" width="35px"> 
                            <span class="nav_logo-name">C O N F I D</span> 
                        </a>
                        <div class="nav_list"> 
                            <a href="index.php" class="nav_link active"> 
                                <i class='bx bx-grid-alt nav_icon nav_icon'></i> 
                                <span class="nav_name">Página Principal</span> 
                            </a> 
                            <a href="consulta_clientes.php" class="nav_link">  
                                <i class='bx bxs-contact nav_icon' ></i> 
                                <span class="nav_name">Clientes</span> 
                            </a> 
                            <a href="consulta_pedidos.php" class="nav_link"> 
                                <i class='bx bx-clipboard bx-flip-horizontal nav_icon'></i>
                                <span class="nav_name">Consulta Pedidos</span>

                            <a href="consulta_productos.php" class="nav_link"> 
                            <i class='bx bxl-product-hunt nav_icon'></i>
                                <span class="nav_name">Consulta Productos</span>     
                            </a> 

                            <a href="consulta_detalles_pedidos.php" class="nav_link"> 
                                <i class='bx bxs-report nav_icon'></i> 
                                <span class="nav_name">Facturación</span> 
                            </a>
                            <a href="consulta_usuarios.php" class="nav_link"> 
                                <i class='bx bx-user nav_icon'></i> 
                                <span class="nav_name">Usuarios</span> 
                            </a>
                            <a href="addworker.php" class="nav_link"> 
                                <i class='bx bxs-user-plus nav_icon'></i>
                                <span class="nav_name">Añadir</br> Usuarios</span> 
                            </a> 
                            
                        </div>
                    </div>
                    <div class="nav_list">
                        <a href="php/signout.php" class="nav_link"> 
                            <i class='bx bx-log-out nav_icon'></i>
                            <span class="nav_name">SignOut</span> 
                        </a>
                    </div>
                </nav>
            </div>
        </section>
    <?php 
        } else { 
    ?>
        <div class="flex-row navbar-nav ms-auto justify-content-end top-container">
            <div class="dropdown">
                <a class=" link px-3 d-flex align-items-center dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">  
                    <i class='bx bx-user px-1'></i> 
                    <span class="d-none d-md-inline-block">Usuario</span> 
                </a>
                <div class="dropdown-menu in-se">
                    <form  action="php/login.php" method="POST" class="px-4">
                        <div class="d-flex">
                        <!-- Email input -->
                            <div class="form-outline mx-2">
                                <label class="form-label" for="login_email">Email:</label>
                                <input type="text" name="login_email" id="login_email" class="form-control" />
                            </div>
                        
                            <!-- Password input -->
                            <div class="form-outline mx-2 mb-4">
                                <label class="form-label" for="login_pass">Contraseña:</label>
                                <input type="password" name="login_pass" id="login_pass" class="form-control" />
                            </div>
                        </div>
                        <div class="dropdown-divider"></div>
                        <div class="d-flex">
                            <a class="dropdown-item col mx-2" href="registro.php">Eres nuevo? Regístrate!</a>
                            <input type="submit" name="login" value="Iniciar Sesión" class="col mx-2 btn btn-primary btn-block"/>
                        </div>
                    </div>
                </form>
            </div>
        
            <a class=" link px-3 d-flex align-items-center" href="#">
                <i class="bx bx-cart-alt px-1"></i>
                <span class="d-none d-md-inline-block">Carrito</span>
            </a>
        </div>        
    <?php }?>
    
</header>
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
                </div>  
            </nav>
        </div>