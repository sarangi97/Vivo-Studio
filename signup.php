<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>::Sign Up ::</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/local.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/resources/demos/style.css">
    <link href="index_files/bootstrap.css" rel="stylesheet">   
    <link href="index_files/justified-nav.css" rel="stylesheet">
	
	<!-- validation scripts -->
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
			$("#frm_signup").validationEngine();
			});
			
			$('#reg_user').change(function () {
                if (this.value == "reg_user") {
                    $('#reg_user').show();
                } else {
                    $('#pro_pg').hide();
                }
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
      <h2><font color="8fc400"> Sign up </font></h2>
      <h3> It’s free and always will be.. </h3>
    
    <div id="reguler"><br>
    
    <!-- Reguler Customers form-->
    <div id="reg_user">
	<form action="register.php" method="post" id="frm_signup">
		<div class="col-md-4">
	<select class="form-control input-group-sm validate[required]" name="u_type" id="type" aria-expanded="true" >
        <li> <option id="" value=""> --Choose One-- </option></li>
        <li> <option id="regUser" value="reg_user"> Regular User </option></li>
        <li> <option id="proPg" value="pro_pg"> Professional Photographer</option></li>
        <li> <option id="freePg" value="free_pg"> Freelance Photographer </option></li>
        </select>
	<br>
    </div>
    <div class="col-sm-11">			
      <input type="text" class="form-control validate[required] text-input" id="fname" name="fname" placeholder="Frist Name" ><br>
    </div>    
	
    <div class="col-sm-11">
      <input type="text" class="form-control validate[required] text-input" id="lname" name="lname" placeholder="Last Name" ><br>
    </div>
    
    <div class="col-sm-11">
      <input type="email" class="form-control validate[required,custom[email]]" id="email" name="email" placeholder="Email" ><br>
    </div>
    
    <div class="col-sm-11">
      <input type="text" class="form-control validate[required] text-input" id="uname" name="uname" placeholder="User Name" ><br>
    </div>	
	
	<div class="col-sm-11">
      <input type="password"  class="form-control validate[required] text-input" id="pass1" name="pass1" placeholder="Password" ><br>
    </div>
    
    <div class="col-sm-11">
      <input type="password" class="form-control validate[required,equals[pass1]] text-input" id="pass2" name="pass2" placeholder="Re-Enter Password" ><br>
    </div> 
  </div>      
  </div>  
	 <div class="col-sm-11">
  		<input type="submit" class="btn btn-primary" value="Submit"  >
        <input type="reset" class="btn btn-danger"> 
        </form> <hr>
     </div><br><br>
    <!-- Reguler User DIV  -->
    
<br><br>
   
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
   
</body>
</html>
