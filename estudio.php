<?php
// Start the session
session_start();
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>::eStudio ::</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/local.css" rel="stylesheet" type="text/css">
	<link href="index_files/bootstrap.css" rel="stylesheet">
    <link href="index_files/justified-nav.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js">    
    </script>
	
	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<script src="js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
	<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		$(document).ready(function(){
			// binds form submission and fields to the validation engine
			$("#frm_signin").validationEngine();
			});	
  
    </script>			
					
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
          <li><a href="sample.php">Samples</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <br /> 
      <!-- end of links -->
      	<div class="alert">
		</div>
      
      <h2><font color="8fc400"> Sign in Today.. </font></h2>
     <form class="form-inline" role="form" method="POST" id="frm_signin">
	 <div class="form-group">
    <label class="sr-only" for="emailAddress">Email address</label>
    <input type="email" class="form-control validate[required,custom[email]]" id="email_1" placeholder="Enter email" name="email">
  </div>
  
  <div class="form-group">
    <label class="sr-only" for="password">Password</label>
    <input type="password" class="form-control validate[required] text-input" id="pass_1" placeholder="Password" name="pass">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Remember me
    </label>
  </div>
  <button type="button" id="btn_submit" class=" btn btn-primary" formaction="logHadle.php">Sign in</button><br><br>
  </form>
  <label> Rigister Now.. </label>
  <form>
  <button class="btn btn-success" formaction="signup.php"> Sign Up.. </button>
 </form>  
   
<html>
<br><hr>
<!-- Footer -->
   <div class="row">
  	<div class="col-md-6">
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
    
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>
 <script>  
  $("#btn_submit").click(function(){
		  $.post("logHadle.php",$("#frm_signin").serialize(),
		  function(data){
				if(data=='ok')
				{
					document.location ="user_type.php";
					}else{
					$(".alert").html("<p> Wrong User Name or Password</p>");	
					$(".alert").fadeIn(500).delay(5000).fadeOut(400);
				}
		  });
	});
</script>
</body>
</html>
