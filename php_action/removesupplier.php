<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$supplier_id = $_POST['supplier_id'];

if($supplier_id) { 

 $sql = "DELETE FROM supplier  WHERE supplier_id = {$supplier_id}";

 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove ";
 }
 
 $connect->close();

 echo json_encode($valid);
 
} // /if $_POST