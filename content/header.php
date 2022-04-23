

<?php 
    session_start();
    $trabajador = false;
    $cliente = false;
    require '../php/config.php';

    if(isset($_SESSION['user_id'])){
        $consulta_trabajadores = "SELECT idUsuario FROM trabajadores WHERE idUsuario = '$_SESSION[user_id]'"; 
        $trabajadores = mysqli_query($conn, $consulta_trabajadores);
        $row_trab = mysqli_fetch_array($trabajadores);
        if($row_trab){
            $trabajador = true;
            $cliente = false;
        }else{
            $consulta_clientes = "SELECT idUsuario FROM clientes WHERE idUsuario = '$_SESSION[user_id]'"; 
            $clientes = mysqli_query($conn, $consulta_clientes);
            $row_cli = mysqli_fetch_array($clientes);
            if ($row_cli){
                $cliente = true;
                $trabajador = false;
            }
        }
    }
    
    
    
?>
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
                    <a class="dropdown-item" href="/php/signout.php">Cerrar Sesión</a>
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
            <script src="/js/header_show.js"></script>
            <header class="header" id="header">
                <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
                <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
            </header>
            <div class="l-navbar" id="nav-bar">
                <nav class="nav">
                    <div> 
                        <a href="#" class="nav_logo">
                            <img src="/img/logo/white-icono-logo-CONFID.png" width="35px"> 
                            <span class="nav_logo-name">C O N F I D</span> 
                        </a>
                        <div class="nav_list"> 
                            <a href="#" class="nav_link active"> 
                                <i class='bx bx-grid-alt nav_icon'></i> 
                                <span class="nav_name">Pagina Principal</span> 
                            </a> 
                            <a href="#" class="nav_link">  
                                <i class='bx bx-user nav_icon'></i> 
                                <span class="nav_name">Usuarios</span> 
                            </a> 
                            <a href="#" class="nav_link"> 
                                <i class='bx bx-message-square-detail nav_icon'></i> 
                                <span class="nav_name">Messages</span> 
                            </a> 
                            <a href="#" class="nav_link"> 
                                <i class='bx bx-bookmark nav_icon'></i> 
                                <span class="nav_name">Bookmark</span> 
                            </a>
                            <a href="#" class="nav_link"> 
                                <i class='bx bx-folder nav_icon'></i>
                                <span class="nav_name">Pedidos</span> 
                            </a> 
                            <a href="#" class="nav_link"> 
                                <i class='bx bx-bar-chart-alt-2 nav_icon'></i> 
                                <span class="nav_name">Stats</span> 
                            </a>
                        </div>
                    </div> 
                    <a href="php/signout.php" class="nav_link"> 
                        <i class='bx bx-log-out nav_icon'></i>
                        <span class="nav_name">SignOut</span> 
                    </a>
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
                    <form  action="/php/login.php" method="POST" class="px-4">
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
                            <a class="dropdown-item col mx-2" href="content/registro.html">Eres nuevo? Regístrate!</a>
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