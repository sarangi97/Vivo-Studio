<?php

	include ('connect.php');	
	
$target_dir = "uploads/old/";

	$old_type 	= $_POST['old_type'];
	$old_size 	= $_POST['old_size'];
	$old_frm_type  	= $_POST['old_frm_type'];
	$old_des  	= $_POST['old_des'];
	$total		= $_POST['total'];
	
	include ('connect.php');

	$sql = "INSERT INTO add_old (added_date, old_type, old_size, old_frm_type, old_des, total)
			VALUES (now(), '$old_type', '$old_size', '$old_frm_type', '".$old_des."', '$total')";		
		
	$result = mysql_query($sql, $con) 
		or die ("SQl Error" . mysql_error());
		$iid= mysql_insert_id ($con);
		
	$target_file_1 = $target_dir . $iid;
	$xx = 0;
		
	$sql_acc = "INSERT INTO account_jobs (oder_type, amount, time)
			VALUES ('$old_type', '$total', now())";		
		
	$result_acc = mysql_query($sql_acc, $con) 
		or die ("SQl Error" . mysql_error());
		
// Check if $uploadOk is set to 0 by an error
if (false) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
		foreach($_FILES["uploadedfile_1"]["tmp_name"] as $key => $tmp_name){
		$xx++;
		move_uploaded_file($_FILES['uploadedfile_1']['tmp_name'][$key], $target_file_1."_".$xx.".jpg");     	   
	}
}
		
	header ('location:add_old_pay.php?ic='.$xx);
?>
