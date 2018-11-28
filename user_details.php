<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>:: User Area ::</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/local.css" rel="stylesheet" type="text/css">
</head>

   <link href="index_files/bootstrap.css" rel="stylesheet">
   <link href="index_files/justified-nav.css" rel="stylesheet">
  </head> 

  <body>
	<div class="container">
    <img src="images/head_1.png" width="100%" height="100%"> 
		<br><br>    
      <div class="masthead">
          <ul class="nav nav-justified">
          <li><a href="index.php">Home</a></li>
          <li> <a href="about.php">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li class="active"><a href="estudio.php">eStudio</a></li>
          <li><a href="#">Samples</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <br /> 
      <!-- end of links -->
	  
<div class="row">   
    <div class="col-md-6">
	<ul class="nav navbar-top-links navbar-right">  
    	<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">                        
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>                   
         </li>
      </ul>
    </div>
</div>

 <div class="col-lg-6">
    <h3> General Account Settings </h3>
<?php

include 'connect.php';

  $selectSQL = "SELECT * FROM register WHERE email=(select MAX(email) from register)";
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>    
<table class="table table-striped">  
  <tbody>
   

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_account">
 Edit Your Account 
</button>
	<?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
			echo "<tr><td>User Type</td><td>{$row['type']}</td></tr><br>";
			
			echo "<tr><td>First Name</td><td>{$row['fname']}</td></tr><br>";
			echo "<tr><td>Last Name</td><td>{$row['lname']}</td></tr><br>";
			echo "<tr><td>User Name</td><td>{$row['uname']}</td></tr><br>";
			echo "<tr><td>Password</td><td>{$row['pass']}</td></tr><br>";		
        }
      }
    ?>
  </tbody>
</table>
</div>
    <?php
  }

?>
    
    <br>
	<div class="row">
  	<div class="col-md-12">
        		<?php 
			include 'footer.php';
           	?> 
   	</div> 
    
    <div class="col-md-6" align="right">
        		<?php 
			include 'footer_contact.php';
           	?> 
   	</div>        
     </div><br><br><br><br><br>
	 
      </div> <!-- container div -->     
   
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>

</body>

<!-- Modal_Edit Account -->
<div class="modal fade" id="edit_account" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">General Account Setting</h4>
      </div>
      <div class="modal-body">
     	<!--First Name : <input type="text" name="f_name" id="f_name"  class="form-control"><br>
		Last Nane : <input type="text" name="l_name" id="l_name" class="form-control"><br>
		User Name : <input type="text" name="u_name" id="u_name" class="form-control"><br>-->
        Current Password : <input type="password" name="crnt_pass" id="crnt_pass" class="form-control"><br>
		New Password : <input type="password" name="new_pass" id="new_pass" class="form-control"><br>
		Conforme Password : <input type="password" name="cnfm_pass" id="cnfm_pass" class="form-control">       
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" formaction="account_update.php">Save changes</button>
      </div>
    </div>
  </div>
</div>

</html>
