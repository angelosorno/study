<?php require_once ('database.php');

$slug = $_GET['slug'];

$result_global = mysqli_query($conn, "SELECT * FROM personajes_original_es WHERE slug = '".$slug."'");
$data_global = mysqli_fetch_assoc($result_global);
// $data_global = array();
// while ($row_global = mysqli_fetch_assoc($result_global)){
//   $data_global[] = $row_global;
// };

// function my_apply_htmlentities(&$value)
// {
//     $value = htmlentities($value);
// }
// array_walk_recursive($data_global, 'my_apply_htmlentities');
// var_dump($data_global);


// Json Encode Data
$json_global = json_encode($data_global);

echo $json_global
?>
