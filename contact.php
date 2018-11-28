<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>::Contact ::</title>
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
          <li><a href="estudio.php">eStudio</a></li>
          <li><a href="sample.php">Samples</a></li>
          <li  class="active"><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <br /> 
      <!-- end of links -->
      <div class="row">
      <div class="col-md-12">
      	<p><font size="+2" face="Kozuka Mincho Pro R" color="#999999"> 
        	We're happy to answer any questions you have or provide you any estimate. Just send us a message in the form below with any questions you may have. 		</font></p>
      </div>      	
      </div>     
     <div class="row">
  	 <div class="col-xs-6 col-md-6" >
     
     <form action="contact-add_db.php" method="post">
  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required />
  </div>
  
  <div class="form-group">
    <label>Subject</label>
    <input type="text" class="form-control" id="pass" name="pass" placeholder="Subject" required />
  </div>
  
  <div class="form-group">
  	<label> Message </label>
  	<textarea cols="3" class="form-control" rows="3" name="msg" placeholder="Enter Your Message"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary"> Submit </button>
  <button type="reset" class="btn btn-danger"> Clear </button>
</form>
    	

     </div>
   
    <div class="row">
  	 <div class="col-xs-6 col-md-6">
    	<font color="#FEBF01" size="3">
        	EMAIL <br>
		</font>
        <font color="#999999" size="3">
        	niranjaimaging@gmail.com<br>
		</font>
     	<hr>
      </div>
      
      <div class="col-xs-6 col-md-6">  
        <font color="#FEBF01" size="3">
        	TELEPHONE <br>
		</font>
        <font color="#999999" size="3">
        	+94 813 83 91 90 | +94 716 843 813 | +94 77 166 38 50<br>
		</font>
     	<hr>
      </div>
        
       <div class="col-xs-6 col-md-6">  
        <font color="#FEBF01" size="3">
        	ADDRESS <br>
		</font>
        <font color="#999999" size="3">
        	#258/2, D. S. Senanayake Street, <br>
			Kandy,<br>
            Sri Lankka.
		</font>
     	
      </div>
     </div>
    </div>
   <!-- end of 1st division -->
   <hr>    
   
   <div class="row">
      <div class="col-md-12">
      	<p><font size="+2" face="Kozuka Mincho Pro R" color="#999999"> 
        	You Can find Us..
			</font>
      </div>      	
      </div>    
    
  	 <div class="col-xs-12 col-md-12">
    	<style>
      #map_canvas {
        width: 100%;
        height: 400px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(7.299494, 80.637100),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <div id="map_canvas" class="col-md-12">
	 </div>  
<div><hr> </div>	 
     </div>
      	<!-- end of 2nd division -->
    
      	 <br><br><hr>
    
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
 
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>

</body>
</html>
