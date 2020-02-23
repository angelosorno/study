<?php require_once ('database.php');
// Return JSON with Count, and Event['slug','Tite']
$search = $_GET['search'];
$result_global = mysqli_query($conn, "SELECT slug, title FROM $table_personajes WHERE (title like '%$search%' OR description like '%$search%' or article like '%$search%') ");
$data_global = mysqli_fetch_assoc($result_global);
$data_global = array();
while ($row_global = mysqli_fetch_assoc($result_global)){
  $data_global[] = $row_global;
};

// Json Encode Data
$json_global = json_encode($data_global);
echo json_encode($data_global[0]['title']).",".json_encode($data_global[0]['slug']);
// echo "{'count':".count($data_global).",'events':".$json_global."}";
