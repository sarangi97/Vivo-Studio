<?php
	session_start(); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>:: Order Summary ::</title>
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
   		<h3> Your Order Summary</h3><hr>
</div>

    <div class="col-md-12">    
   	<?php

include 'connect.php';

  $selectSQL = "SELECT * FROM add_thanks WHERE image_id=(select MAX(image_id)from add_thanks)";
  if( !( $selectRes = mysql_query( $selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Submission Date</th>
      <th>Card Type</th>
      <th>Card Size</th>
      <th>Card Category</th>
      <th>Description</th>
      <th> Total Amount </th>
      <th> Uploaded Images Count </th>
    </tr>
  </thead>
  <tbody>
    <?php
      if( mysql_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysql_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['sub_date']}</td><td>{$row['card_type']}</td><td>{$row['card_size']}</td><td>{$row['card_cat']}</td>
		  <td>{$row['des']}</td><td>{$row['pay_amount']}</td><td>".$_GET['ic']."</td></tr>\n";
        }
      }
    ?>
  </tbody>
</table>
    <?php
  }

?><br>
  	<form name="payAmount" action="payments.php">
    <button class="btn btn-warning"> Pay Amount </button>
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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/docs.js"></script>

</body>
</html>
