<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$date = $_POST['date'];
    $productname = $_POST['productname']; 
    $quantity = $_POST['quantity'];
    $location = $_POST['location'];
    $reason = $_POST['reason'];

	$sql = "INSERT INTO damage (date,  productname,quantity,location,reason) 
	VALUES ('$date', '$productname','$quantity','$location', '$reason')";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding the members";
	}

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST