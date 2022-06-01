<?php
    include('config.php');
    session_start();
    if(isset($_POST)){
        $name_product = $_POST['name_product'];
        $desc_product = $_POST['desc_product'];
        $stock = $_POST['stock'];
        $precio_iva = $_POST['precio_iva'];
        $precio_no_iva = $_POST['precio_no_iva'];
        $categoria = $_POST['categoria'];

        $last = "SELECT MAX(idProductos) FROM productos";
        $reslast = mysqli_query($conn, $last); 
        $id = mysqli_fetch_row($reslast);
        $id_prod = intval($id[0])+1;

        $path = "../img/productos/$id_prod.png"; 
        
        if(move_uploaded_file($_FILES['imagen']['tmp_name'], $path)) {
            echo "El archivo ".  basename( $_FILES['imagen']['name']). " ha sido subido";
        } else{
            echo "El archivo no se ha subido correctamente";
        }
        // Recibo los datos de la imagen
        /*$nombre_img = $_FILES['imagen']['name'];
        $tipo = $_FILES['imagen']['type'];
        $tamano = $_FILES['imagen']['size'];

        //Si existe imagen y tiene un tamaño correcto
        if (!empty($nombreImg) && ($_FILES['imagen']['size'] <= 200000)) 
        {
        //indicamos los formatos que permitimos subir a nuestro servidor
        if (($_FILES["imagen"]["type"] == "image/png"))
        {
            // Ruta donde se guardarán las imágenes que subamos
            $directorio = $_SERVER['/content/img/productos/'];
            // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
            move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
            } 
            else 
            {
            //si no cumple con el formato
            echo "No se puede subir una imagen con ese formato ";
            }
        } 
        else 
        {
        //si existe la variable pero se pasa del tamaño permitido
        if($nombre_img == !NULL) echo "La imagen es demasiado grande "; 
        }*/
                    
        $consulta_producto = "INSERT INTO productos VALUES (NULL,'$name_product', '$desc_product', '$stock', '$precio_iva', '$precio_no_iva', '$categoria')";
        mysqli_query($conn,$consulta_producto);
        
        echo '<script>location.href = "../content/cpanel.php?cons=prod"</script>';
    }else{
        echo '<script>location.href = "../index.html"</script>';
    }
?>