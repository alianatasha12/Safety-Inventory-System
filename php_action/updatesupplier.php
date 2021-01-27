<?php 	

require_once 'core.php';

$valid['success'] = array('success' => false, 'messages' => array());

if($_POST) {
	$editdate_supplier  = $_POST['editdate_supplier'];
	$editsuppliername 		= ($_POST['editsuppliername']);
	$editcontact 		= ($_POST['editcontact']);
	$editaddress 		= ($_POST['editaddress']);
	$edititem 		    = ($_POST['edititem']);
	$editprice 		    = ($_POST['editprice']);
	$editquantity 		= ($_POST['editquantity']);
	$editreason 		= ($_POST['editreason']);
	$edittotal 		    = ($_POST['edittotal']);
	$supplier_id 		= $_POST['supplier_id'];

				
	$sql = "UPDATE supplier SET date_supplier = '$editdate_supplier', suppliername = '$editsuppliername', contact = '$editcontact' , address = '$editaddress' , item = '$edititem', price = '$editprice', quantity = '$editquantity', reason = '$editreason', total = '$edittotal'WHERE supplier_id = $supplier_id ";

	if($connect->query($sql) === TRUE) {
		$valid['success'] = true;
		$valid['messages'] = "Successfully Update";	
	} else {
		$valid['success'] = false;
		$valid['messages'] = "Error while updating supplier info";
	}

} // /$_POST
	 
$connect->close();

echo json_encode($valid);
 
