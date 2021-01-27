<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {	

	$date_supplier = $_POST['date_supplier'];
    $suppliername = $_POST['suppliername']; 
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $item = $_POST['item'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $reason = $_POST['reason'];
    $total = $_POST['total'];

	$sql = "INSERT INTO supplier (date_supplier,  suppliername,contact,address,item,price,quantity,reason,total) 
	VALUES ('$date_supplier', '$suppliername','$contact','$address', '$item', '$price', '$quantity', '$reason', '$total')";

	if($connect->query($sql) === TRUE) {
	 	$valid['success'] = true;
		$valid['messages'] = "Successfully Added";	
	} else {
	 	$valid['success'] = false;
	 	$valid['messages'] = "Error while adding";
	}

	$connect->close();

	echo json_encode($valid);
 
} // /if $_POST