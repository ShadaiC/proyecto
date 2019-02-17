<?php 

	session_start();
	if (!isset($_SESSION['rol'])) {
		header('location/proyecto');
	}else{
		if ($_SESSION['rol'] !=3) {
			header('location:login.php');
		}
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>inve</title>
	<h1>investigador</h1>
	<a href="cerrarsesion.php">cerrar</a>
</head>
<body>

</body>
</html>