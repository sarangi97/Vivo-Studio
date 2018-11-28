<?php
	session_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>:: Payments::</title>
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
	  
<div>
   		<font size="+2"> Do Your Payment Here.. </font><hr>
</div>
	 <form method="post" action="bank.php">
<div class="row">
	<div class="col-xs-6 col-md-4">
    	<table class="table table-bordered" border="0">
        <th class="success" align="center">        	
            Your Order Summary
           </th>
         </table>
        </div>
  
  	<div class="col-xs-12 col-md-8">
    	<table class="table table-bordered" border="0">
          	<th class="success" align="center">
              	Choose a way to pay 
            </tr></table>         
         	
            <table class="table table-bordered" border="0">
            <tr class="danger">
            	<td class="col-xs-6 col-md-4" class="danger" align="right"> Country</td>
                <td class="clo-md-4"> 
                									<select name="country" id="country">
                									<option selected value=""> -- Select Your County --</option>
                                                    <option value="sl"> Sri Lanka </option>
                                                    <option value="in"> India</option>
                                                    <option value="us"> USA</option>
                                                    <option value="uk"> UK</option>
                                                    <option value="aus">Australia </option>
                								</select>
                </td>
            </tr>
            <tr class="danger">
            	<td class="col-xs-6 col-md-4" align="right"> Card Number</td>
                <td><input type="text" name="cardNo" id="cardNo" maxlength="16" required></td>
                </tr>
             <tr class="danger">
             	<td class="col-xs-6" align="right">Payment Type</td>
                <td><input type="image" id="visa" name="visa" src="images/visa.png" width="15%">
                	<input type="image" id="master" name="master"src="images/master.png" width="15%">
                    <input type="image" id="amex" name="amex" src="images/amex.png" width="15%">
                    <input type="image" id="disc" name="disc" src="images/disc.png" width="15%">
              </td>
              <tr class="danger">
              	<td class="col-xs-6" align="right">Expiration Date</td>
                <td>mm &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; yy<br> 	
                <input type="text" name="mm" maxlength="2" size="4"> |
                <input type="text" name="yy" maxlength="4" size="4"></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right">CSS</td>
                <td><input type="text" name="css" maxlength="3" size="4"></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right"> Frist Name </td>
                <td> <input type="text" name="fName" size="40"></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right"> Last Name </td>
                <td> <input type="text" name="lName" size="40"></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right"> Address Line 1 </td>
                <td> <input type="text" name="add_1" size="40"></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right"> Address Line 2<h6>(Optinal)</h6> </td>
                <td> <input type="text" name="Add_2" size="40"></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right"> City Code </td>
                <td> <input type="text" name="c_city" size="40"></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right"> Postal Code </td>
                <td> <input type="text" name="p_code" size="40"></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right"> Phone Type </td>
                <td><select>
                		<option id="home"> Home </option>
                        <option id="word"> Work </option>
                        <option id="mobile"> Mobile </option>
                	</select></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right"> Phone Number </td>
                <td> <input type="text" name="phoneNo" size="40"></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right">Email </td>
                <td> <input type="email" name="email" size="40"></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right"> Password </td>
                <td> <input type="password" name="pass" size="40"></td>
              </tr>
              <tr class="danger">
              	<td class="col-xs-6" align="right">Re-Enter Password</td>
                <td> <input type="text" name="pass" size="40"></td>
              </tr>              
            </table>
           
              <button class="btn btn-warning"> Next </button>
            </form> 
    </div>
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
    

   <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>

</body>
</html>
