<?php
	session_start(); 
?>
<?php
include ('connect.php');
	$alb_type = $_POST['alb_type'];
	$alb_size = $_POST['alb_size'];
	$alb_bind = $_POST['alb_bind'];
	$alb_des  = $_POST['alb_des'];
	
$target_dir = "uploads/alb/";

	
	$sql = "INSERT INTO add_alb (alb_type, alb_size, alb_bind, alb_des, sub_date)
			VALUES ('$alb_type', '$alb_size', '$alb_bind', '".$alb_des."', now())";		
		
	$result = mysql_query($sql, $con) 
		or die ("SQl Error" . mysql_error());		
		
	$result = mysql_query($sql, $con) 
		or die ("SQl Error" . mysql_error());
		$iid= mysql_insert_id ($con);
		
	$target_file = $target_dir . $iid."_1.jpg";
	$target_file2 = $target_dir . $iid."_2.jpg";
	if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["uploaded_alb"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["uploaded_alb_1"]["tmp_name"], $target_file)) {        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
	if (move_uploaded_file($_FILES["uploaded_alb_2"]["tmp_name"], $target_file2)) {        
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}		
	header ('location:upload_alb.php');
?> 

