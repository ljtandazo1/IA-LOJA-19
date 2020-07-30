<?php 
	session_start();
	error_reporting(0);
	$varsession = $_SESSION['usuario'];

	if($varsession == null || $varsession = ''){
		echo 'Usted no tiene autorización';
		die();
	}
?>

<!DOCTYPE html>
<html tang="en">
<head>
	<meta charset="utf-8">
	<title>Panel</title>
</head>
<body>
	<h1>Cesión</h1>
	<h2>Bienvenido: <?php echo $_SESSION['usuario'] ?> </h2>
	<a href="cerrar_session.php">Cerrar Cesión</a>
</body>
</html>