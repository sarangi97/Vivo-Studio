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
<title>:: Old Photos Re-touch::</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/local.css" rel="stylesheet" type="text/css">

<script type="text/javascript">		
function getPriceTotal()
{	
	x =$('input:radio[name=old_type]:checked').val();
    var tot =0;
	
    if (x=="Soft Copy"){
		tot = 500;		
		$("#old_port_size").hide();
		$("#old_bg_port").hide();
		$("#old_frm_type").hide();
		$("#old_bg_port").hide();
		$("#old_dec").hide();		
		
	}
	else if (x=="Print Copy"){
		tot = $('input:radio[name=old_size]:checked').attr("price");
		$("#old_port_size").show();
		$("#old_bg_port").show();
		$("#old_frm_type").hide();
		$("#old_bg_port").hide();
		$("#old_dec").show();
		
	}
	else if (x=="Print Copy with background Change"){
		tot = $('input:radio[name=old_size]:checked').attr("price");
		tot=((tot*1) + (250*1));
		$("#old_port_size").show();
		$("#old_bg_port").show();
		$("#old_frm_type").hide();
		$("#old_bg_port").show();
		$("#old_dec").show();
		
	}
	else if (x=="Print with Frame"){
		tot = $('input:radio[name=old_size]:checked').attr("price");
		rat= $('input:radio[name=old_frm_type]:checked').attr("rate");
		tot=((tot*rat));
		$("#old_port_size").show();
		$("#old_bg_port").show();
		$("#old_frm_type").show();
		$("#old_bg_port").hide();
		$("#old_dec").show();
		
	}
	else if (x){
		tot = $('input:radio[name=old_size]:checked').attr("price");		
		rat= $('input:radio[name=old_frm_type]:checked').attr("rate");
		tot=((tot*rat) + (250*1));
		$("#old_port_size").show();
		$("#old_bg_port").show();
		$("#old_frm_type").show();
		$("#old_bg_port").show();
		$("#old_dec").show();
	}
	$("#totalPrice").val(tot);
}
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
          <li><a href="#">Samples</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <br /> 
      <!-- end of links -->
	  
   <div class="col-md-12">
    <form action="upload_old.php" id="oldDb" method="post">     
        <!--<form name="type" id="frm_type">-->
            <h1>Fill Below Details about Your Request</h1>
            
			<div class="type" id="soft_copy_div">
            	<input type="radio" name="old_type" id="old_soft" price="500" value="Soft Copy" onClick="getPriceTotal()" required > 
                	Just Softcopy 
                <br>
            </div>
            
			<div class="type" id="print_div">
				<input type="radio" name="old_type" id="old_print" value="Print Copy" onClick="getPriceTotal()" required> 
                	Printed Copy<br>
     		</div>
            
      		<div class="type" id="print_bg_div">
				<input type="radio" name="old_type" id="old_print_bg" value="Print Copy with background Change" onClick="getPriceTotal()" required>
                	Printed Copy with Background Change<br>
      		</div>
            
			<div class="type" id="print_frame_div">
				<input type="radio" name="old_type" id="old_print_frm" value="Print with Frame" onClick="getPriceTotal()" required> 
                	Print with Frame <br>
			</div>
            
            <div class="type" id="print_frame_bg_div">
				<input type="radio" name="old_type" id="old_print_frm" value="Print Copy Change Background and Frame" onClick="getPriceTotal()" required> 
                	Print Copy Change Background and Frame <br><br>
			</div>   
                    
		<!--</form>-->
	<div id="old_port_size">
   <font size="+1">Which size wish to create</font><br>
   		<!--<form name="size" id="frm_size">-->
           <input type="radio" name="old_size" id="3x5" price="20" value="3 x 5 (3R)" onClick="getPriceTotal()"> 3 x 5 (3R)<br>
           <input type="radio" name="old_size" id="4x6" price="25" value="4 x 6 (4R)" onClick="getPriceTotal()"> 4 x 6<br>
           <input type="radio" name="old_size" id="5x7" price="30" value="5 x 7" onClick="getPriceTotal()"> 5 x 7<br>
           <input type="radio" name="old_size" id="6x8" price="40" value="6 x 8" onClick="getPriceTotal()"> 6 x 8<br>
           <input type="radio" name="old_size" id="6x9" price="45" value="6 x 9" onClick="getPriceTotal()"> 6 x 9<br>
           <input type="radio" name="old_size" id="8x10" price="55" value="8 x 10" onClick="getPriceTotal()"> 8 x 10<br>
           <input type="radio" name="old_size" id="8x12" price="75" value="8 x 12" onClick="getPriceTotal()"> 8 x 12<br>
           <input type="radio" name="old_size" id="10x12" price="85" value="10 x 12" onClick="getPriceTotal()"> 10 x 12<br>
           <input type="radio" name="old_size" id="10x15" price="100" value="10 x 15" onClick="getPriceTotal()"> 10 x 15<br>
           <input type="radio" name="old_size" id="10x18" price="120" value="10 x 18" onClick="getPriceTotal()"> 10 x 18<br>
           <input type="radio" name="old_size" id="12x15" price="140" value="12 x 15" onClick="getPriceTotal()"> 12 x 15<br>
           <input type="radio" name="old_size" id="12x18" price="170" value="12 x 18" onClick="getPriceTotal()"> 12 x 18<br>   
           <input type="radio" name="old_size" id="16x24" price="900" value="16 x 24 (Large Format)" onClick="getPriceTotal()"> 16 x 24 (Large Format)<br>
           <input type="radio" name="old_size" id="18x24" price="1150" value="18 x 24 (Large Format)" onClick="getPriceTotal()"> 18 x 24 (Large Format)<br>
           <input type="radio" name="old_size" id="20x24" price="1350" value="20 x 24 (Large Format)" onClick="getPriceTotal()"> 20 x 24 (Large Format)<br>
           <input type="radio" name="old_size" id="20x30" price="1500" value="20 x 30 (Large Format)" onClick="getPriceTotal()"> 20 x 30 (Large Format)<br>
           <input type="radio" name="old_size" id="24x36" price="2000" value="24 x 36 (Large Format)" onClick="getPriceTotal()"> 24 x 36 (Large Format)<br>
           </div><br>

	<div id="old_frm_type">          
	<font size="+1"> Which type of Frame you need </font><br>
    	<!--<form name="frame" id="frm_frme_type">-->
            <input type="radio" name="old_frm_type" id="wd_no_gls" onClick="getPriceTotal()" rate="1.5" value="Wooden Frame with Normal Glass"> Wooden Frame with Normal Glass<br>
            <input type="radio" name="old_frm_type" id="wd_mt_gls" onClick="getPriceTotal()" rate="1.75" value="Wooden Frame with Matte Glass" > Wooden Frame with Matte Glass <br>
            <input type="radio" name="old_frm_type" id="bx_frm" onClick="getPriceTotal()" rate="2" value="Box Frame" > Box Frame<br><br> </div>
          
   <div id="old_bg_port">
   <font size="+1">If you wish to Change the background of the Picture</font><br>
   <input type="radio" name="old_ch_bg" value="Curtain Background" id="curtain" charge="250"> Curtain Backgrounds<br>
   <input type="radio" name="old_ch_bg" value="Out Door Background" id="outDoor" charge="250"> Out Door Backgrounds<br>
   <input type="radio" name="old_ch_bg" value="Glamour Background" id="curtain" charge="250"> Glamour Backgrounds<br>	
   </div> <br>     
   
  <div class="form-group" id="old_dec">
  	<font size="+1">Description </font>
    <textarea class="form-control" name="old_des" id="old_des" rows="3" placeholder="Please Add Your Comment here.."></textarea>
  </div> 
  Upload Your Image   
     <input type="file" name="uploadedfile" multiple><br>  
            
  
  
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
    

</body>
</html>
