<!DOCTYPE html>
<html>
    <?php 
        $file=basename(__FILE__, '.php');
        $far="../";
        include $far.'php/comun/head.php';
    ?>  
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>'>
        <?php //include_once '../header.php'; ?> <!-- CAMBIAR RUTA SEGUN UBI Insertar headers segun login -->
        <section class="admin_body" id="body-pd">
            <header class="header" id="header">
                <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
                <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
            </header>
            <div class="l-navbar" id="nav-bar">
                <nav class="nav">
                    <div> 
                        <a href="/#" class="nav_logo">
                            <img src="/img/logo/white-icono-logo-CONFID.png" width="35px"> 
                            <span class="nav_logo-name">C O N F I D</span> 
                        </a>
                        <div class="nav_list"> 
                            <a href="/index.php" class="nav_link active"> 
                                <i class='bx bx-grid-alt nav_icon nav_icon'></i> 
                                <span class="nav_name">Página Principal</span> 
                            </a> 
                            <a href="/content/CPanel/consulta_clientes.php" class="nav_link">  
                                <i class='bx bxs-contact nav_icon' ></i> 
                                <span class="nav_name">Clientes</span> 
                            </a> 
                            <a href="/content/CPanel/consulta_pedidos.php" class="nav_link"> 
                                <i class='bx bx-clipboard bx-flip-horizontal nav_icon'></i>
                                <span class="nav_name">Consulta Pedidos</span>

                            <a href="/content/CPanel/consulta_productos.php" class="nav_link"> 
                            <i class='bx bxl-product-hunt nav_icon'></i>
                                <span class="nav_name">Consulta Productos</span>     
                            </a> 

                            <a href="/content/CPanel/consulta_detalles_pedidos.php" class="nav_link"> 
                                <i class='bx bxs-report nav_icon'></i> 
                                <span class="nav_name">Facturación</span> 
                            </a>
                            <a href="/content/CPanel/consulta_usuarios.php" class="nav_link"> 
                                <i class='bx bx-user nav_icon'></i> 
                                <span class="nav_name">Usuarios</span> 
                            </a>
                            <a href="/content/CPanel/addworker.php" class="nav_link"> 
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

        
        <?php include_once $far.'php/comun/footer.php'; ?>
    </body>
</html>