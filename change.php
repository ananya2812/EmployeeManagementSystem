<?php

require_once('/home/ananya/Documents/codes/EMS/errorcheck.php');
$error = new error_check();
$error->checkerror();
require_once('/home/ananya/Documents/codes/EMS/connection.php');
require_once('/home/ananya/Documents/codes/EMS/lib/smtemplate.php');

class change
{		

function del() 
		{
			$id = $_POST["eid"];
			print_r($id);			
			$con = new connection();
			$con->delete_record($id);
	
		}
	function upd_ren()
	{
		
		$data = array(
    		'eid' => $_POST["eid"] );
		$tpl = new SMTemplate();
		$tpl->render('update', $data);
	}	
	function upd()
	{		
		$id=$_POST["eid"];
		$con = new connection();		
		$con->update_record($id);
	}	
}

if(isset($_POST["update"]))
		{
		$d = new change();
		$d->upd_ren();
		}
if(isset($_POST["delete"]))
		{		
			$d = new change();
			$d->del();
		}
if(isset($_POST["ananya"]))
		{
		$d = new change();
		$d->upd();
		}
?>
