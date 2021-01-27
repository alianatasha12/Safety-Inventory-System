<?php 

require_once 'core.php';

if($_POST) {

	$startDate = $_POST['startDate'];
	$date = DateTime::createFromFormat('m/d/Y',$startDate);
	$start_date = $date->format("Y-m-d");


	$endDate = $_POST['endDate'];
	$format = DateTime::createFromFormat('m/d/Y',$endDate);
	$end_date = $format->format("Y-m-d");

	$sql = "SELECT * FROM supplier WHERE date_supplier >= '$start_date' AND date_supplier <= '$end_date' ";
	$query = $connect->query($sql);

	$table = '
	<table border="1" cellspacing="0" cellpadding="0" style="width:100%;">
		<tr>
			<th>Date</th>
			<th>Supplier Name</th>
			<th>Contact</th>
			<th>Address</th>
			<th>Item</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Reason</th>
			<th>Staff Name</th>
		</tr>
<tr>';
		$totalAmount = 0;
		while ($result = $query->fetch_assoc()) {
			$table .= '<tr>
				<td><center>'.$result['date_supplier'].'</center></td>
				<td><center>'.$result['suppliername'].'</center></td>
				<td><center>'.$result['contact'].'</center></td>
				<td><center>'.$result['address'].'</center></td>
				<td><center>'.$result['item'].'</center></td>
				<td><center>'.$result['price'].'</center></td>
				<td><center>'.$result['quantity'].'</center></td>
				<td><center>'.$result['reason'].'</center></td>
				<td><center>'.$result['total'].'</center></td>

				
			</tr>';	
			$totalAmount += $result['price'];

		}
		$table .= '
		</tr>


		<tr>
			<td colspan="3"><center>Total Price for Item Purchase</center></td>
			<td><center>'.$totalAmount.'</center></td>
		</tr>
		
	</table>
	';	



	
	

	echo $table;

}

?>