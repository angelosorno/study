<?php require_once ('database.php');

$result_global = mysqli_query($conn, "SELECT *  FROM import_angel_data");
$data_global = array();
while ($row_global = mysqli_fetch_assoc($result_global)){
  $data_global[] = $row_global;
};

// Json Encode Data
$json_global = json_encode($data_global);
echo  $json_global;
?>
