<?php require_once  ('../php/database.php');

// ********** Form Agregar  **********

// // Upload image
// $target_dir = "media/voucher/";
// $target_file = $target_dir . basename($_FILES["file"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//
// // Check if image file is a actual image or fake image
// if(isset($_POST["add_data"])) {
//     $check = getimagesize($_FILES["file"]["tmp_name"]);
//     if($check !== false) {
//         // echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
//
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
//          // echo "The file ". basename( $_FILES["file_abono"]["name"]). " has been uploaded.";
//     } else {
//         // echo "Sorry, there was an error uploading your file.";
//     }
// }


// For Admin, Select User
// $user_id = "";
// $actual_user = $_SESSION['id'];
//
// $sql_adm = "SELECT * FROM table WHERE $var = id";
//   $result2 = $conn->query($sql_adm);
//   $row2 = $result2->fetch_assoc();
//   $user_type = $row2['tipo'];
//   if ($user_type == 1) {
//     $user_id = $_POST['user_id'];
// } else {
// $user_id = $_SESSION['id'];
// }

// Envio de Formulario agregar.php

// Recibiendo Datos
$title = $_POST['title'];
$slug = str_replace(' ', '-', $title); //quita espacios y pone - para slug
$period = $_POST['period'];
$dates = $_POST['dates'];
$description = $_POST['description'];
$article = $_POST['article'];
$scriptures = $_POST['scriptures'];
$related = $_POST['related'];
$images = "";
$videos = "";
$geo_location = "";
$order_history = "";
$left = $_POST['left'];
$width = $_POST['width'];
$row = $_POST['row'];
$labelsize = $_POST['labelsize'];


if (!empty($title) || !empty($slug) || !empty($period)){

$insert = "INSERT Into personajes_original_test (title, slug, period, dates, description, article, scriptures, related, images, videos, geo_location, order_history, left_val, width, row, labelsize) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($insert);
$stmt->bind_param("ssssssssssssssis", $title, $slug, $period, $dates, $description, $article, $scriptures, $related, $images, $videos, $geo_location, $order_history, $left, $width, $row, $labelsize);
$stmt->execute();
echo "<h1>Gracias, Registrado</h1>";

$stmt->close();


} else {
  echo "Faltan Datos Obligatorios";
  die();
}

 ?>
 <script type="text/javascript">

 setTimeout(function () {
    window.location.href = '/';
},1000); // 5 seconds
</script>
