<?php
	session_start(); 
?>
<?php

	$alb_type = $_POST['alb_type'];
	$alb_size = $_POST['alb_size'];
	$alb_bind = $_POST['alb_bind'];
	$alb_des  = $_POST['alb_des'];
	
	include ('connect.php');

	$sql = "INSERT INTO alb_add (alb_type, alb_size, alb_bind. alb_des)
			VALUES ('$alb_type', '$alb_size', '$alb_bind', $alb_des)";
		
		
	$result = mysql_query($sql, $con) 
		or die ("SQl Error" . mysql_error());
		
	//$sql_session = "SELECT * FROM register WHERE email = '$email'";
			
	$result = mysql_query($sql_session) 
		or die ("SQl Error" . mysql_error ());
		
		$rec = mysql_fetch_array ($result);
		 
	$_SESSION['fname'] = $rec['fname'];
	
	header ('location:user.php');
?> 

