<?php

	$email 	= $_POST['email'];
	$pass	= $_POST['pass'];
	$msg	= $_POST['msg'];
	
	include 'connect.php';
	
	$sql = ("INSERT INTO contact (email, pass, msg)
			VALUES ('".$email."', '".$pass."', '".$msg."')");
			
	$result = mysql_query($sql, $con)
		or die ("SQL Error ". mysql_error());
		
	header ('location: cont_done.php');
?>