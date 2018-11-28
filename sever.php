<?php
session_start();
//$servername = "localhost";
//$username = "root";
//$password1 = "";
//$db="register";
$errors= array();
$firstname="";
$lastname="";
$username="";
$email="";
//$con=mysqli_connect($servername, $username, $password1, $db) or die("connection failed");
//$mysqli=new mysqli($servername, $username, $password1, $db);
$db=mysqli_connect('localhost','root','','studio');


//regiter button
if (isset($_POST['register1']))
{
    $firstname= ($_POST['firstname']);
    $lastname=  ($_POST['lastname']);
    $username= ($_POST['username']);
    $email= ($_POST['email']);
    $password1= ($_POST['password1']);
    $password2= ($_POST['password2']);

//fields empty
    if(empty($firstname))
    {
        array_push($errors,"First Name is required");
    }
    if(empty($lastname))
    {
        array_push($errors,"Last Name is required");
    }
    if(empty($username))
    {
        array_push($errors,"User Name is required");
    }
    if(empty($email))
    {
        array_push($errors,"Email is required");
    }
    if(empty($password1))
    {
        array_push($errors,"Password is required");
    }
    if($password1 != $password2)
    {
        array_push($errors,"Password does not match");
    }

//no errors 
    if(count($errors) == 0)
    {
        $password=md5($password1);
        $sql="INSERT INTO reg (firstname, lastname, username, email, password1) VALUES ('$firstname','$lastname','$username','$email','$password1')";
        mysqli_query($db, $sql);
        
        $_SESSION['username']=$username;
        $_SESSION['success']= "Logged in";
        header('location:reg_done.php');
        
    }

    

}


//log user in from login page
if (isset($_POST['login']))
{
	$email= ($_POST['email']);
    $password= ($_POST['password1']);


if(empty($email))
{
	array_push($errors, "Email is required");
}

if(empty($password))
{
	array_push($errors, "Password is required");
}
if (count($errors)==0){
	$password1= md5($password);//encript password before comparing with that from data base
	$query="SELECT* FROM reg WHERE email='$email' AND password1='$password'";
	$result = mysqli_query($db, $query);
	
	if(mysqli_num_rows($result)==1){
		
		            // log user in
		            $_SESSION['email']=$email;
					$_SESSION['success']= "Logged in";
					header('location:Myaccount.php');// redirect to home page
					
		}else{
			array_push($errors,"wrong username/password");
		
}
}
	}
//logout
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['email']);
	header('location:index.php');
}

?>