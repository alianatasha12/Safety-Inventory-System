<?php 	

require_once 'core.php';

$damageId = $_POST['damageId'];

$sql = "SELECT damageId, date, productname, quantity, location, reason FROM damage WHERE damageId = $damageId";
$result = $connect->query($sql);

if($result->num_rows > 0) { 
 $row = $result->fetch_array();
} // if num_rows

$connect->close();

echo json_encode($row);