<?php
  session_start();
  require 'database.php';
  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;
    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistema de Inventarios </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bostrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
  </head>
  <body>
    
       <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
     <!-- <a href="login.php">Login</a> or
      <a href="signup.php">SignUp</a>-->
    <?php endif; ?>

    <h1 class="h1-index">Elije una opción del menú para acceder</h1>
    <div class="btn-group btn-group-justified contenedor2">
      <a  class="btn btn-primaria" href="login.php"><img src="img/botonjef.gif"></a>
      <a class="btn btn-primaria" href="loginsub.php"><img src="img/botonsub.gif"></a>
      <a class="btn btn-primaria" href="logininv.php"><img src="img/inv.gif"></a>
    </div>
  </body>


</html>