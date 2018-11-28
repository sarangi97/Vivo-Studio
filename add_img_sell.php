<?php
	session_start(); 
?>
<!doctype html>
<html>
<head>

	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>
	
<meta charset="utf-8">
<title>:: Upload Images For Sell::</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/local.css" rel="stylesheet" type="text/css">


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
			$("#img_sell").validationEngine();
			});		
		
	</script>
</head>

    <link href="index_files/bootstrap.css" rel="stylesheet">
    <link href="index_files/justified-nav.css" rel="stylesheet"> 

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
	  
 
    <form action="upload_img_sell.php" id="img_sell" method="post">     
        <h1>Give Details about Image</h1> 		   
                    
		<div id="img_type" class="col-md-6">
   		<font size="+1">Which Category is Your Image</font><br>
        	<select class="form-control input-group-sm validate[required]" name="pg_type" id="pg_type">
            <option id="" value=""> --Select Your Image Category-- </option>
            <option id="doc_pg" value="Document Photography"> Document Photography </option>
            <option id="fas_pg" value="Fashion Photography"> Fashion Photography </option>
            <option id="lfe_pg" value="Life Style Photography"> Life Style Photography </option>
            <option id="mac_pg" value="Macro Photography"> Macro Photography </option>
            <option id="pot_pg" value="Portrait Photography"> Portrait Photography </option>
            <option id="str_pg" value="Street Photography"> Street Photography </option>
            <option id="tra_pg" value="Travel Photography"> Travel Photography </option>
            <option id="wil_pg" value="Wild Life photography"> Wild Life photography </option>            
            </select>
	<br>
      
	<font size="+1"> Enter Name for Your Image </font><br>
			<input type="text" name="img_name" class="form-control validate[required] text-input" id="img_name">
    <br>
  
   		<font size="+1">Which Category is Your Image</font><br>
        	<select class="form-control input-group-sm validate[required]" name="img_price" id="img_price">
   				<option id="" value=""> -- Select Price range for Your Image -- </option>
        		<option id="img_1" value="LKR. 200-400"> LKR. 200-400 </option>
        		<option id="img_2" value="LKR. 400-600"> LKR. 400-600 </option>
        		<option id="img_3" value="LKR. 600-800"> LKR. 600-800 </option>
        		<option id="img_4" value="LKR. 800-1000"> LKR. 800-1000 </option>
        		<option id="img_5" value="LKR. 1000-1250"> LKR. 1000-1250 </option>
        		<option id="img_6" value="LKR. 1250-1500"> LKR. 1250-1500 </option>
        		<option id="img_7" value="LKR. 1500-1750"> LKR. 1500-1750 </option>
        		<option id="img_8" value="LKR. 1750-2000"> LKR. 1750-2000 </option>
        		<option id="img_9" value="LKR. 2000-2500"> LKR. 2000-2500 </option>
        		<option id="img_10" value="LKR. 2500-300"> LKR. 2500-3000 </option>        	
   			</select>
	<br>
  
  Upload Your Image   
     <input type="file" name="img_upload" name="submit"><br>  
                 
  	<button class="btn btn-warning"> Next </button>
   	</form> 
    </div>
    <br>
	<div class="row">
  	<div class="col-md-12">
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
    

</body>
</html>
