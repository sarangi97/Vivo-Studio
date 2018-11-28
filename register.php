<?php
	session_start(); 
?>

<?php

	$type  = $_POST['u_type'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$uname = $_POST['uname'];
	$pass  = $_POST['pass1']; 
	
	include ('connect.php');

    $sql = "INSERT INTO register (type, fname, lname, email, uname, pass)
		VALUES ('".$type."','$fname', '$lname', '$email', '$uname', '$pass')";
		
		
	$result = mysql_query($sql, $con) 
		or die ("SQl Error" . mysql_error());
		
	$sql_session = "SELECT * FROM register WHERE email = '$email'";
			
	$result = mysql_query($sql_session) 
		or die ("SQl Error" . mysql_error ());
		
		$rec = mysql_fetch_array ($result);
		 
	$_SESSION['fname'] = $rec['fname'];
	
	header ('location:user_type.php');
?> 


<?php
	echo "Hi..!:" . $_SESSION['fname'];
	
	
?>
     
</body>
</html>
