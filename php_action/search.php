<?php 
require_once 'includes/header.php';

if (isset($_POST['search'])){
                                    
$search=$_POST['search'];
                                        
 $sql = ( "SELECT * FROM orders WHERE client_name LIKE '%$client_name%' OR total LIKE '%$client_name%'")
or die(mysql_error());
      
	 while($row=mysql_fetch_array($query)){
										
}}
										?>