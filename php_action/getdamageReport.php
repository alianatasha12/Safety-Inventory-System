<?php 

require_once 'core.php';

if($_POST) {

	$startDate = $_POST['startDate'];
	$date = DateTime::createFromFormat('m/d/Y',$startDate);
	$start_date = $date->format("Y-m-d");


	$endDate = $_POST['endDate'];
	$format = DateTime::createFromFormat('m/d/Y',$endDate);
	$end_date = $format->format("Y-m-d");

	$sql = "SELECT * FROM damage WHERE date >= '$start_date' AND date <= '$end_date' ";
	$query = $connect->query($sql);

	$table = '
	<table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<th>Date</th>
			<th>Product Name</th>
			<th>Quantity</th>
			<th>Location</th>
			<th>Reason</th>
		</tr>
<tr>';
		$totalAmount = 0;
		while ($result = $query->fetch_assoc()) {
			$table .= '<tr>
				<td><center>'.$result['date'].'</center></td>
				<td><center>'.$result['productname'].'</center></td>
				<td><center>'.$result['quantity'].'</center></td>
				<td><center>'.$result['location'].'</center></td>
				<td><center>'.$result['reason'].'</center></td>
			</tr>';	
			$totalAmount += $result['quantity'];
		}
		$table .= '
		</tr>

		<tr>
			<td colspan="3"><center>Total Damage</center></td>
			<td><center>'.$totalAmount.'</center></td>
		</tr>
	</table>
	';	

	
	

	echo $table;

}

?>