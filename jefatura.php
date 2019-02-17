<?php 

	session_start();
	if (!isset($_SESSION['rol'])) {
		header('location/proyecto');
	}else{
		if ($_SESSION['rol'] !=1) {
			header('location:login.php');
		}
	}
	

	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>jef</title>
	<h1>jef</h1>
	<h2> Holis <?php echo $_SESSION['rol'] ?> </h2>
	<a href="cerrarsesion.php">cerrar_sesion</a>
</head>
<body>

</body>
</html>