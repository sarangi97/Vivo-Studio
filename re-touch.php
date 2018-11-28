<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>::Thanks Card ::</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/local.css" rel="stylesheet" type="text/css">

</head>
<style>  
 .progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }  
 .bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }  
 .percent { position:absolute; display:inline-block; top:3px; left:48%; }  
 </style> 
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
          <li><a href="sample.php">Samples</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <br /> 
      <!-- end of links -->
      
  
   
   <div class="col-md-12">
   <font size="+1"> Select Your Edit Type<br>
   <input type="radio" name="type" value="ThanksCard" checked> Thanks Card <br></input>
   <form method="post" action="retouch.php">   
   <input type="radio" name="type" value="PhotoEdit" onClick="this.form.submit();" required> Re-touch Photos<br><br>
   </form>
	<form method="get" action="abc.php">
   <font size="+1"> Select Your Card Type<br>
   <input type="radio" name="type_1" required > Metro <br>
   <input type="radio" name="type_1" required> Phot Mixing<br><br>

   <font size="+1">Which Size do You Want</font><br>
   <input type="radio" name="size" value="3.5 x 5 (3R)" required> 3.5 x 5 (3R)<br>
   <input type="radio" name="size" value="4 x 6 (4R)" required> 4 x 6 (4R)<br>
   <input type="radio" name="size" value="4 x 8" required> 4 x 8<br>
   <input type="radio" name="size" value="6 x 6" required> 6 x 6<br>
   <input type="radio" name="size" value="4 x 10" required> 4 x 10<br>
   <input type="radio" name="size" value="Other" required> Other<br><br>

	<font size="+1"> Which Catagory do you want </font><br>
	<input type="radio" name="cat" required> Single Side <br>
	<input type="radio" name="cat" required> Duble Side <br><br>
   
  <div class="form-group">
  	<font size="+1">Discription </font>
    <textarea class="form-control" name="des" rows="3" placeholder="Please Add Bride & Groom's names and Vanule of function on going.." required></textarea>
  </div>    
     Upload Your Image
    </form>
    
    <form action="upload.php" method="post" enctype="multipart/form-data">  
     <input type="file" name="uploadedfile" multiple><br>  
     <input type="submit" value="Upload File">  
   </form>  
   
   <div class="progress">  
     <div class="bar"></div >  
     <div class="percent">0%</div >  
   </div>  
   <div id="status"></div>  
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>  
 <script src="http://malsup.github.com/jquery.form.js"></script>  
 <script>  
 (function() {  
 var bar = $('.bar');  
 var percent = $('.percent');  
 var status = $('#status');  
 $('form').ajaxForm({  
   beforeSend: function() {  
     status.empty();  
     var percentVal = '0%';  
     bar.width(percentVal)  
     percent.html(percentVal);  
   },  
   uploadProgress: function(event, position, total, percentComplete) {  
     var percentVal = percentComplete + '%';  
     bar.width(percentVal)  
     percent.html(percentVal);  
   },  
   complete: function(xhr) {  
     bar.width("100%");  
     percent.html("100%");  
     status.html(xhr.responseText);  
   }  
 });   
 })();      
 </script>  

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
