<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>::Thanks Card ::</title>

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

<style>  
 .progress { position:relative; width:400px; border: 1px solid #ddd; padding: 1px; border-radius: 3px; }  
 .bar { background-color: #B4F5B4; width:0%; height:20px; border-radius: 3px; }  
 .percent { position:absolute; display:inline-block; top:3px; left:48%; }  
 </style>  
    
<script type="text/javascript">			
function getPriceTotal()
{
	x =$('input:radio[name=size]:checked').attr("price");
    var tot =0;
    if (x=="size"){
		tot = 500;	
		}		
	else if ($){
		tot = $('input:radio[name=size]:checked').attr("price");		
		rat= $('input:radio[name=cat]:checked').attr("rate");
		tot=(tot*rat);
	}	
	$("#totalPrice").val(tot);
}
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
  
   <form action="upload_thanks.php" method="post" enctype="multipart/form-data">
   <div class="row">
   <div class="col-md-12">
   	<font size="+2"> Fill Below Details for Your Thanks Card</font>
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
   <font size="+1"> Select Your Card Type</font>
    <br>
   	<input type="radio" name="cardType" value="Metro"> Metro <br>
   	<input type="radio" name="cardType" value="Photo Mixing"> Phot Mixing<br><br>

   <font size="+1">Which Size do You Want</font><br>
  
	<input type="radio" name="size" price="500" onClick="getPriceTotal()" value="3.5 x 5 (3R)"> 3.5 x 5 (3R)<br>
	<input type="radio" name="size" price="500" onClick="getPriceTotal()" value="4 x 6 (4R)"> 4 x 6 (4R)<br>
	<input type="radio" name="size" price="500" onClick="getPriceTotal()" value="4 x 8"> 4 x 8<br>
	<input type="radio" name="size" price="500" onClick="getPriceTotal()" value="6 x 6"> 6 x 6<br>
	<input type="radio" name="size" price="500" onClick="getPriceTotal()" value="4 x 10"> 4 x 10<br><br>

	<font size="+1"> Which Category do you want </font><br>
	<input type="radio" name="cat" rate="1" onClick="getPriceTotal()" value="Single Side"> Single Side <br>
	<input type="radio" name="cat" rate="1.5" onClick="getPriceTotal()" value="Duble Side"> Duble Side <br><br>
   
  <div class="form-group">
  	<font size="+1">Description </font>
    <textarea class="form-control" name="des" id="des" rows="3" placeholder="Please Add Bride & Groom's names and Vanule of function on going.."></textarea>
  </div>    
     Upload Your Image   
    <input type="file" name="uploadedfile_1" multiple><br>	
   
      <div class="form-group">
    	  <font size="+1">Your Payable Amount </font>
	      <input type="text" name="pay_amount" id="totalPrice">
      </div>   
     <input type="submit" name="Submit" value="Submit" class="btn btn-primary"> 
   	</form>
   </div>
      
 <hr>
 <!-- Footer -->
   <div class="row">
  	<div class="col-md-12">
        		<?php 
			include 'footer.php';
           	?> 
   	</div> 
    
    <div class="col-md-12" align="right">
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
