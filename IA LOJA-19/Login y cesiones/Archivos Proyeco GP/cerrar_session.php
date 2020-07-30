<<?php 

session_start();
error_reporting(0);

$varsesion = $_SESSION ['usuario'];
if($varsesion == null || $varsesion = ''){
echo 'Usted no tiene autorizacion';
die();

}
header("Location: index.php");

 ?>