
<?php
	session_start(); 
?>
<?php

	$alb_type = $_POST['alb_type'];
	$alb_size = $_POST['alb_size'];
	$alb_bind = $_POST['alb_bind'];
	$alb_des  = $_POST['alb_des'];
	
	
	include ('connect.php');
	$target_dir = "uploads/alb/";
	
	$sql = "INSERT INTO alb_add (alb_type, alb_size, alb_bind, alb_des, sub_date)
			VALUES ('$alb_type', '$alb_size', '$alb_bind', $alb_des, now())";
		
	$result = mysql_query($sql, $con) 
		or die ("SQl Error" . mysql_error());
		$iid= mysql_insert_id ($con);
	$target_file_1 = $target_dir . $iid;
	$xx = 0;
		
// Check if $uploadOk is set to 0 by an error
if (false) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
		foreach($_FILES["uploaded_alb"]["tmp_name"] as $key => $tmp_name){
		$xx++;
		move_uploaded_file($_FILES['uploaded_alb']['tmp_name'][$key], $target_file_1."_".$xx.".jpg");     	   
	}
}

		
	//$sql_session = "SELECT * FROM register WHERE email = '$email'";
			
	$result = mysql_query($sql_session) 
		or die ("SQl Error" . mysql_error ());
		
		$rec = mysql_fetch_array ($result);
		 
	$_SESSION['fname'] = $rec['fname'];
	
	header ('location:upload_alb.php');
?> 