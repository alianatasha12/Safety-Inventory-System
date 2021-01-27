<?php 	

require_once 'core.php';


$valid['success'] = array('success' => false, 'messages' => array());

$damageId = $_POST['damageId'];

if($damageId) { 

 $sql = "DELETE FROM damage  WHERE damageId = {$damageId}";

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