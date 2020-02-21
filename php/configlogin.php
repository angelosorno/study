<?php session_start();

require_once('database.php');
// Ajax Login form
// $_SESSION['username'] = $username;

$error  = array();
   $res    = array();


        if(empty($_POST['email']))
        {
            $error[] = "Email field is required";
        }

        if(empty($_POST['Password']))
        {
            $error[] = "Password field is required";
        }
        if (!empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Enter Valid Email address";
        }

        if(count($error)>0)
        {
            $resp['msg']    = $error;
            $resp['status'] = false;
            echo json_encode($resp);
            exit;
        }

        $statement = $db->prepare("SELECT * from users WHERE email = :email" );
        $statement->execute(array(':email' => $_POST['email']));
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        if(count($row)>0) {
           if(!password_verify($_POST['Password'],$row[0]['Password'])) {
                $error[] = "Password is not valid";
                $resp['msg']  = $error;
                $resp['status']   = false;
                echo json_encode($resp);
                exit;
           }
          session_start();
          $_SESSION['id'] = $row[0]['id'];
          $_SESSION['username']= $username;
          $resp['redirect']    = "index.php";
          $resp['status']      = true;
          echo json_encode($resp);
          exit;
       } else {
          $error[] = "Email No Registrado";
          $resp['msg']  = $error;
          $resp['status']   = false;
          echo json_encode($resp);
          exit;
     }



?>
