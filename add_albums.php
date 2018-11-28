<?php
	session_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>:: Albums Creations ::</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/local.css" rel="stylesheet" type="text/css">
</head>

<body>
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
	  
<div>
   		<font size="+2"> Upload Your Images or <a style="text-decoration:none" href="contact.php" class="link"><b>courier</b></a> to us.. </font><hr>        
</div>	
	
<form action="alb_detail.php" method="post">
    <div class="col-md-12">
   	<font size="+1">Which is your choice wish to create your album<br></font>
   	<input type="radio" name="alb_type" value="Metro" id="Metro" required > Metro <br>
   	<input type="radio" name="alb_type" value="Photo Mixing" id="Photo Mixing" required> Photo Mixing<br>
    <input type="radio" name="alb_type" value="Free Style" id="Free Style" required> Both way | Free Style <br><br>

   <font size="+1">Which size wish to create</font><br>
   <input type="radio" name="alb_size" id="alb_size" value="8 x 12" required> 8 x 12<br>
   <input type="radio" name="alb_size" id="alb_size" value="8 x 18" required> 8 x 18<br>
   <input type="radio" name="alb_size" id="alb_size" value="8 x 24" required> 8 x 24<br>
   <input type="radio" name="alb_size" id="alb_size" value="10 x 15" required> 10 x 15<br>
   <input type="radio" name="alb_size" id="alb_size" value="10 x 18" required> 10 x 18<br>
   <input type="radio" name="alb_size" id="alb_size" value="10 x 20" required> 10 x 20<br>
   <input type="radio" name="alb_size" id="alb_size" value="10 x 24" required> 10 x 24<br>
   <input type="radio" name="alb_size" id="alb_size" value="10 x 30" required> 10 x 30<br>
   <input type="radio" name="alb_size" id="alb_size" value="12 x 18" required> 12 x 18<br>
   <input type="radio" name="alb_size" id="alb_size" value="12 x 20" required> 12 x 20<br>
   <input type="radio" name="alb_size" id="alb_size" value="12 x 24" required> 12 x 24<br>
   <input type="radio" name="alb_size" id="alb_size" value="12 x 30" required> 12 x 30<br>   
   <input type="radio" name="alb_size" id="alb_size" value="Other" required> Other<br><br>

	<font size="+1"> Which is binding method  </font><br>
	<input type="radio" name="alb_bind" value="Full Page" id="Full Page" required> Full Page <br>
	<input type="radio" name="alb_bind" value="Story" id="Story" required> Story <br>
    <input type="radio" name="alb_bind" value="Photo Book" id="Photo Book" required> Photo Book<br><br>
   
  <div class="form-group">
  	<font size="+1">Description </font>
    <textarea class="form-control" name="alb_des" id="alb_des" rows="3" placeholder="Please Add Bride & Groom's names and Vanules and other comments" required></textarea>
  </div><br>
    
     Upload Your Image   
     <input type="file" name="uploaded_alb" multiple><br>  
      	
   		<button class="btn btn-warning"> Next </button>
   	</form> 
    
    <br>
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
	 </div>
      </div> <!-- container div -->     
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>

</body>
</html>
