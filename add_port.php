<?php
	session_start(); 
	include 'connect.php';
?>
<!doctype html>
<html>
<head>

	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>
	
<meta charset="utf-8">
<title>:: Portraits Photos Re-touch::</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/local.css" rel="stylesheet" type="text/css">

<!-- Validation Scripts -->

<script type="text/javascript">			
function getPriceTotal()
{	
	x =$('input:radio[name=port_type]:checked').val();
    var tot =0;	
    if (x=="Soft Copy"){		
		tot = 500;		
		$("#port_port_size").hide();
		$("#port_bg_port").hide();
		$("#port_frm_type").hide();
		$("#port_bg_port").hide();
		$("#port_dec").hide();	
		
	}
	else if (x=="Print Copy"){
		tot = $('input:radio[name=port_size]:checked').attr("price");
		$("#port_port_size").show();
		$("#port_bg_port").show();
		$("#port_frm_type").hide();
		$("#port_bg_port").hide();
		$("#port_dec").show();
	}
	else if (x=="Print Copy with background Change"){
		tot = $('input:radio[name=port_size]:checked').attr("price");
		tot=((tot*1) + (250*1));
		$("#port_port_size").show();
		$("#port_bg_port").show();
		$("#port_frm_type").hide();
		$("#port_bg_port").show();
		$("#port_dec").show();
	}
	else if (x=="Print with Frame"){
		tot = $('input:radio[name=port_size]:checked').attr("price");
		rat= $('input:radio[name=port_frm_type]:checked').attr("rate");
		tot=((tot*rat));
		$("#port_port_size").show();
		$("#port_bg_port").show();
		$("#port_frm_type").show();
		$("#port_bg_port").hide();
		$("#port_dec").show();
	}
	else if (x){
		tot = $('input:radio[name=port_size]:checked').attr("price");		
		rat= $('input:radio[name=port_frm_type]:checked').attr("rate");
		tot=((tot*rat) + (250*1));
		$("#port_port_size").show();
		$("#port_bg_port").show();
		$("#port_frm_type").show();
		$("#port_bg_port").show();
		$("#port_dec").show();
	}
	$("#totalPrice").val(tot);
}
</script>

    <link href="index_files/bootstrap.css" rel="stylesheet">
    <link href="index_files/justified-nav.css" rel="stylesheet">

	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
	<script src="js/jquery-1.8.2.min.js" type="text/javascript">
	</script>
	<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
	</script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
	</script>
	<script>
		jQuery(document).ready( function() {
			// binds form submission and fields to the validation engine
			jQuery("#portDb").validationEngine();
		});
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
          <li><a href="#">Samples</a></li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
      <br /> 
      <!-- end of links -->

    <div class="col-md-12">
    <form action="port_detail_db.php" id="portDb" method="post">     
        <!--<form name="type" id="frm_type">-->
            <font size="+2"> Fill Below Details for Your Portraits Images </font><br><hr>   
            <font size="+1">Which is your choice wish to create your album</font><br>
			
            <input type="radio" name="port_type" id="port_soft" price="500" value="Soft Copy" onClick="getPriceTotal()"> 
                	Just Softcopy <br>           
			<input type="radio" name="port_type" id="port_print" value="Print Copy" onClick="getPriceTotal()"> 
                	Printed Copy<br>    		
			<input type="radio" name="port_type" id="port_print_bg" value="Print Copy with background Change" onClick="getPriceTotal()">
                	Printed Copy with Background Change<br>      	
			<input type="radio" name="port_type" id="port_print_frm" value="Print with Frame" onClick="getPriceTotal()"> 
                	Print with Frame <br>			
			<input type="radio" name="port_type" id="port_print_frm" value="Print Copy Change Background and Frame" onClick="getPriceTotal()"> 
                	Print Copy Change Background and Frame <br><br>
		 <br>
        <!--</form>-->
	<div id="port_port_size">
   <font size="+1">Which size wish to create</font><br>
   		
		<?php
		$sq="select * from print_size";
		$res=mysql_query($sq,$con);
		while($row=mysql_fetch_array($res)){
			echo '<input type="radio" name="port_size" id="'.$row['port_size'].'" price="'.$row['price'].'" value="'.$row['val'].'" 
			onClick="getPriceTotal()"> &nbsp;&nbsp;' .$row['val'].'<br>';
		}
		?><br>
</div>
	<div id="port_frm_type">          
	<font size="+1"> Which type of Frame you need </font><br>
    	<!--<form name="frame" id="frm_frme_type">-->
            <input type="radio"  name="port_frm_type" id="wd_no_gls" onClick="getPriceTotal()" rate="1.5" value="Wooden Frame with Normal Glass"> Wooden Frame with Normal Glass<br>
            <input type="radio" name="port_frm_type" id="wd_mt_gls" onClick="getPriceTotal()" rate="1.75" value="Wooden Frame with Matte Glass" > Wooden Frame with Matte Glass <br>
            <input type="radio" name="port_frm_type" id="bx_frm" onClick="getPriceTotal()" rate="2" value="Box Frame" > Box Frame<br><br> </div>
          
   <div id="port_bg_port">
   <font size="+1">If you wish to Change the background of the Picture</font><br>
   <input type="radio" name="port_ch_bg" value="Curtain Background" id="curtain" charge="250"> Curtain Backgrounds<br>
   <input type="radio" name="port_ch_bg" value="Out Door Background" id="outDoor" charge="250"> Out Door Backgrounds<br>
   <input type="radio" name="port_ch_bg" value="Glamour Background" id="curtain" charge="250"> Glamour Backgrounds<br>	
   </div> <br>     
   
  <div class="form-group" id="port_dec">
  	<font size="+1">Description </font>
    <textarea class="form-control" name="port_des" id="port_des" rows="3" placehporter="Please Add Your Comment here.."></textarea>
  </div>  
  
    Upload Your Image   
     <input type="file" name="uploadedfile_port" multiple><br>  
            
  <div class="form-group">
  	<font size="+1">Your Payable Amount </font>
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
