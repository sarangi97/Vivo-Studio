<?php

ob_start();
include 'connect.php';
$tbl_name="register"; // Table name 

// Define $myusername and $mypassword 
$email=$_POST['email']; 
$pass=$_POST['pass']; 

// To protect MySQL injection (more detail about MySQL injection)
$email = stripslashes($email);
$pass = stripslashes($pass);
$email = mysql_real_escape_string($email);
$pass = mysql_real_escape_string($pass);
$sql="SELECT * FROM $tbl_name WHERE email='$email' and pass='$pass'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("email");
session_register("pass"); 
header("location:user.php");
}
else {
echo "Wrong Username or Password";
}
ob_end_flush();
?>