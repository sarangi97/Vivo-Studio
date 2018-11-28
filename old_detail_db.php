<?php
	session_start(); 
?>
<?php

	$old_type 	= $_POST['old_type'];
	$old_size 	= $_POST['old_size'];
	$old_frm_type  	= $_POST['old_frm_type'];
	$old_des  	= $_POST['old_des'];
	$total		= $_POST['total'];
	
	include ('connect.php');

	$sql = "INSERT INTO add_old (old_type, old_size, old_frm_type, old_des, total)
			VALUES ('$old_type', '$old_size', '$old_frm_type', '$old_des', '$total')";		
		
	$result = mysql_query($sql, $con) 
		or die ("SQl Error" . mysql_error());	
	
	header ('location: add_port_pay.php');

?> 
 

