<?php session_start();
require_once('database.php');
$errors = array();
$username = "";
$inputEmail = "";


       // If User Click on Sign up Button
       if (isset($_POST['singup-btn'])){
         $username = $_POST['username'];
         $email = $_POST['email'];
         $password = $_POST['Password'];
         $passwordConf= $_POST['PasswordConf'];

         // Validation
         if (empty($username)){
           $errors['username'] = " Ingresar Usuario";
         }

         if (empty($email)){
           $errors['email'] = " Ingresar Email";
         }

         if (empty($password)){
           $errors['Password'] = " Ingresar Contrasena";
         }
         if ($password !== $passwordConf){
           $errors['Password'] = " Contrasena no Coincide";
         }

         // $emailQuery = "SELECT * FROM users WHERE email=? LIMIT 1";
         // $stmt = $conn->prepare($emailQuery);
         // $stmt->bind_param('s', $email);
         // $stmt->execute();
         // $result = $stmt->get_result();
         // $userCount = $result->num_rows;
         // $stmt->close();
         //
         // if ($userCount > 0){
         //   $errors['email'] = " Email ya esta registrado";
         // }

         if (count($errors) === 0){
           $password = password_hash($password, PASSWORD_DEFAULT);
           $token = bin2hex(random_bytes(50));
           $verified = true;
           $rol_id = 2; // Type 2 User

           $sql = "INSERT INTO users (username, email, verified, token, Password, rol_id) VALUES (?, ?, ?, ?, ?, ?)";
           $stmt = $conn->prepare($sql);
           $stmt->bind_param('ssbssi', $username, $email, $verified, $token, $password, $rol_id);

           if ($stmt->execute()){
             // Login user
             $user_id = $conn->insert_id;
             $_SESSION['id'] = $user_id;
             $_SESSION['username'] = $username;
             $_SESSION['email'] = $email;
             $_SESSION['verified'] = $verified;
             // Message
             $_SESSION['Message'] = "You are Logged In";
             $_SESSION['alert-class'] = "alert-success";
             header('location: /');
             exit();

           }else {
             $errors['db_error'] = " DB error: Failed to register";
           }
         }
       }
        ?>
