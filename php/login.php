<?php
require 'config.php';
if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
} else {
    echo 'Conectado Correctamente a la BBDD <hr>';
}
?>
