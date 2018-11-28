<?php
			include 'connect.php';
			$crnt_pass 	= 	$_POST['crnt_pass'];
			$new_pass	=	$_POST['new_pass'];
			$cnfm_pass	=	$_POST['cnfm_pass'];
			
			$sql = "SELECT * FROM register WHERE reg_id =('$reg_id') AND pass=('$pass')";
			$result_1 = mysql_query ($sql,$con);
			
			if (mysql_num_rows($result_1==1)){
				$sql_2 = "UPDATE register SET pass=('$new_pass') WHERE reg_id='$reg_id'";
				$result_2 = mysql_query($sql_2, $con);
				}
			else
			{
				header ('Loaction: user_details.php');
				mysql_close($con);
				}
		?>	