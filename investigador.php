<?php 
     include_once 'database.php';
     session_start();

     if (isset($_SESSION['rol'])) {
      switch ($_SESSION['rol'] == 3) {
        case 1:
          
          header('location: investigador.php');
          
          break;
          
        default:
        header('location: investigador.php');
          
      }
    }
      if (isset($_POST['email']) && isset($_POST['password'])) {
        $email =$_POST['email'];
        $password =$_POST['password'];

        $db = new Database();
        $query = $db->connect()->prepare('SELECT*FROM users WHERE email = :email AND password = :password');
        $query->execute(['email'=> $email, 'password' => $password]);

        $row = $query->fetch(PDO::FETCH_NUM);
        if ($row == true) {

          $rol = $row[4];
          $_SESSION['rol'] = $rol;
           switch ($_SESSION['rol']) {
          case 1:
        
          header('location: investigador.php');
          
          break;

          case 2:
            if (!isset($_SESSION['rol'])) {
    header('location/proyecto');
  }else{
    if ($_SESSION['rol'] !=3) {
      header('location:login.php');
    }
  }
            break;

        default:
          
         }
        } else {
          echo "El usuario no es correcto";
          header('location:login.php');
        }
        

      }
       
     


 ?>

 <?php 

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