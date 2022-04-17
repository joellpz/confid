<head>
	<link href="/style/style.css" rel="stylesheet">
	
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
<header>
    <?php
    session_start();

    if (!isset($_SESSION['user_id'])) { ?>
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
    <?php } else {}
    ?>
    
</header>