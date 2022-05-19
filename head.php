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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/combine/npm/bootstrap@5.1.3,npm/@popperjs/core@2.11.5" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    
    
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