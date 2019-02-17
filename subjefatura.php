<?php 

	session_start();
	if (!isset($_SESSION['rol'])) {
		header('location/proyecto');
	}else{
		if ($_SESSION['rol'] !=2) {
			header('location:login.php');
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>sub</title>
	<h1>sub</h1>
	<a href="cerrarsesion.php">cerrar</a>
</head>
<body>

</body>
</html>