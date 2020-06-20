<?php require_once ('database.php');
mb_internal_encoding("UTF-8");

$result_global = mysqli_query($conn, "SELECT *  FROM personajes_original_es");
$data_global = array();
while ($row_global = mysqli_fetch_assoc($result_global)){
  $data_global[] = $row_global;
};

// Esta Funcion Codigica en HTML la informacion traida de la DB con tildes y demas.
function my_apply_htmlentities(&$value)
{
    $value = htmlentities($value);
}
array_walk_recursive($data_global, 'my_apply_htmlentities');
// var_dump($data_global);


// Json Encode Data
$json_global = json_encode($data_global);
echo  $json_global;
?>
