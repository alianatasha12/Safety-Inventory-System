<?php 	



require_once 'core.php';

$sql = "SELECT * FROM damage";

$result = $connect->query($sql);

$output = array('data' => array());
if($result->num_rows > 0) { 

 // $row = $result->fetch_array();
 $active = ""; 

 while($row = $result->fetch_array()) {
 	$damageId = $row[0];
 	// active 
 	$date = $row[1];
 	$productname = $row[2];
 	$quantity = $row[3];
 	$location = $row[4];
 	$reason = $row[5];

 	$button = '<!-- Single button -->
	<div class="btn-group">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	    Action <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu">
	    <li><a type="button" data-toggle="modal" id="editdamageModalBtn" data-target="#editdamageModal" onclick="editdamage('.$damageId.')"> <i class="glyphicon glyphicon-edit"></i> Edit</a></li>
	    <li><a type="button" data-toggle="modal" data-target="#removedamageModal" id="removedamageModalBtn" onclick="removedamage('.$damageId.')"> <i class="glyphicon glyphicon-trash"></i> Remove</a></li>       
	  </ul>
	</div>';

 	$output['data'][] = array( 		
 		// name
 		$date,
 		$productname,
 		$quantity,
 		$location,
 		$reason,
 		// button
 		$button 		
 		); 	
 } // /while 

}// if num_rows

$connect->close();

echo json_encode($output);