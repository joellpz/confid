<head>
    <link rel ="stylesheet" href="/style/style.css"/> 
    
<script async defer src="https://buttons.github.io/buttons.js"></script>

<script src="/docs/assets/js/docs.min.js"></script>

</head>
<header>
    <?php 
        if ($cliente) { 
    ?>
        <div class="flex-row navbar-nav ms-auto justify-content-end top-container">
            <div class="dropdown">
                <a class="link px-3 d-flex align-items-center dropdown-toggle" href="/#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">  
                    <i class='bx bx-user px-1'></i> 
                    <span class="d-none d-md-inline-block"><?php echo $_SESSION['user_name']; ?></span> 
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/content/user/mod_account.php">Tu cuenta</a>
                    <a class="dropdown-item" href="/content/user/pedidos.php">Pedidos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/php/signout.php">Cerrar Sesión</a>
                </div>
            </div>
            <a class=" link px-3 d-flex align-items-center" href="<?php echo $far?>content/carrito.php">
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
                        <a href="/index.php" class="nav_logo">
                            <img src="/img/logo/white-icono-logo-CONFID.png" width="35px"> 
                            <span class="nav_logo-name">C O N F I D</span> 
                        </a>
                        <div class="nav_list"> 
                            <a href="/index.php" class="nav_link <?php if($file!="Control Panel Pedidos" && $file!="Control Panel" ){ echo "active";}?>"> 
                                <i class='bx bx-grid-alt nav_icon nav_icon'></i> 
                                <span class="nav_name">Página Principal</span> 
                            </a> 
                            <a href="/content/cpanel.php?cons=cli" class="nav_link">  
                                <i class='bx bxs-contact nav_icon' ></i> 
                                <span class="nav_name">Clientes</span> 
                            </a> 
                            <a href="/content/CPanel/consulta_pedidos.php" class="nav_link <?php if($file=="Control Panel Pedidos"){ echo "active";}?>"> 
                                <i class='bx bx-clipboard bx-flip-horizontal nav_icon'></i>
                                <span class="nav_name">Consulta Pedidos</span>

                            <a href="/content/cpanel.php?cons=prod" class="nav_link"> 
                            <i class='bx bxl-product-hunt nav_icon'></i>
                                <span class="nav_name">Consulta Productos</span>     
                            </a> 

                            <a href="/content/cpanel.php?cons=det_ped" class="nav_link"> 
                                <i class='bx bxs-report nav_icon'></i> 
                                <span class="nav_name">Facturación</span> 
                            </a>
                            <a href="/content/cpanel.php?cons=users" class="nav_link"> 
                                <i class='bx bx-user nav_icon'></i> 
                                <span class="nav_name">Usuarios</span> 
                            </a>
                            <a href="/content/cpanel.php?cons=add_user" class="nav_link"> 
                                <i class='bx bxs-user-plus nav_icon'></i>
                                <span class="nav_name">Añadir</br> Usuarios</span> 
                            </a> 
                            
                        </div>
                    </div>
                    <div class="nav_list">
                        <a href="/php/signout.php" class="nav_link"> 
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
        <div>
            
        </div>
            
            <div class="navbar-nav flex-row justify-content-end ms-auto top-container">
            <h6 class="me-auto ms-5 my-auto">Esto forma parte de un Proyecto Educativo.</h6>
                <div class="dropdown">
                    <a class=" link px-3 d-flex align-items-center dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">  
                        <i class='bx bx-user px-1'></i> 
                        <span class="d-none d-md-inline-block">Usuario</span> 
                    </a>
                    <div class="dropdown-menu in-se">
                        <form  action="return false" onsubmit="return false" method="POST" class="px-4">
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
                            <div id="resultado" style="text-align: center; background-color: rgba(255, 71, 71, 0.555);"></div>
                            <div class="dropdown-divider"></div>
                            <div class="d-flex">
                                <a class="dropdown-item col mx-2 my-auto" href="/content/registro.php">Eres nuevo? Regístrate!</a>
                                <input type="submit" name="login" value="Iniciar Sesión" class="col mx-2 btn btn-primary btn-block" onclick="Validar(document.getElementById('login_email').value, document.getElementById('login_pass').value, document.getElementById('path').value);"/>
                            </div>
                            <input type="hidden" id="path" name="path" value="<?php echo $file;?>"/>
                        </form>
                    </div>
                </div>
            
                <a class=" link px-3 d-flex align-items-center" href="<?php echo $far?>content/carrito.php">
                    <i class="bx bx-cart-alt px-1"></i>
                    <span class="d-none d-md-inline-block">Carrito</span>
                </a>
            </div>
        </div>
        <script>
        function Validar(login_email, login_pass, path)
        {
            $.ajax({
                url: "/php/login.php",
                type: "POST",
                data: "login_email="+login_email+"&login_pass="+login_pass+"&path="+path,
                success: function(resp){
                $('#resultado').html(resp)
                }       
            });
        }
        </script>

    <?php }?>
    
</header>
<?php if ($file!="Control Panel" && $file!="Control Panel Pedidos"){ ?>
    <div class="navegacion">
        <nav class="navbar nav nav-pills  navbar-expand-lg navbar-light bg-light ">
            <div class="container p-2 border-bottom">
                <a class="navbar-brand" href="/index.php">
                    <img src="/img/logo/LogoMenu-CONFID.png" width="150" alt="CONFID Logo" loading="lazy"/>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bx bx-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-link mx-2" href="/index.php">Inicio</a>
                        <a class="nav-link mx-2" href="/content/somos.php">Quiénes Somos</a>
                        <a class="nav-link mx-2" href="/content/productos.php">Productos</a>
                        <a class="nav-link mx-2" href="/content/servicios.php">Servicios</a>
                        <a class="nav-link mx-2" href="/content/contacto.php">Contacto</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
        
<?php } ?>