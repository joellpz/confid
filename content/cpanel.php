<!DOCTYPE html>
<html>
    <?php
        
        $file="Control Panel";
        $far="../";
        include $far.'php/comun/head.php';
        
       
    ?>
    <body class='bg-light <?php if($trabajador){echo " admin_body' id='body-pd";}?>' onload="tabla_cpanel(<?php echo $_GET['cons']?>)">
        <!-- CAMBIAR RUTA SEGUN UBI Insertar headers segun login -->
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
                            <a href="/index.php" class="nav_link"> 
                                <i class='bx bx-grid-alt nav_icon nav_icon'></i> 
                                <span class="nav_name">Página Principal</span> 
                            </a> 
                            <a href="#" class="nav_link" id="cli" onclick="tabla_cpanel(this)">
                                <i class='bx bxs-contact nav_icon' ></i> 
                                <span class="nav_name">Clientes</span>
                            </a>
                                
                            <a href="#" class="nav_link" id="ped" onclick="tabla_cpanel(this)"> 
                                <i class='bx bx-clipboard bx-flip-horizontal nav_icon'></i>
                                <span class="nav_name">Consulta Pedidos</span>

                            <a href="#" class="nav_link" id="prod" onclick="tabla_cpanel(this)">
                                <i class='bx bxl-product-hunt nav_icon'></i>
                                <span class="nav_name">Consulta Productos</span>     
                            </a> 

                            <a href="#" class="nav_link" id="det_ped" onclick="tabla_cpanel(this)"> 
                                <i class='bx bxs-report nav_icon'></i> 
                                <span class="nav_name">Facturación</span> 
                            </a>
                            <a href="#" class="nav_link" id="users" onclick="tabla_cpanel(this)"> 
                                <i class='bx bx-user nav_icon'></i> 
                                <span class="nav_name">Usuarios</span> 
                            </a>
                            <a href="#" class="nav_link" id="add_user" onclick="tabla_cpanel(this)"> 
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
        
        <div id="recarga">
        
        </div>
        <script>
            function tabla_cpanel(comp){
                    var id = comp.id;

                switch(id){
                    case "cli":
                        $('#recarga').load('/content/CPanel/consulta_clientes.php');
                        break;
                    case "ped":
                        $('#recarga').load('/content/CPanel/consulta_pedidos.php');
                        break;
                    case "prod":
                        $('#recarga').load('/content/CPanel/consulta_productos.php');
                        break;
                    case "det_ped":
                        $('#recarga').load('/content/CPanel/consulta_detalles_pedidos.php');
                        break;
                    case "users":
                        $('#recarga').load('/content/CPanel/consulta_usuarios.php');
                        break;
                    case "add_user":
                        $('#recarga').load('/content/CPanel/addworker.php');
                        break;
                    default:
                       $('#recarga').load('/index.php');
                }
                console.log(id);
            }
            </script>
    </body>
</html>