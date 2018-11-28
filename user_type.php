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
	  
<div class="row">
	<div class="col-md-6">
   		<h1> Hai.. <?php echo $_SESSION['fname'];  ?> Welcome  </h1>
		<h3> Select What Do You want to do.. </h3>
    </div>
    <div class="col-md-6">
	<ul class="nav navbar-top-links navbar-right">  
    	<li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="user_details.php">
                        <i class="fa fa-user fa-3x"></i> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="user_details.php"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
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
<hr>
    <div class="col-md-12">
        <div class="row">
		<?php
			if ($_SESSION['userType']== "reg_user"){				
					?>
             
			<div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="add_old.php"> <img src="images/old_2.jpg"> </a>
                    <div class="caption">
                    <h3>Old or Damage Photo Re-touch</h3>
                    <p>When you took your valuable images in past, if it is have some damages, let give us to it.. </p>
                    <p><a href="add_old.php" class="btn btn-primary" role="button">Let Start..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>
       	    
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="add_bg_change.php"> <img src="images/bg_3.jpg"></a>
                    <div class="caption">
                    <h3>Add Different Backgrounds</h3>
                    <p>If picture not satisfy with background, we can create it more attractive way in different backgrounds </p>
                    <p><a href="add_bg_change.php" class="btn btn-primary" role="button">Do It..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>           
 
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="add_port.php"> <img src="images/port_3.jpg"> </a>
                    <div class="caption">
                    <h3>Portraits Photos Re-touch </h3>
                    <p>In your life your memorable and lovely moments let us create it more and more emotionally..</p>
                    <p><a href="add_port.php" class="btn btn-primary" role="button">Yes!..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>            
            <!-- end of Reguler User -->
            
			<?php
			}
			else if ($_SESSION['userType']== "pro_pg") 
			{
			?><div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="add_albums.php"><img src="images/wedding_2.jpg"></a>
                    <div class="caption">
                    <h3>Wedding Albums Creation</h3>
                    <p>Upload Your Original Images for create attraction a wedding album/s. </p>
                    <p><a href="add_albums.php" class="btn btn-primary" role="button">Let Start..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>
       	    
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="add_thanks.php"><img src="images/thanksCard.jpg"></a>
                    <div class="caption">
                    <h3>Thanks Card Creation</h3>
                    <p>Let Give us to your Wedding or Homecoming Day Thanks Card to creation in more attractive way..</p>
                    <p><a href="add_thanks.php" class="btn btn-primary" role="button">Do It..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>           
 
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="add_port.php"><img src="images/port_3.jpg"></a>
                    <div class="caption">
                    <h3>Portraits Photos Re-touch </h3>
                    <p>In your life your memorable and lovely moments let us create it more and more emotionally..</p>
                    <p><a href="add_port.php" class="btn btn-primary" role="button">Yes!..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>
            <!-- end of Professional Photograoher -->       
            
			<?php
			}
			else if ($_SESSION['userType']== "free_pg") 
			{
			?>
			<div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="add_img_sell.php"> <img src="images/free_pg.jpg"> </a>
                    <div class="caption">
                    <h3>Put here your valueble images to find some extra income</h3>
                    <p>When you took your valuable images in past, if it is have some damages, let give us to it.. </p>
                    <p><a href="add_img_sell.php" class="btn btn-primary" role="button">Let Start..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>
       	    
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="add_bg_change.php"> <img src="images/bg_3.jpg"> </a>
                    <div class="caption">
                    <h3>Add Different Backgrounds</h3>
                    <p>If picture not satisfy with background, we can create it more attractive way in different backgrounds </p>
                    <p><a href="add_bg_change.php" class="btn btn-primary" role="button">Do It..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>           
 
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="add_port.php"> <img src="images/port_3.jpg"> </a>
                    <div class="caption">
                    <h3>Portraits Photos Re-touch </h3>
                    <p>In your life your memorable and lovely moments let us create it more and more emotionally..</p>
                    <p><a href="add_port.php" class="btn btn-primary" role="button">Yes!..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>
           <!-- end of FreeLance Photographer--> 
           
           <?php
			}
			else if ($_SESSION['userType']== "free_des") 
			{
			?>
			<div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="add_alb.php"> <img src="images/old_2.jpg"> </a>
                    <div class="caption">
                    <h3>Old or Damage Photo Re-touch</h3>
                    <p>When you took your valuable images in past, if it is have some damages, let give us to it.. </p>
                    <p><a href="add_alb.php" class="btn btn-primary" role="button">Let Start..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>
       	    
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="thanks.php"> <img src="images/bg_3.jpg"> </a>
                    <div class="caption">
                    <h3>Add Different Backgrounds</h3>
                    <p>If picture not satisfy with background, we can create it more attractive way in different backgrounds </p>
                    <p><a href="thanks.php" class="btn btn-primary" role="button">Do It..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>           
 
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="port.php"> <img src="images/port_3.jpg"> </a>
                    <div class="caption">
                    <h3>Portraits Photos Re-touch </h3>
                    <p>In your life your memorable and lovely moments let us create it more and more emotionally..</p>
                    <p><a href="port.php" class="btn btn-primary" role="button">Yes!..</a> 
                    <a href="sample.php" class="btn btn-success" role="button">Samples</a></p>
                </div>
                </div>
            </div>
           <!-- end of FreeLance Photographer-->
			<?php
			}
			?>
			
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
