
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bostrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  </head>
  <body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <div class="container">
      <h1 class="h1-jef">Investigador</h1>
     <!--<span>or <a href="signup.php">SignUp</a></span>s-->
      <form action="verifinv.php" method="POST">
      <input name="email" type="text" placeholder="Enter your email">
      <input name="password" type="password" placeholder="Enter your Password">
      <input type="submit" value="Submit">
    </form>
     <div class="btn-group btn-group-justified contenedor1">
      <a  class="btn btn-primaria" href="login.php"><img src="img/botonjef.gif"></a>
      <a class="btn btn-primaria" href="loginsub.php"><img src="img/botonsub.gif"></a>
      <a class="btn btn-primaria" href="logininv.php"><img src="img/inv.gif"></a>
    </div>
    </div>
  </body>

</html>