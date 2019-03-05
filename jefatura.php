<?php 
     include_once 'database.php';
     
     session_start();
     

     if (isset($_SESSION['rol'])) {
      switch ($_SESSION['rol'] == 1) {
        case 1:
        
         header('location: jefatura.php');
          break;
        
        default:
        
        header('location: jefatura.php');
          
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
          
          header('localhost:jefatura.php');

            break;
            case 2:
  
       if (!isset($_SESSION['rol'])) {
                header('location/proyecto');
              }else{
         if ($_SESSION['rol'] !=1) {
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

<!DOCTYPE html>
<html>
<head>
  <title>jef</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bostrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <h1>jef</h1>
  <h2> Holis <?php echo $_SESSION['rol'] ?> </h2>
  <a href="cerrarsesion.php">cerrar_sesion</a>
</head>
<body>

</body>
</html>
 