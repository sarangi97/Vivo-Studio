<?php
	
include ('connect.php');	
$target_dir = "uploads/thanks/";

	$cardType  = $_POST['cardType'];
	$size = $_POST['size'];
	$cat = $_POST['cat'];
	$des = $_POST['des'];
	$pay_amount = $_POST['pay_amount'];

    $sql = "INSERT INTO add_thanks (sub_date, card_type, card_size, card_cat, des, pay_amount)
		VALUES (now(), '$cardType', '$size', '$cat', '".$des."','$pay_amount')";
		
	$sql_acc = "INSERT INTO account_jobs(oder_type, amount, time)
				VALUES ('$cardType', '$pay_amount', now())";
		
		$result = mysql_query($sql, $con) 
		or die ("SQl Error" . mysql_error());
		
		$result_acc = mysql_query($sql_acc, $con) 
		or die ("SQl Error" . mysql_error());

		$iid= mysql_insert_id ($con);
	$target_file_1 = $target_dir . $iid;
	$xx = 0;
		
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
	header ('location:add_thanks_pay.php?ic='.$xx);

?>
