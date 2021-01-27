<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

  $date = $_POST['editdate'];
  $productname = $_POST['editproductname']; 
  $quantity = $_POST['editquantity'];
  $location = $_POST['editlocation'];
  $reason = $_POST['editreason'];
  $damageId = $_POST['editdamageId'];

	$sql = "UPDATE damage SET date = '$date', productname = '$productname', quantity = '$quantity', location = '$location' ,reason = '$reason'WHERE damageId = '$damageId'";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Updated";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while updating the damage";
	}
	 
	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST