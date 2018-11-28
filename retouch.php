<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>::Thanks Card ::</title>
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
      
  
   
   <div class="col-md-12">
   <font size="+1"> Select Your Edit Type<br>
   <form method="post" action="thanks.php">
   <input type="radio" name="type" value="ThanksCard" onClick="this.form.submit();"> Thanks Card <br></input>
   </form>
   
   <input type="radio" name="type" value="PhotoEdit" checked> Re-touch Photos<br><br>
   <font size="+1">Which Size do You Want</font>
   <form method="post" action="aaa.php">
   <select class="form-control">
    	<option>-- Select One --</option>
  		<option>3.5 x 5 (3R)</option>
 		<option>4 x 6 (4R)</option>
        <option>4 x 8 </option>
  		<option>6 x 6 </option>
        <option>4 x 10 </option>
        <option> Other </option>  	        
	</select>
  
  <div class="form-group">
  	<font size="+1">Discription </font>
    <textarea class="form-control" rows="3" placeholder="Please Add Bride & Groom's name and Vanule on going function" required></textarea>
  </div>    
     Upload Your Image
     <input type="file" id="upload"><br>
     <button type="submit" class="btn btn-primary">Submit</button><br>
	</div>
    </form>

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
    

   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>

</body>
</html>
