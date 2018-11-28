<?php
	session_start(); 
?>

<?php
	include ('connect.php');
	
	$pg_type  = $_POST['pg_type'];
	$img_name = $_POST['img_name'];
	$img_price = $_POST['img_price'];
	
    $sql = "INSERT INTO add_images (added_date, cat, title, price)
		VALUES (now(), '".$pg_type."','$img_name', '".$img_price."')";
		
	$result = mysql_query($sql, $con) 
		or die ("SQl Error" . mysql_error());
	
	// Image Upload part
	$img_id= mysql_insert_id ($con);
	$target_file_1 = $target_dir . $img_id;
	$img = 0;


$target_dir = "uploads/img/";
$target_file = $target_dir . basename($_FILES["img_upload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["img_upload"]["tmp_name"]);
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

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["img_upload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["img_upload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
	
	header ('location:add_imag_sell.php');
?> 

     
</body>
</html>
