<?php

require_once('/home/ananya/Documents/codes/EMS/errorcheck.php');
$error = new error_check();
$error->checkerror();
require_once('/home/ananya/Documents/codes/EMS/connection.php');
require_once('/home/ananya/Documents/codes/EMS/lib/smtemplate.php');

class reg
{	
	function register_func()
	{
		
		$con = new connection();
		$con->insert();
		
	}
}
$r = new reg();
$r->register_func();
?>
