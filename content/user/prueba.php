<?php
 $far="../../";//Distancia para llegar a la general.
 include $far.'php/comun/head.php';

$id = $_SESSION['user_id'];
$consulta = "SELECT * FROM usuarios, clientes WHERE clientes.idUsuario = usuarios.idUsuario AND usuarios.idUsuario = $id";
$result= mysqli_query ($conn, $consulta);
$row=mysqli_fetch_array($result);

if(isset($_POST['enviar'])){
$usuario = $_POST["usuario"];
$passwd = $_POST["passwd"];
$nombre = $_POST["nombre"];
$email = $_POST["email"];

$alias = $_POST["casinombre"];
$CIF = $_POST["CIF"];
$dir = $_POST["dir"];
$autonomo = $_POST["auto"];

echo $alias;
echo $passwd;
echo $nombre;
echo $email;
echo $CIF;
echo $dir;
echo $autonomo;
$update_users = "UPDATE usuarios SET usuario='$usuario', passwd='$passwd', nombre = '$nombre', email='$email' WHERE idUsuario = $id";
//$update_cli = "UPDATE clientes SET alias='$alias', CIF='$CIF', direccion = '$dir', autonomo='$autonomo' WHERE idUsuario =". $_SESSION['user_id'];
mysqli_query($conn, $update_users) or die('Consulta fallida: ');
//mysqli_query($conn, $update_cli) or die('Consulta fallida: ');
//echo "COSITAS";
//header("refresh:0;url=". $_SERVER['PHP_SELF']);  //Redirigir a Principal.
}
?>