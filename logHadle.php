<?php
	session_start();
	include ('connect.php');
	
$sql = "SELECT * FROM register WHERE email='".$_POST['email']."' AND pass='".$_POST['pass']."'"; 
$result = mysql_query($sql, $con);

if(mysql_num_rows($result)){
	$r = mysql_fetch_assoc ($result);
		$_SESSION['fname'] = $r['fname'];
		$_SESSION['lname'] = $r['lname'];
		$_SESSION['email'] = $r['email'];
		$_SESSION['userType'] = $r['type'];
		echo 'ok';		
}
else{
		echo 'no';
		}	

?>