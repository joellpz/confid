<head>
    
    <link rel="shortcut icon" href="img/logo/icon-logo-CONFID.png" sizes="64x64"/>
	
    <link rel ="stylesheet" href="style/style.css"/>
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 

	<link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"> 
	
	<script src="https://cdn.jsdelivr.net/combine/npm/bootstrap@5.1.3,npm/@popperjs/core@2.11.5" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> 
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
		
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<!--<header>
    <div class="flex-row navbar-nav ms-auto justify-content-end top-container">
        <div class="dropdown">
            <a class="link px-3 d-flex align-items-center dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">  
                <i class='bx bx-user px-1'></i> 
                <span class="d-none d-md-inline-block">Usuario</span> 
            </a>
                
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
        </div>
        <a class=" link px-3 d-flex align-items-center" href="#">
                <i class="bx bx-cart-alt px-1"></i>
                <span class="d-none d-md-inline-block">Carrito</span>
        </a>
    </div>    
</header>
-->
<?php 
    session_start();
    $trabajador = false;
    $cliente = false;
    require 'php/config.php';

    if(isset($_SESSION['user_id'])){
        $consulta_trabajadores = "SELECT idUsuario FROM trabajadores WHERE idUsuario = '$_SESSION[user_id]'"; 
        $trabajadores = mysqli_query($conn, $consulta_trabajadores);
        $row_trab = mysqli_fetch_array($trabajadores);
        echo "trabja";
        if($row_trab){
            $trabajador = true;
            $cliente = false;
        }else{
            $consulta_clientes = "SELECT idUsuario FROM clientes WHERE idUsuario = '$_SESSION[user_id]'"; 
            $clientes = mysqli_query($conn, $consulta_clientes);
            $row_cli = mysqli_fetch_array($clientes);
            echo "cli";
            if ($row_cli){
                $cliente = true;
                echo "trabjacliente";
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
            <div class="height-100 bg-light">
            <h4>Main Components</h4>
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
                            <a class="dropdown-item col mx-2" href="#">Eres nuevo? Regístrate!</a>
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