<?php
	session_start(); 
?>
<?php
include ('connect.php');

	$alb_type = $_POST['alb_type'];
	$alb_size = $_POST['alb_size'];
	$alb_bind = $_POST['alb_bind'];
	$alb_des  = $_POST['alb_des'];
	
	$sql = "INSERT INTO add_alb (alb_type, alb_size, alb_bind, alb_dec)
			VALUES ('$alb_type', '$alb_size', '$alb_bind', '".$alb_des."')";
		
		
	$result = mysql_query($sql, $con) 
		or die ("SQl Error" . mysql_error());
				
		header ('location:user.php');
?> 

