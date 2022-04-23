<?php
    $file="Control Panel";
    include 'head.php';
?>

<!DOCTYPE html>
<html>
    <body <?php if($trabajador){echo "class='admin_body' id='body-pd'";}?>>
        <?php include_once 'header.php'; ?>
        <h2>Administración de Usuarios</h2>
        <a class="btn btn-primary" href="#" role="button">Consultar Usuarios</a>
        <a class="btn btn-primary" href="#" role="button">Añadir Usuario</a>
        <a class="btn btn-primary" href="#" role="button">Modificar Usuario</a>
        <a class="btn btn-primary" href="#" role="button">Eliminar Usuario</a>
    </body>
</html>