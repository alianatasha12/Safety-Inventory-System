<?php 	



require_once 'core.php';

$sql = "SELECT * FROM supplier";

$result = $connect->query($sql);

$output = array('data' => array());
if($result->num_rows > 0) { 

 // $row = $result->fetch_array();
 $active = ""; 

 while($row = $result->fetch_array()) {
 	$supplier_id = $row[0];
 	// active 
 	$date_supplier = $row[1];
 	$suppliername = $row[2];
 	$contact = $row[3];
 	$address = $row[4];
 	$item = $row[5];
 	$price = $row[6];
 	$quantity = $row[7];
 	$reason = $row[8];
 	$total = $row[9];

 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" id="editsupplierModalBtn" data-target="#editsupplierModal" onclick="editsupplier('.$supplier_id.')"> <i class="glyphicon glyphicon-edit"></i> Edit</a></li>
	    <li><a type="button" data-toggle="modal" data-target="#removesupplierModal" id="removesupplierModalBtn" onclick="removesupplier('.$supplier_id.')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>       
	  </ul>
	</div>';

 	$output['data'][] = array( 		
 		// name
 		$date_supplier,
 		$suppliername,
 		$contact,
 		$address,
 		$item,
 		$price,
 		$quantity,
 		$reason,
 		$total,




 		// button
 		$button 		
 		); 	
 } // /while 

}// if num_rows

$connect->close();

echo json_encode($output);