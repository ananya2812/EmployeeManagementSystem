<?php

require_once('/home/ananya/Documents/codes/EMS/errorcheck.php');
$error = new error_check();
$error->checkerror();
require_once('/home/ananya/Documents/codes/EMS/connection.php');
require_once('/home/ananya/Documents/codes/EMS/lib/smtemplate.php');

class login
{
	
	function login_func () {
	
		$con = new connection();
		
		if($con->login())
		{	
						
			$con->view();
			
		} 
		else 
		{
			$tpl = new SMTemplate();
			$tpl->render('register', $data=array());
			echo "<script language='javascript' type='text/javascript'>";
			echo "alert('Invalid Credentials.. Please Register or Login Again!!');";
			echo "</script>";
		}
		


 	}
}

$log = new login();
$log->login_func();
?>
