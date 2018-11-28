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
<!--
<!-- Bootstrap core CSS -->
    <link href="index_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="index_files/justified-nav.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
 
  -->
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
   		<font face="Trajan Pro 3" size="+2"> Upload Your Images or courier to us.. </font><hr>
</div>

    <div class="col-md-12">
   	<font size="+2"> Fill Below Detaisl for Your Thanks Card</font><br><hr>   
	<font size="+1">Which is your choice wish to create your album<br>
   	<input type="radio" name="alb_type" required > Metro <br>
   	<input type="radio" name="alb_type" required> Phot Mixing<br>
    <input type="radio" name="alb_type" required> Both way | Free Sytle <br><br>

   <font size="+1">Which size wish to create</font><br>
   <input type="radio" name="alb_size" id="alb_size" value="8 x 12" required> 8 x 12<br>
   <input type="radio" name="alb_size" id="alb_size" value="8 x 18" required> 8 x 18<br>
   <input type="radio" name="alb_size" id="alb_size" value="8 x 24" required> 8 x 24<br>
   <input type="radio" name="alb_size" id="alb_size" value="10 x 15" required> 10 x 15<br>
   <input type="radio" name="alb_size" id="alb_size" value="10 x 18" required> 10 x 18<br>
   <input type="radio" name="alb_size" id="alb_size" value="10 x 20" required> 10 x 20<br>
   <input type="radio" name="slb_size" id="alb_size" value="10 x 24" required> 10 x 24<br>
   <input type="radio" name="alb_size" id="alb_size" value="10 x 30" required> 10 x 30<br>
   <input type="radio" name="alb_size" id="alb_size" value="12 x 18" required> 12 x 18<br>
   <input type="radio" name="alb_size" id="alb_size" value="12 x 20" required> 12 x 20<br>
   <input type="radio" name="alb_size" id="alb_size" value="12 x 24" required> 12 x 24<br>
   <input type="radio" name="alb_size" id="alb_size" value="12 x 30" required> 12 x 30<br>   
   <input type="radio" name="alb_size" id="alb_size" value="Other" required> Other<br><br>

	<font size="+1"> Which is binding method  </font><br>
	<input type="radio" name="alb_bind" id="alb_bind" required> Full Page <br>
	<input type="radio" name="abl_bind" id="alb_bind" required> Story <br>
    <input type="radio" name="alb_bind" id="alb_bind" required> Photo Book<br><br>
   
  <div class="form-group">
  	<font size="+1">Discription </font>
    <textarea class="form-control" name="alb_des" id="alb_des" rows="3" placeholder="Please Add Bride & Groom's names and Vanules and other comments" required></textarea>
  </div>    
     Upload Your Image
    </form>
    
    <form action="alb_add.php" method="post" enctype="multipart/form-data">  
    <form action="payment.php" method="post">
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
	 
      </div> <!-- container div -->     
    

   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>

</body>
</html>
