<?php
	$con = mysql_connect ("localhost", "root", "")
		or die ("Oopps! Connection Erorr!" . mysql_error () );
		
	$db = mysql_select_db ("niop")
		or die ("Oopps! Database Erorr!" . mysql_error() );
?>
