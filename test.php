<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php  
 /*$upload_dir = $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['PHP_SELF']);  
 $upload_url = '/';  
      $temp_name = $_FILES['uploadedfile']['tmp_name'];  
      $file_name = $_FILES['uploadedfile']['name'];  
      $file_path = $upload_dir.$upload_url.$file_name;  
      if(move_uploaded_file($temp_name, $file_path))  
      {  
           echo "File uploaded Success !";  
      }  
*/

//This is the directory where images will be saved
/*$target = "/pics";
$target = $target . basename( $_FILES['file']['name']);
*/
$target="aaa/";
	$target = $target . basename( $_FILES['file']['name']) ;
//This gets all the other information from the form
$type  	=$_POST['type'];
$type_1	=$_POST['type_1'];
$size  	=$_POST['size'];
$cat	=$_POST['cat'];
$des 	=$_POST['des'];
$upload	=($_FILES['file']['name']);


// Connects to your Database	
	mysql_connect("localhost", "root", "") 
		or die(mysql_error()) ;
	mysql_select_db("niop") 
		or die(mysql_error()) ;

//Writes the information to the database
mysql_query("INSERT INTO images (no, type, type_1, size, cat, des, upload)
VALUES ('$type', '$type_1', '$size', '$cat', '$des', '$upload')") ;

//Writes the Filename to the server
if(move_uploaded_file($_FILES['file']['tmp_name'], $target))
		{
			echo "The file ". basename( $_FILES['file']['name']). " has been uploaded";
			
		}
		else
		{
			echo "Sorry, there was a problem uploading your file.";
		}
?>

 
</body>
</html>