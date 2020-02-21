<?php  require_once 'config/authcontrol.php';
 ?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Ingresar</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
     </head>
   <body>
<!-- My Form -->
<div class="container">

  <form action="login.php" method="post" class="form-signin" id="login-form" name="login-form">

<div class="text-center mb-4">
  <img alt="Logo" src="#" class="rounded mx-auto d-block" style="height: 100px;">
<h3 class="mb-4"  style=" color: #a800ff;" >Bienvenido</h3>
<h1 class="h3 mb-3 font-weight-normal">Ingresar</h1>
</div>

<div id="error-msg" class="alert alert-danger" style="display:none" role="alert"></div>

<div class="form-label-group">
<input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
<label for="email">Email</label>
</div>


<div class="form-label-group">
<input type="password" name="inputPassword" class="form-control" placeholder="Password" id="password" required>
<label for="inputPassword">Password</label>
</div>



<button name="login-btn" id="login" class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
<p class="mt-5 mb-3 text-muted text-center">Registrarme<a href="signup.php"> Registro</a> </p>
<p class="mt-5 mb-3 text-muted text-center">&copy; 2019</p>

</form>
</div>

      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

      <script src="config/script.js"></script>

   </body>
</html>
