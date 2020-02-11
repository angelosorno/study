<?php
  require_once  ('../php/database.php');

  $result_global = mysqli_query($conn, "SELECT * FROM personajes_original_test");
  $data_global = array();
  while ($row_global = mysqli_fetch_assoc($result_global)){
    $data_global[] = $row_global;
  };

  // Json Encode Data
  $json_global = json_encode($data_global);
 ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">

   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="icon" type="image/x-icon" href="favicon.ico"/>
   <link rel="icon" type="image/png" href="images/icon-s.png"/>
   <link rel="apple-touch-icon" type="image/png" href="images/icon-s.png"/>

   <title>Linea del Tiempo • Historia Bíblica</title>

 <link href="https://fonts.googleapis.com/css?family=Fira+Sans:200,300,400,500" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <link href="script/jquery.mobile.custom.min.js"></link>
 <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
 <link href="https://preview.webpixels.io/purpose-application-ui-kit-v1.0.0/assets/css/purpose.css" rel="stylesheet">
 <!-- <link href="style.css" rel="stylesheet"> -->

 </head>
 <body>

 <!--Menu de Navegacion -->
 <!-- <nav name="nav_bar"><nav class="navbar fixed-bottom navbar-dark bg-white nav nav-pills nav-fill"><a class="nav-item nav-link" href="index.php"><i class="fa fa-home"></i></a><a class="nav-item nav-link" href="transactions.html"><i class="fa fa-list-ul"></i></a><a class="nav-item nav-link" href="accounts.html"><i class="fa fa-credit-card"></i></a><a class="nav-item nav-link" href="form.html"><i class="fa fa-plus-circle"></i></a></nav></nav> -->

 <div class="container">

 <h1 class="title">Nueva Entrada</h1>

<!-- *** Espacios -->
<!--
title
*slug
period
dates
description
article
scriptures
related
images
videos
geo-location
order-history
left
width
row
labelsize
 -->


 <!-- Formulario Post Abonos -->
 <form class="" action="agregar_datos.php" method="post">

 <div class="row">
     <div class="col-md-6">
         <div class="input-group form-group">
             <label class="input-group-text text-light bg-primary">Titulo</label>
             <input class="form-control" name="title"   placeholder="Titulo Corto de Acontecimeinto" autofocus required>
         </div>
     </div>

     <div class="row">
         <div class="col-md">
             <div class="input-group form-group">
                 <label class="input-group-text text-light bg-primary">Periodo</label>
                 <input class="form-control" name="period"   placeholder="Numero de acuerdo al Periodo Ej: 1" autofocus required>
             </div>
         </div>


         <div class="">
             <div class="col-md">
                 <div class="input-group form-group">
                     <label class="input-group-text text-light bg-primary">Fechas</label>
                     <input class="form-control" name="dates"   placeholder="Anos del Acontecimiento Ej -3000" autofocus required>
                 </div>
             </div>

             <div class="">
                 <div class="col-md">
                     <div class="input-group form-group">
                         <textarea name="description"  class="form-control" resize="none" placeholder="Descripcion Introductoria" s="3"></textarea>
                     </div>
                 </div>
             </div>

             <div class="">
                 <div class="col-md">
                     <div class="input-group form-group">
                         <textarea name="article"  class="form-control" resize="none" placeholder="Toda la Historia" s="6"></textarea>
                     </div>
                 </div>
             </div>

             <div class="">
                 <div class="col-md">
                     <div class="input-group form-group">
                         <label class="input-group-text text-light bg-primary">Escrituras</label>
                         <input class="form-control" name="scriptures"   placeholder="Versos de la Biblia" autofocus required>
                     </div>
                 </div>

                 <div class="">
                     <div class="col-md">
                         <div class="input-group form-group">
                             <label class="input-group-text text-light bg-primary">Relaciones</label>
                             <input class="form-control" name="related"   placeholder="Personajes Relacionados" autofocus required>
                         </div>
                     </div>

                     <div class="">
                         <div class="col-md">
                             <div class="input-group form-group">
                                 <label class="input-group-text text-light bg-primary">left</label>
                                 <input class="form-control" name="left"   placeholder="valor con px sin espacios" autofocus required>
                             </div>
                         </div>

                         <div class="">
                             <div class="col-md">
                                 <div class="input-group form-group">
                                     <label class="input-group-text text-light bg-primary">width</label>
                                     <input class="form-control" name="width"   placeholder="valor con px sin espacios" autofocus required>
                                 </div>
                             </div>

                             <div class="">
                                 <div class="col-md">
                                     <div class="input-group form-group">
                                         <label class="input-group-text text-light bg-primary">row</label>
                                         <input class="form-control" name="row" pattern="[0-9]*"  placeholder="Numero en la fila que pone la Info, de 10 a 20 es visible" autofocus required>
                                     </div>
                                 </div>

                                 <div class="">
                                     <div class="col-md">
                                         <div class="input-group form-group">
                                             <label class="input-group-text text-light bg-primary">Tamano Info</label>
                                             <input class="form-control" name="labelsize"   placeholder="'major' grande o 'minor' pequeno" autofocus required>
                                         </div>
                                     </div>

 <!-- <div class="row align-items-center">

   <div class="col-md-6 form-group">
        <input type="file" name="file_abono" id="file_abono" class="custom-input-file custom-input-file--2" data-multiple-caption="{count} files selected" multiple />
       <label for="file_abono">
           <i class="fa fa-upload"></i>
           <span>Adjuntar Comprobante</span>
       </label>
   </div>
 </div> -->


 <button name="add_data" id="add_data" class="btn btn-md btn-success  rounded-pill" type="submit">Enviar</button>


 <!-- FIN Formulario Post Abonos -->
 </div>

 </form>

   <!-- <script src="scripts.js"></script> -->

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 </body>

 </html>
