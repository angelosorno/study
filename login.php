<?php

//index.php

//Include Configuration File
include('php/conf_log_g.php');

$login_button = '';

//This $_GET["code"] variable value received after user has login into their Google Account redirct to PHP script then this variable value has been received
if(isset($_GET["code"]))
{
 //It will Attempt to exchange a code for an valid authentication token.
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

 //This condition will check there is any error occur during geting authentication token. If there is no any error occur then it will execute if block of code/
 if(!isset($token['error']))
 {
  //Set the access token used for requests
  $google_client->setAccessToken($token['access_token']);

  //Store "access_token" value in $_SESSION variable for future use.
  $_SESSION['access_token'] = $token['access_token'];

  //Create Object of Google Service OAuth 2 class
  $google_service = new Google_Service_Oauth2($google_client);

  //Get user profile data from google
  $data = $google_service->userinfo->get();

  //Below you can find Get profile data and store into $_SESSION variable
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}

//This is for check user has login into system by using Google account, if User not login into system then it will execute if block of code and make code for display Login link for Login using Google account.
if(!isset($_SESSION['access_token']))
{
 //Create a URL to obtain user authorization
 $login_button = '<a href="'.$google_client->createAuthUrl().'"><div id="my-signin2"></div></a>';
}

?>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Login</title>
  <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style_2.css">
  <meta name="google-signin-client_id" content="629122505152-bq9geckrn7ppkcetq4cmuor8iicg2d2g.apps.googleusercontent.com">

 </head>
 <body>
   <!-- My Form -->
   <div class="container pt-3">

     <form action="login.php" method="post" class="form-signin" id="login-form" name="login-form">

   <div class="text-center mb-4">
     <img alt="image" src="css/img/logo.png" class="rounded mx-auto d-block" style="height: 100px;">
   <h3 class="mb-4 text-primary" >App Historia</h3>
   <h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>
   </div>

   <div id="error-msg" class="alert alert-danger" style="display:none" role="alert"></div>

   <div class="form-label-group">
   <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
   <label for="email"></label>
   </div>


   <div class="form-label-group">
   <input type="Password" name="Password" class="form-control" placeholder="Contrase&ntilde;a" id="Password" required>
   <label for="Password"></label>
   </div>



   <button name="login-btn" id="login" class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>

   <div class="container pt-4">
    <div class="panel panel-default">
    <?php
    if($login_button == '')
    {
     echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
     echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
     echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
     echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
     echo '<h3><a href="logout.php">Logout</h3></div>';
    }
    else
    {
     echo '<div align="center">'.$login_button . '</div>';
    }
    ?>
    </div>
   </div>

   <p class="mt-5 mb-3 text-muted text-center">Registrarme<a href="singup.php"> Registro</a> </p>
   <p class="mt-5 mb-3 text-muted text-center">&copy; 2020</p>

   </form>
   </div>





 <script>
   function onSuccess(googleUser) {
     console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
   }
   function onFailure(error) {
     console.log(error);
   }
   function renderButton() {
     gapi.signin2.render('my-signin2', {
       'scope': 'profile email',
       'width': 240,
       'height': 50,
       'longtitle': true,
       'theme': 'dark',
       'onsuccess': onSuccess,
       'onfailure': onFailure
     });
   }
 </script>

 <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>

<script type="text/javascript">

// Login Form ajax
$(function()
{
  $('#login').click(function(e){

      let self = $(this);

      e.preventDefault(); // prevent default submit behavior

      $(this).prop('disabled',true);

      var data = $('#login-form').serialize(); // get form data

       // sending ajax reqeust to login.php file, it will proccess login reqeust and give response.
      $.ajax({
          url: 'php/configlogin.php',
          type: "POST",
          data: data,
      }).done(function(res) {
          res = JSON.parse(res);
          if (res['status']) // if login successful redirect user to secure.php page.
          {
              location.href = "index.php"; // redirect user to secure.php location/page.
          } else {

              var errorMessage = '';
              // if there is any errors convert array of errors into html string,
              //here we are wrapping errors into a paragraph tag.
              console.log(res.msg);
              $.each(res['msg'],function(index,message) {
                  errorMessage += '<p>' + message+ '</p>';
              });
              // place the errors inside the div#error-msg.
              $("#error-msg").html(errorMessage);
              $("#error-msg").show(); // show it on the browser, default state, hide
              // remove disable attribute to the login button,
              //to prevent multiple form submisstions
              //we have added this attributon on login from submit
              self.prop('disabled',false);
          }
      }).fail(function() {
          alert("Este es el E");
      }).always(function(){
          self.prop('disabled',false);
      });
  });
});

</script>

 </body>
</html>
