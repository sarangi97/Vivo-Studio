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
<title>:: Change Background ::</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/local.css" rel="stylesheet" type="text/css">

<script type="text/javascript">			
function getPriceTotal()
{
	x =$('input:radio[name=port_type]:checked').val();
    var tot =0;
    if (x=="soft"){
		tot = 500;
		$("#portSize").hide();
		$("#frmType").hide();
		
	}
	else if (x=="hard"){
		tot = $('input:radio[name=port_size]:checked').attr("price");
		$("#portSize").show();
		$("#frmType").hide();
		
	}
	else if ($){
		tot = $('input:radio[name=port_size]:checked').attr("price");		
		rat= $('input:radio[name=frm_type]:checked').attr("rate");
		tot=(tot*rat);
		$("#portSize").show();
		//$("#frmType").show();
	}
	$("#totalPrice").val(tot);
}
</script>
</head>

<body>

    <link href="index_files/bootstrap.css" rel="stylesheet">
    <link href="index_files/justified-nav.css" rel="stylesheet">

      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
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
   		<font size="+2"> Upload Your Images to Edit  </font><hr>
</div>

    <div class="col-md-12">
    <form action="port_detail_db.php" id="portDb" method="post">     
        <!--<form name="type" id="frm_type">-->
            <font size="+1">Which is your choice wish to create your album</font><br>
            <input type="radio" name="port_type" id="port_type" price="500" value="Soft Copy" onClick="getPriceTotal()" required > Just Softcopy <br>
            <input type="radio" name="port_type" id="port_type" value="Print Copy" onClick="getPriceTotal()" required> Printed Copy<br>
            <input type="radio" name="port_type" id="port_type" value="Print with Frame" onClick="getPriceTotal()" required> Print with Frame <br><br>
        <!--</form>-->
		
	<div id="portSize">
   <font size="+1">Which size wish to create</font><br>  
	
			<input type="radio" name="port_size" id="3x5" price="20" value="3 x 5 (3R)" onClick="getPriceTotal()" required> 3 x 5 (3R)<br>
           <input type="radio" name="port_size" id="4x6" price="25" value="4 x 6 (4R)" onClick="getPriceTotal()" required> 4 x 6<br>
           <input type="radio" name="port_size" id="5x7" price="30" value="5 x 7" onClick="getPriceTotal()" required> 5 x 7<br>
           <input type="radio" name="port_size" id="6x8" price="40" value="6 x 8" onClick="getPriceTotal()" required> 6 x 8<br>
           <input type="radio" name="port_size" id="6x9" price="45" value="6 x 9" onClick="getPriceTotal()" required> 6 x 9<br>
           <input type="radio" name="port_size" id="8x10" price="55" value="8 x 10" onClick="getPriceTotal()" required> 8 x 10<br>
           <input type="radio" name="port_size" id="8x12" price="75" value="8 x 12" onClick="getPriceTotal()"required> 8 x 12<br>
           <input type="radio" name="port_size" id="10x12" price="85" value="10 x 12" onClick="getPriceTotal()" required> 10 x 12<br>
           <input type="radio" name="port_size" id="10x15" price="100" value="10 x 15" onClick="getPriceTotal()" required> 10 x 15<br>
           <input type="radio" name="port_size" id="10x18" price="120" value="10 x 18" onClick="getPriceTotal()" required> 10 x 18<br>
           <input type="radio" name="port_size" id="12x15" price="140" value="12 x 15" onClick="getPriceTotal()" required> 12 x 15<br>
           <input type="radio" name="port_size" id="12x18" price="170" value="12 x 18" onClick="getPriceTotal()" required> 12 x 18<br>   
           <input type="radio" name="port_size" id="16x24" price="900" value="16 x 24 (Large Format)" onClick="getPriceTotal()" required> 16 x 24 (Large Format)<br>
           <input type="radio" name="port_size" id="18x24" price="1150" value="18 x 24 (Large Format)" onClick="getPriceTotal()" required> 18 x 24 (Large Format)<br>
           <input type="radio" name="port_size" id="20x24" price="1350" value="20 x 24 (Large Format)" onClick="getPriceTotal()" required> 20 x 24 (Large Format)<br>
           <input type="radio" name="port_size" id="20x30" price="1500" value="20 x 30 (Large Format)" onClick="getPriceTotal()" required> 20 x 30 (Large Format)<br>
           <input type="radio" name="port_size" id="24x36" price="2000" value="24 x 36 (Large Format)" onClick="getPriceTotal()" required> 24 x 36 (Large Format)<br>
           </div>		  
        
   <br><br>

	<div id="frmType">
	<font size="+1"> Which type of Frame you need </font><br>
    	
            <input type="radio" name="frm_type" id="wd_no_gls" onClick="getPriceTotal()" rate="1.5" value="Wooden Frame with Normal Glass" required> Wooden Frame with Normal Glass<br>
            <input type="radio" name="frm_type" id="wd_mt_gls" onClick="getPriceTotal()" rate="1.75" value="Wooden Frame with Matte Glass" required> Wooden Frame with Matte Glass <br>
            <input type="radio" name="frm_type" id="bx_frm" onClick="getPriceTotal()" rate="2" value="Box Frame" required> Box Frame<br><br>
         
      </div>
   
  <div class="form-group">
  	<font size="+1">Discription </font>
    <textarea class="form-control" name="port_des" id="port_des" rows="3" placeholder="Please Add Your Comment here.."></textarea>
  </div>  
  
  <div class="form-group">
  	<font size="+1">Your Paybale Amount </font>
  <input type="text" name="total" id="totalPrice">
  </div> 
    
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
    

</body>
</html>
