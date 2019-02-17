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
          
        default:
          
         }
        } else {
          echo "El usuario no es correcto";
        }
        

      }
       
     


 ?>