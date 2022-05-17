<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="author" content="Los Chicos del Puerto" />
    <meta name="description" content="Empresa dedicada a la instalación de sistemas de seguridad."/>
    <meta name="keywords" content="seguridad, videovigilancia, confid, camaras, servicios"/>
    <meta name="robots" content="noindex"/>
    
    <title><?php echo ucwords($file); ?> | ConfID</title>

    <link rel="shortcut icon" href="img/logo/icon-logo-CONFID.png" sizes="64x64"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel ="stylesheet" href="style/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" rel="stylesheet"> 
    <script src="js/header_show.js"></script>

    <?php if($file == 'Productos'){?>

        <!-- ***************** BLOQUE PARA CAROUSELES ***************** -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
        
        <!-- ***************** BLOQUE PARA CAROUSELES ***************** -->

    <?php }else{?>

        <!-- ***************** BLOQUE PARA RESTO ***************** -->
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
        
        <!-- ***************** BLOQUE PARA RESTO ***************** -->

    <?php }?>
    
</head>

<?php 
    session_start();
    $trabajador = false;
    $cliente = false;
    require 'php/config.php';

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