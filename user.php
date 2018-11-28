<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>::User Category ::</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/local.css" rel="stylesheet" type="text/css">
</head>

<body>
<!--
<!-- Bootstrap core CSS -->
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
   		<h1> Hai.. <?php echo $_SESSION['fname'];  ?> Welcome</h1>
		<h3> Select What Do You want to do..</h3><hr>
</div>

    <div class="col-md-12">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/wedding_2.jpg">
                    <div class="caption">
                    <h3>Wedding Albums Creation</h3>
                    <p>Upload Your Original Images for create attraction a wedding album/s. </p>
                    <p><a href="add_alb.php" class="btn btn-primary" role="button">Let Start..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>
       	    
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/thanksCard.jpg">
                    <div class="caption">
                    <h3>Thanks Card Creation</h3>
                    <p>Let Give us to your Wedding or Homecoming Day Thanks Card to creation in more attractive way..</p>
                    <p><a href="thanks.php" class="btn btn-primary" role="button">Do It..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>           
 
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="images/port_3.jpg">
                    <div class="caption">
                    <h3>Portraits Photos Re-touch </h3>
                    <p>In your life your memorable and lovely moments let us create it more and more emotionally..</p>
                    <p><a href="port.php" class="btn btn-primary" role="button">Yes!..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>
       	</div>
		<hr>
    </div>
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
    
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>

</body>
</html>
