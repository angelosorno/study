<?php

require 'const.php';

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASS);
$table_personajes = 'personajes_original_test';
// Storing in Array
if ($conn->connect_error) {
  die('Database Error:' . $conn->connect_error);
}
