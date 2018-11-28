<?php
	
include ('connect.php');	
$target_dir = "uploads/thanks/";

	if (isset($_POST['port_type']))	$port_type  = $_POST['port_type'];	
	else $port_type  = 'NA';
	
	if (isset($_POST['port_size']))	$port_size  = $_POST['port_size'];	
	else $port_size  = 'NA';
	
	if (isset($_POST['frm_type']))	$port_frm_type = $_POST['frm_type'];
	else $port_frm_type  = 'NA';	

	if (isset($_POST['port_ch_bg']))	$port_ch_bg = $_POST['port_ch_bg'];
	else $port_ch_bg  = 'NA';	
	
	if (isset($_POST['port_des']))	$port_des = $_POST['port_des'];
	else $port_des  = 'NA';
	
	if (isset($_POST['total']))	$pay_amount = $_POST['total'];
	else $pay_amonut  = 'NA';
	
    $sql = "INSERT INTO add_port (port_type, port_size, frm_type, port_ch_bg, port_des, total, sub_date)
		VALUES ('$port_type', '$port_size', '$port_frm_type','$port_ch_bg', '".$port_des."','$pay_amount', now())";
		
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
		foreach($_FILES["uploadedfile_1"]["tmp_name"] as $key => $tmp_name){
		$xx++;
		move_uploaded_file($_FILES['uploadedfile_1']['tmp_name'][$key], $target_file_1."_".$xx.".jpg");     	   
	}
}
	header ('location:add_port_pay.php?ic='.$xx);

?>
